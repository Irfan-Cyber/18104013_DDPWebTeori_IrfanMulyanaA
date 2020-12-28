<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    //index (menampilkan semua)
    public function index(){
        return Siswa::all();
    }
    
    //index (menyimpan data)
    public function create(request $request){
        $siswa = new Siswa;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return "Data berhasil masuk";
    }

    //index (update semua)
    public function update(request $request, $id){
        $nama = $request->nama;
        $alamat = $request->alamat;

        $siswa = Siswa::find($id);
        $siswa->nama = $nama;
        $siswa->alamat = $alamat;
        $siswa->save();

        return "Data berhasil di update";
    }

    //index (menghapus data)
    public function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();

        return "Data berhasil di hapus";
    }
}
