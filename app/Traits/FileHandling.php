<?php
declare(strict_types=1);

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait FileHandling
{
    function getObject($object): string
    {
        return Storage::disk('uploads')->url($object);
    }

    function uploadObject($path, $file)
    {
        return Storage::disk('uploads')->put($path, $file, 'public');
    }

    function deleteObject($path): void
    {
        Storage::disk('uploads')->delete($path);
    }
}
