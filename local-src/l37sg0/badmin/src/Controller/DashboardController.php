<?php

namespace L37sg0\Badmin\Controller;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin::admin.dashboard');
    }
}
