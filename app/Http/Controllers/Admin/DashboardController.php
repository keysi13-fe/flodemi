<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;

class DashboardController extends Controller
{

    public function index()
    {
        return view('admin.dashboard', [
            'totalUser' => User::count(),
            'totalCourse' => Course::count(),
        ]);
    }

}
