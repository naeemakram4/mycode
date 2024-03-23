<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
            'dirs' => Storage::disk('uploads')->directories(),
            'dirCount' => count(Storage::disk('uploads')->directories())
        ];

        return view('admin.file-manager.index', $viewParams);
    }

    public function directoryFiles($dir)
    {
        $pageTitle = 'File Manager';
        $breadcrumbs = [['text' => $pageTitle, 'url' => '/admin/file-manager'], ['text' => ucfirst($dir)]];

        $files = Storage::disk('uploads')->files($dir);
        $dirName = $dir;
        $filesCount = count($files);

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'files' => $files,
            'dirName' => $dirName,
            'filesCount' => $filesCount
        ];

        return view('admin.file-manager.files', $viewParams);
    }
}
