<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    public function index()
    {
        return view('admin.recruitment.index');
    }
    public function view()
    {
        return view('admin.recruitment.view');
    }
    public function edit()
    {
        return view('admin.recruitment.edit');
    }
}
