<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ReferredClient;
use Illuminate\Http\Request;

class ReferredClientController extends Controller
{
    public function index()
    {
        $pageTitle = 'Referred Client';
        $breadcrumbs = [['text' => $pageTitle]];
        $action = [
            'text' => 'Create Referred Client',
            'route' => 'javascript:void(0);',
            'data' => ''
        ];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'action' => $action,
        ];

        return view('admin.lead.referred_client.index', $viewParams);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ReferredClient $referredClient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReferredClient $referredClient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ReferredClient $referredClient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReferredClient $referredClient)
    {
        //
    }
}
