<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard.index');
    }
}
