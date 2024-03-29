<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileManagerController extends Controller
{
    public function index()
    {
        $pageTitle = 'File Manager';
        $breadcrumbs = [['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'clients' => Client::latest()->get(),
        ];

        return view('admin.file-manager.index', $viewParams);
    }

    public function directories($id)
    {
        $pageTitle = 'File Manager';
        $client = Client::with('projects', 'requests')->whereId($id)->first();

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => [['text' => $pageTitle, 'url' => '/admin/file-manager'], ['text' => $client->company_name]],
            'client' => $client
        ];

        return view('admin.file-manager.files', $viewParams);
    }

    public function projectFiles($id)
    {
        $pageTitle = 'Project Files';
        $project = Project::with('tasks')->whereId($id)->first();

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => [
                ['text' => 'File Manager', 'url' => '/admin/file-manager'],
                ['text' => $project->client->company_name, 'url' => '/admin/file-manager/'.$project->client->id.'/directories'],
                ['text' => $project->name]
            ],
            'project' => $project
        ];

        return view('admin.file-manager.project-files', $viewParams);
    }

    public function requestFiles($id)
    {
        $pageTitle = 'Request Files';
        $request = \App\Models\Request::whereId($id)->first();

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => [
                ['text' => 'File Manager', 'url' => '/admin/file-manager'],
                ['text' => $request->client->company_name, 'url' => '/admin/file-manager/'.$request->client->id.'/directories'],
                ['text' => $request->ticket_id]
            ],
            'request' => $request
        ];

        return view('admin.file-manager.request-files', $viewParams);
    }
}
