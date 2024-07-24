<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class AdminDashboardController extends AdminController
{
    public function index(Request $request)
    {
        $pageTitle = 'Dashboard';
        $dateRangeFilter = ['enable'];

        $projectsCount = new Project();
        $chartData = [];
        $labels = [ucfirst(Project::ACTIVE_STATUS), ucfirst(Project::COMPLETED_STATUS), ucfirst(Project::TO_DO_STATUS)];
        foreach ($labels as $label) {
            $chartData[] = $projectsCount->whereStatus(strtolower($label))->count();
        }

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => [],
            'dateRangeFilter' => $dateRangeFilter,
            'labels' => json_encode($labels),
            'chartData' => json_encode($chartData),
            'chartLabelAndData' => array_combine($labels, $chartData),
            'projects' => Project::withCount('tasks')->latest()->get(),
            'tasks' => Task::get(),
        ];

        return view('admin.dashboard.index', $viewParams);
    }
}
