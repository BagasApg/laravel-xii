<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        return view('siswa.siswa');
    }
    public function index_tambah(){
        return view('siswa.siswatambah');
    }
    public function index_edit(){
        return view('siswa.siswaedit');
    }
}
