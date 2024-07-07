<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use App\Models\TaskComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $pageTitle = 'Projects';
        $breadcrumbs = [['text' => $pageTitle]];

        $projectsCount = new Project();
        $chartData = [];
        $labels = [ucfirst(Project::ACTIVE_STATUS), ucfirst(Project::COMPLETED_STATUS), ucfirst(Project::TO_DO_STATUS)];
        foreach ($labels as $label) {
            $chartData[] = $projectsCount->whereHas('employees', function($builder){
                return $builder->where('employee_id', Auth::user()->employee->id);
            })
                ->whereStatus(strtolower($label))
                ->count();
        }

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'labels' => json_encode($labels),
            'chartData' => json_encode($chartData),
            'chartLabelAndData' => array_combine($labels, $chartData),
            'tasks' => Task::with('employees')
                ->whereHas('employees', function($builder) {
                    return $builder->where('employee_id', auth()->user()->employee->id);
                })->get(),
            'projects' => Project::whereHas('employees', function($builder){
                return $builder->where('employee_id', Auth::user()->employee->id);
            })->latest()->get(),
        ];

        return view('employee.project.index', $viewParams);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Project $project)
    {
        $pageTitle = 'Project Details';
        $breadcrumbs = [['text' => 'Projects', 'url' => '/employee/project'], ['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'project' => $project
        ];
        return view('employee.project.view', $viewParams);
    }

    public function edit(Project $project)
    {
        //
    }

    public function update(Request $request, Project $project)
    {
        //
    }

    public function destroy(Project $project)
    {
        //
    }

    public function task(Project $project, $id)
    {
        $pageTitle = 'Project Details';
        $breadcrumbs = [['text' => 'Projects', 'url' => '/employee/project'], ['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'project' => Project::whereId($id)->first()
        ];

        return view('employee.project.view', $viewParams);
    }

    public function taskComments($id)
    {
        $pageTitle = 'Task Comments';
        $breadcrumbs = [['text' => 'Projects', 'url' => '/employee/project'], ['text' => $pageTitle]];

        $task = Task::with('taskComments')->whereId($id)->first();
        if ($task) {
            $viewParams = [
                'pageTitle' => $pageTitle,
                'breadcrumbs' => $breadcrumbs,
                'task' => $task
            ];

            return view('employee.project.components.view.task.comments', $viewParams);
        }

        return redirect()->back()
            ->withErrors('Invalid data provided');
    }

    public function taskCommentSubmit(Request $request, $id)
    {
        if ($request->file('task_comment_file')) {
            $taskCommentFile = $this->uploadObject(config('houmanity.filehandling.storage.tasks'), $request->file('task_comment_file'));
        }

        $taskComment = new TaskComment();
        $taskComment->task()->associate($id);
        $taskComment->user()->associate(auth()->user()->id);
        $taskComment->file = $taskCommentFile ?? null;
        $taskComment->comment = $request->task_comment;

        if ($taskComment->save()) {
            Session::flash('successMessage', 'Comment has been submitted successfully!');
            return redirect()->back();
        }

        return redirect()->back()
            ->withErrors('Failed to submit comment, Try again!');
    }

    public function downloadCommentFile($file)
    {
        return response()->download($file);
    }

    public function taskCommentFileDownload($id)
    {
        $comment = TaskComment::whereId($id)->first();
        if ($comment) {
            $filePath = public_path('/storage/'.$comment->file);
            return $this->downloadCommentFile($filePath);
        }

        return redirect()->back()
            ->withErrors('Invalid data!');
    }
}
