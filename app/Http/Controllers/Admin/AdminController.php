<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function Dashboard()
    {
        return view('v1.index.admin.dashboard');
    }
}
