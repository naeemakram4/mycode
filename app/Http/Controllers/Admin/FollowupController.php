<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Followup;
use Illuminate\Http\Request;

class FollowupController extends Controller
{
    public function index()
    {
        $pageTitle = 'Followup';
        $breadcrumbs = [['text' => $pageTitle]];
        $action = [
            'text' => 'Create New Followup',
            'route' => 'javascript:void(0);',
        ];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'action' => $action,
        ];

        return view('admin.followup.index', $viewParams);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Followup $followup)
    {
        //
    }

    public function edit(Followup $followup)
    {
        //
    }

    public function update(Request $request, Followup $followup)
    {
        //
    }

    public function destroy(Followup $followup)
    {
        //
    }
}
