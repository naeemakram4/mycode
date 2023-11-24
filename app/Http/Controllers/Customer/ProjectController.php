<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $pageTitle = 'Projects';
        $breadcrumbs = [['text' => $pageTitle]];
        $action = [
            'text' => 'Create New Project',
            'route' => route('customer.project.create'),
        ];

        $projectsCount = new Project();
        $chartData = [];
        $labels = [ucfirst(Project::ACTIVE_STATUS), ucfirst(Project::COMPLETED_STATUS), ucfirst(Project::TO_DO_STATUS)];
        foreach ($labels as $label) {
            $chartData[] = $projectsCount->where('client_id', Auth::user()->client->id)
                ->whereStatus(strtolower($label))
                ->count();
        }

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'action' => $action,
            'labels' => json_encode($labels),
            'chartData' => json_encode($chartData),
            'chartLabelAndData' => array_combine($labels, $chartData),
            'projects' => Project::where('client_id', Auth::user()->client->id)->latest()->get(),
            'status' => Project::getAllProjectStatus()
        ];

        return view('customer.project.index', $viewParams);
    }

    public function create()
    {
        $pageTitle = 'Create Project';
        $breadcrumbs = [['text' => 'Projects', 'url' => '\customer\project'], ['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'status' => Project::getAllProjectStatus(),
        ];

        return view('customer.project.create', $viewParams);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'project_name' => 'required|string',
            'description' => 'required|string',
            'start_date' => 'required',
            'due_date' => 'required',
            'status' => 'required'
        ]);

        $project = new Project();
        $project->client()->associate(Auth::user()->client->id);
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
            return redirect()->route('customer.project.index');
        }

        return redirect()->back()
            ->withErrors('Failed to create new project, Try again!')
            ->withInput();
    }

    public function show(Project $project)
    {
        $pageTitle = 'Project Details';
        $breadcrumbs = [['text' => 'Projects', 'url' => '/customer/project'], ['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'project' => $project
        ];
        return view('customer.project.view', $viewParams);
    }

    public function edit(Project $project)
    {
        $pageTitle = 'Edit Project';
        $breadcrumbs = [['text' => 'Projects', 'url' => '/customer/project'], ['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'project' => $project,
            'status' => Project::getAllProjectStatus(),
        ];

        return view('customer.project.edit', $viewParams);
    }

    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'project_name' => 'required|string',
            'description' => 'required|string',
            'start_date' => 'required',
            'due_date' => 'required',
            'status' => 'required'
        ]);

        if ($project) {
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
                return redirect()->route('customer.project.index');
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

    public function target(Project $project, $id)
    {
        $pageTitle = 'Project Details';
        $breadcrumbs = [['text' => 'Projects', 'url' => '/customer/project'], ['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'project' => Project::whereId($id)->first()
        ];

        return view('customer.project.view', $viewParams);
    }
}
