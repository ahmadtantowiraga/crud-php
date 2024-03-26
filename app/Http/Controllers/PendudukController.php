<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;

class PendudukController extends Controller
{
    public function index(){
        $data=Penduduk::all();
        return view('datapenduduk',compact('data'));
    }
    public function tambahpenduduk(){
        return view('tambahdata');
    }
    public function insertpenduduk(Request $request){
        Penduduk::create($request->all());
        return redirect()->route('penduduk')->with('success','Data berhasil ditambahkan');
    }
    public function tampilkandata($id){
       $data = Penduduk::find($id);
       return view('tampilkandata', compact('data'));
    }
    public function updatedata(Request $request, $id){
        $data = Penduduk::find($id);
        $data->update($request->all());
        return redirect()->route('penduduk')->with('success','Data berhasil diupdate');
     }
     public function delete($id){
        $data = Penduduk::find($id);
        $data->delete();
        return redirect()->route('penduduk')->with('success','Data berhasil di hapus');
     }
}
