<?php
declare(strict_types=1);

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeDashboard extends Controller
{
    public function index()
    {
        $pageTitle = 'Dashboard';
        $dateRangeFilter = ['enable'];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => [],
            'dateRangeFilter' => $dateRangeFilter
        ];

        return view('employee.dashboard.index', $viewParams);
    }
}
