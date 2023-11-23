<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    public function index()
    {
        $pageTitle = 'Projects';
        $breadcrumbs = [['text' => $pageTitle]];
        $action = [
            'text' => 'Create New Project',
            'route' => route('admin.project.create'),
        ];

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
            'description' => 'required|string',
            'start_date' => 'required',
            'due_date' => 'required',
            'client_id' => 'required',
            'status' => 'required'
        ]);

        $project = new Project();
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

        return view('admin.project.view', $project);
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
            'description' => 'required|string',
            'start_date' => 'required',
            'due_date' => 'required',
            'client_id' => 'required',
            'status' => 'required'
        ]);

        if ($project) {
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
}
