<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function project()
    {
        $pageTitle = 'Project Report';
        $breadcrumbs = ['text' => $pageTitle];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => [],
        ];

        return view('admin.report.index', $viewParams);
    }

    public function task()
    {
        $pageTitle = 'Task Report';
        $breadcrumbs = ['text' => $pageTitle];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => [],
        ];

        return view('admin.report.index', $viewParams);
    }

    public function invoice()
    {
        //
    }

    public function lead()
    {
        //
    }

    public function customer()
    {
        //
    }

    public function proposal()
    {
        //
    }

    public function followup()
    {
        //
    }

}
