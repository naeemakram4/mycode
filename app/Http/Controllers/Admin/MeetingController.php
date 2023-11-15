<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class MeetingController extends Controller
{
    public function index()
    {
        $pageTitle = 'Meetings';
        $breadcrumbs = [['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
        ];

        return view('admin.meeting.index', $viewParams);
    }
}
