<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AdminDashboardController extends AdminController
{
    public function index(Request $request)
    {
        $pageTitle = 'Dashboard';
        $dateRangeFilter = ['enable'];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => [],
            'dateRangeFilter' => $dateRangeFilter
        ];

        return view('admin.dashboard.index', $viewParams);
    }
}
