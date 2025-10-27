<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LastYear extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $directory = public_path('images/last_year');
        $files = File::files($directory);
        $fileCount = count($files);


        return inertia('LastYear', [
            'fileCount' => $fileCount,
        ]);

    }
}
