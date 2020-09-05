<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        //User home. If the user is logged in, it will be redirected to here
        return view('admin/home');
    }

    public function user()
    {
        return view('admin/user');
    }

    public function timeline()
    {
        return view('admin/timeline');
    }
}
