<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    public function index()
    {
        return view('admin.recruitment.index');
    }
    public function create()
    {
        return view('admin.recruitment.create');
    }
    public function edit()
    {
        return view('admin.recruitment.edit');
    }
}
