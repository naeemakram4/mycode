<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
            'groups' => TaskGroup::withCount('tasks')->get(),
            'tasks' => Task::get()
        ];

        return view('admin.task.index', $viewParams);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Task $task)
    {
        //
    }

    public function edit(Task $task)
    {
        //
    }

    public function update(Request $request, Task $task)
    {
        //
    }

    public function destroy(Task $task)
    {
        //
    }

    public function addGroup(Request $request)
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

    public function viewGroupTasks($id)
    {
        $pageTitle = 'Task';
        $breadcrumbs = [['text' => $pageTitle]];
        $action = [
            'text' => 'Add Task',
            'route' => 'javascript:void(0);',
            'data' => ''
        ];
        $tasks = Task::where('task_group_id', $id)->get();

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'action' => $action,
            'groups' => TaskGroup::
            withCount('tasks')->
//            latest('task_group_order')
            get(),
            'tasks' => $tasks
        ];

        return view('admin.task.index', $viewParams);
    }
}
