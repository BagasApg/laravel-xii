<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        return view('projects.projects');
    }

    public function index_tambah(){
        return view('projects.projectstambah');
    }

    public function index_edit(){
        return view('projects.projectsedit');
    }
}
