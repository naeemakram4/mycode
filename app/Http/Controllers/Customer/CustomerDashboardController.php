<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerDashboardController extends Controller
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

        return view('customer.dashboard.index', $viewParams);
    }
}
