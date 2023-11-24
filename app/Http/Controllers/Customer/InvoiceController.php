<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $pageTitle = 'Invoice';
        $breadcrumbs = [['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
        ];

        return view('customer.invoice.index', $viewParams);
    }

    public function show()
    {
        $pageTitle = 'Invoice 34782';
        $breadcrumbs = [['text' => 'Invoices', 'url' => '/customer/invoice'], ['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs
        ];

        return view('customer.invoice.view', $viewParams);
    }
}
