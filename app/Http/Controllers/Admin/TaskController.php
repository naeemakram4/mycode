<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Service;
use App\Models\Task;
use App\Models\TaskGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    public function index()
    {
        $pageTitle = 'Task';
        $breadcrumbs = [['text' => $pageTitle]];
        $action = [
            'text' => 'Add Task',
            'route' => 'javascript:void(0);',
            'data' => 'data-bs-toggle=modal data-bs-target=#addNewTask'
        ];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'action' => $action,
            'tasks' => Task::get(),
            'services' => Service::get(),
            'employees' => Employee::get(),
            'taskPriorities' => Task::allTaskPriorities()
        ];

        return view('admin.task.index', $viewParams);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'project_id' => 'required',
            'subject' => 'required|string',
            'task_assignees' => 'required|array',
            'due_date' => 'required',
            'task_priority' => 'required',
            'service' => 'required',
            'status' => 'required',
        ]);

        $task = new Task();
        $task->project()->associate($validatedData['project_id']);
        $task->subject = $validatedData['subject'];
        $task->due_date = $validatedData['due_date'];
        $task->priority = $validatedData['task_priority'];
        $task->service()->associate($validatedData['service']);
        $task->description = $request->description;
        $task->status = $validatedData['status'];
        if ($task->save()) {
            $task->employees()->attach($validatedData['task_assignees']);

            Session::flash('successMessage', 'A new task has been created successfully!');
            return redirect()->back();
        }

        return redirect()->back()
            ->withInput()->withErrors('Failed to create task, Try again!');
    }

    public function show($id)
    {
        $task = \App\Models\Task::with('employees', 'employees.user', 'service')
            ->whereId($id)
            ->first();

        if ($task) {
            return response()->json($task);
        }
        return response()->json([
            'error' => 'Invalid request'
        ], 404);
    }

    public
    function edit($id)
    {
        $task = Task::with('employees', 'employees.user')->whereId($id)->first();
        return response()->json($task);
    }

    public
    function update(Request $request, Task $task)
    {
        $validatedData = $request->validate([
            'subject' => 'required|string',
            'task_assignees' => 'required',
            'due_date' => 'required',
            'task_priority' => 'required',
            'service' => 'required',
            'status' => 'required',
        ]);

        $task->subject = $validatedData['subject'];
        $task->due_date = $validatedData['due_date'];
        $task->priority = $validatedData['task_priority'];
        $task->service()->associate($validatedData['service']);
        $task->description = $request->description;
        $task->status = $validatedData['status'];
        if ($task->save()) {
            $task->employees()->sync($validatedData['task_assignees']);

            Session::flash('successMessage', 'Task has been updated successfully!');
            return redirect()->back();
        }

        return redirect()->back()
            ->withInput()->withErrors('Failed to update task, Try again!');
    }

    public
    function destroy(Task $task)
    {
        //
    }

    public
    function addGroup(Request $request)
    {
        $validatedData = $request->validate([
            'group_name' => 'required|string'
        ]);

        $taskGroup = new TaskGroup();
        $taskGroup->user_id = Auth::user()->id;
        $taskGroup->name = $validatedData['group_name'];

        if ($taskGroup->save()) {
            Session::flash('successMessage', 'A new task group added successfully!');
            return redirect()->back();
        }

        return redirect()->back()
            ->withErrors('Invalid data, Try again!');
    }

    public
    function viewGroupTasks($id)
    {
        $pageTitle = 'Task';
        $breadcrumbs = [['text' => $pageTitle]];
        $action = [
            'text' => 'Add Task',
            'route' => 'javascript:void(0);',
            'data' => 'data-bs-toggle=modal data-bs-target=#addNewTask'
        ];
        $tasks = Task::where('task_group_id', $id)->get();

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'action' => $action,
            'groups' => TaskGroup::withCount('tasks')->get(),
            'tasks' => $tasks,
            'services' => Service::get(),
            'employees' => Employee::get(),
            'taskPriorities' => Task::allTaskPriorities()
        ];

        return view('admin.task.index', $viewParams);
    }

    public function updateStatus(Request $request)
    {
        $task = Task::whereId($request->task_id)->first();
        if ($task) {
            $task->status = $request->drawer_task_status_update;
            $task->save();

            Session::flash('successMessage', 'Task status has been updated successfully!');
            return redirect()->back();
        }

        return redirect()->back()
            ->withErrors('Invalid data, try again!');
    }
}
