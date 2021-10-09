<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        return view('admin.slide.index');
    }
    public function create()
    {
        return view('admin.slide.create');
    }
    public function edit()
    {
        return view('admin.slide.edit');
    }
}
