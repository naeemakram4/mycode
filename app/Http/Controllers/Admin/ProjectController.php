<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Project;
use App\Models\SalesRepresentativeDim;
use App\Models\Service;
use App\Traits\FileHandling;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class ProjectController extends Controller
{
    use FileHandling;

    public function index(Request $request)
    {
        $pageTitle = 'Projects';
        $breadcrumbs = [['text' => $pageTitle]];
        $action = [
            'text' => 'Create New Project',
            'route' => route('admin.project.create'),
        ];

        if ($request->ajax()) {
            $data = Project::with('employees')->latest();

            return Datatables::eloquent($data)
                ->editColumn('id', function ($data) {
                    return '<a href="' . route('admin.project.show', $data->id) . '" >' . $data->id . '</a>';
                })
                ->editColumn('logo', function ($data) {
                    if ($data->logo) {
                        return '<div class="symbol symbol-50px w-50px bg-light">
                            <img src="' . asset('storage/' . $data->logo) . '" alt="image" class="p-2">
                        </div>';
                    }
                    return '<div class="symbol symbol-50px w-50px bg-light">
                            <img src="' . asset('assets/media/logos/avatar.png') . '" alt="image" class="p-2">
                        </div>';
                })
                ->addColumn('client', function ($data) {
                    return $data->client->user->getFullName();
                })
                ->addColumn('start_date', function ($data) {
                    return Carbon::parse($data->start_date)->format('m-d-Y');
                })
                ->editColumn('status', function ($data) {
                    if ($data->status == \App\Models\Project::COMPLETED_STATUS) {
                        return '<span class="badge badge-light-success fw-bolder me-auto px-4 py-3">' . ucfirst($data->status) . '</span>';
                    } elseif ($data->status == \App\Models\Project::ACTIVE_STATUS) {
                        return '<span class="badge badge-light-primary fw-bolder me-auto px-4 py-3">' . ucfirst($data->status) . '</span>';
                    } elseif ($data->status == \App\Models\Project::INACTIVE_STATUS) {
                        return '<span class="badge badge-light-danger fw-bolder me-auto px-4 py-3">' . ucfirst($data->status) . '</span>';
                    } elseif ($data->status == \App\Models\Project::PENDING_STATUS) {
                        return '<span class="badge badge-light-warning fw-bolder me-auto px-4 py-3" >' . ucfirst($data->status) . ' </span>';
                    } elseif ($data->status == \App\Models\Project::TO_DO_STATUS) {
                        return '<span class="badge badge-light-info fw-bolder me-auto px-4 py-3" >' . ucfirst($data->status) . '</span>';
                    } else {
                        return '';
                    }
                })
                ->filter(function ($instance) use ($request) {
                    if ($request->get('date_range') != '') {
                        $dates = explode("-", $request->get('date_range'));
                        $dateStart = date('Y-m-d', strtotime($dates[0]));
                        $dateEnd = date('Y-m-d', strtotime($dates[1]));
                        $instance->whereBetween('created_at', [$dateStart . " 00:00:00", $dateEnd . " 23:59:59"]);
                    }

                    if ($request->get('status') == Project::COMPLETED_STATUS
                        || $request->get('status') == Project::ACTIVE_STATUS
                        || $request->get('status') == Project::INACTIVE_STATUS
                        || $request->get('status') == Project::PENDING_STATUS
                        || $request->get('status') == Project::TO_DO_STATUS) {
                        $instance->where('status', $request->get('status'));
                    }

                    if ($request->get('client') != '') {
                        $instance->where('client_id', $request->get('client'));
                    }

                    if (!empty($request->get('search_project'))) {
                        $projectName = $request->get('search_project');
                        $instance->where('name', 'like', '%' . $projectName . '%');
                    }
                })
                ->rawColumns(['id', 'logo', 'name', 'description', 'start_date', 'client', 'status'])
                ->make(true);
        }

        $projectsCount = new Project();
        $chartData = [];
        $labels = [ucfirst(Project::ACTIVE_STATUS), ucfirst(Project::COMPLETED_STATUS), ucfirst(Project::TO_DO_STATUS)];
        foreach ($labels as $label) {
            $chartData[] = $projectsCount->whereStatus(strtolower($label))->count();
        }

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'action' => $action,
            'labels' => json_encode($labels),
            'chartData' => json_encode($chartData),
            'chartLabelAndData' => array_combine($labels, $chartData),
            'projects' => Project::latest()->get(),
            'clients' => Client::get(),
            'status' => Project::getAllProjectStatus()
        ];

        return view('admin.project.index', $viewParams);
    }

    public function create()
    {
        $pageTitle = 'Create Project';
        $breadcrumbs = [['text' => 'Projects', 'url' => '\admin\project'], ['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'status' => Project::getAllProjectStatus(),
            'clients' => Client::get()
        ];

        return view('admin.project.create', $viewParams);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'project_name' => 'required|string',
            'description' => 'nullable',
            'start_date' => 'nullable',
            'due_date' => 'nullable',
            'client_id' => 'required',
            'status' => 'required'
        ]);

        if ($request->file('project_logo')) {
            $projectLogo = $this->uploadObject(config('houmanity.filehandling.storage.projects'), $request->file('project_logo'));
        }

        $project = new Project();
        $project->client()->associate($validatedData['client_id']);
        $project->logo = $projectLogo ?? null;
        $project->name = $validatedData['project_name'];
        $project->description = $validatedData['description'];
        $project->start_date = $validatedData['start_date'];
        $project->due_date = $validatedData['due_date'];
        $project->status = $validatedData['status'];

        if ($project->save()) {
            if ($request->employees) {
                $project->employees()->sync($request->employees);
            }
            Session::flash('successMessage', 'A new project has been created successfully!');
            return redirect()->route('admin.project.index');
        }

        return redirect()->back()
            ->withErrors('Failed to create new project, Try again!')
            ->withInput();
    }

    public function show(Project $project)
    {
        $pageTitle = 'Project Details';
        $breadcrumbs = [['text' => 'Projects', 'url' => '/admin/project'], ['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'project' => $project
        ];

        return view('admin.project.view', $viewParams);
    }

    public function edit(Project $project)
    {
        $pageTitle = 'Edit Project';
        $breadcrumbs = [['text' => 'Projects', 'url' => '/admin/project'], ['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'project' => $project,
            'status' => Project::getAllProjectStatus(),
            'clients' => Client::get(),
        ];

        return view('admin.project.edit', $viewParams);
    }

    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'project_name' => 'required|string',
            'description' => 'nullable',
            'start_date' => 'nullable',
            'due_date' => 'nullable',
            'client_id' => 'required',
            'status' => 'required'
        ]);

        if ($project) {
            if ($request->hasFile('project_logo')) {
                $existingImage = $project->logo;
                $projectLogo = $this->uploadObject(config('houmanity.filehandling.storage.projects'), $request->file('project_logo'));
                $project->logo = $projectLogo;

                if ($existingImage) {
                    $this->deleteObject($existingImage);
                }
            }

            $project->client()->associate($validatedData['client_id']);
            $project->name = $validatedData['project_name'];
            $project->description = $validatedData['description'];
            $project->start_date = $validatedData['start_date'];
            $project->due_date = $validatedData['due_date'];
            $project->status = $validatedData['status'];

            if ($project->save()) {
                if ($request->employees) {
                    $project->employees()->sync($request->employees);
                }

                Session::flash('successMessage', 'Project has been updated successfully!');
                return redirect()->route('admin.project.index');
            }
        }

        return redirect()->back()
            ->withErrors('Failed to update project, Try again!')
            ->withInput();
    }

    public function destroy(Project $project)
    {
        //
    }

    public function task(Project $project, $id)
    {
        $pageTitle = 'Project Details';
        $breadcrumbs = [['text' => 'Projects', 'url' => '/admin/project'], ['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'project' => Project::whereId($id)->first()
        ];

        return view('admin.project.view', $viewParams);
    }

    public function getEmployees($id)
    {
        $employees = Employee::with('user')
            ->whereHas('clients', function ($builder) use ($id) {
                return $builder->where('id', $id);
            })->get();

        return response()->json($employees->toArray(), 200);
    }
}
