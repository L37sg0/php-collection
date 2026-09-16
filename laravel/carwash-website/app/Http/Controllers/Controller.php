<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController implements ContentInterface
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        $content = self::CONTENT;
        $images  = scandir(public_path('images/gallery'));
        unset($images[0]);
        unset($images[1]);
        return view('index', compact('content', 'images'));
    }
}
