<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;


class SiswaController extends Controller
{
    public function index(){
        $siswa = Siswa::all();
        return view('siswa.siswa', compact(['siswa']));
    }
    public function create(){
        return view('siswa.siswatambah');
    }
    public function store(Request $req){
        $req->validate([
            'nama' => 'required',
            'about' => 'required',
            'photo' => 'required'
        ]);
        $file = $req->file('photo');
        $filename = time() . '-' . $file->getClientOriginalName();
        $file->move('storage/', $filename);
        // dd($filename);
        // dd($filename);

        // dd($req);
        

        $siswa = new Siswa();
        $siswa->nama = $req->nama;
        $siswa->about = $req->about;
        $siswa->photo = time() . '-' . $file->getClientOriginalName();
        $siswa->save();
        return redirect()->route('siswa');
    }
    
    public function destroy($id){
        $siswa = Siswa::find($id);
        $filePath = 'storage/' . $siswa->photo;
        if(file_exists($filePath)){
            // dd("keapus!");
            unlink($filePath);
        }
        // dd("ndak keapus!");
        $siswa->delete();
        return redirect()->route('siswa');
    }
    public function show($id){
        $siswa = Siswa::find($id);
        return view('siswa.siswaedit', compact(['siswa']));
    }   
    public function update(Request $req, $id){
        $siswa = Siswa::find($id);
        
        $req->validate([
            'nama' => 'required',
            'about' => 'required',
            'photo' => 'mimes:png,jpg,jpeg,pdfs'
        ]);
        // dd("masuk");
        
        
        if ($req->hasFile('photo')) {
            if (isset($siswa->photo)) {
                $filePath =  'storage/' . $siswa->photo;
                // dd($filePath);
                unlink($filePath);
            }

            $file = $req->file('photo');
            $fileName = time() . '-' . $file->getClientOriginalName();

            $file->move('storage/', $fileName);

            $siswa->photo = $fileName;

            
        }
        $siswa->nama = $req->nama;
        $siswa->about = $req->about;
        $siswa->save();
        return redirect('/siswa/');
    }
}
