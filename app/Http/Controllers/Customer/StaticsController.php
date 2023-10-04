<?php
declare(strict_types=1);

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticsController extends Controller
{
    public function seo()
    {
        $pageTitle = 'SEO Statics';
        $breadcrumbs = [['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs
        ];

        return view('customer.statics.seo.index', $viewParams);
    }

    public function ppc()
    {
        $pageTitle = 'PPC Statics';
        $breadcrumbs = [['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs
        ];

        return view('customer.statics.ppc.index', $viewParams);
    }
}
