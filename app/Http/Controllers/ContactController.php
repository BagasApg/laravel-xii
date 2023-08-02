<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact.contact');
    }

    public function index_tambah(){
        return view('contact.contacttambah');
    }

    public function index_edit(){
        return view('contact.contactedit');
    }
}
