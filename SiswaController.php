<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\siswaamodel;
use App\Models\sswa;
use App\Models\sswam;

class SiswaController extends Controller
{
    public function data1(){

        $siswa = siswaamodel::all();   
        return view('siswa.data1',compact(['siswa']));
    }
    public function data2(Request $request){

        $search= $request->search;
        $siswa = siswaamodel::where('Nama','LIKE','%' .$search.'%')
                            ->orWhere('Kelas',$search)
                            ->orWhere('Jurusan',$search)
                            ->paginate();
        return view('siswa.data1',compact(['siswa']));
    }
    public function create()
    {
        return view('siswa.create');
    }
    public function store(Request $request)
    {
        sswa::create($request->except(['_token','submit']));
        return redirect('/siswa');
    }
    
    public function create2()
    {
        return view('siswa.data1');
    }
    public function store2(Request $request)
    {
        sswam::create($request->except(['_token','submit']));
        return redirect('/siswa');
    }
    public function edit( $id)
    {
        $siswa = siswa::find($id);
        return view('siswa.data1',compact(['siswa']));
    }
    public function update($id, Request $request)
    {
        $siswa = siswa::find($id);
        $siswa->update($request->except(['_token','submit']));
        return redirect('/siswa');
    }
    public function destroy($id)
    {
        $siswa = siswa::find($id);
        $siswa->delete();
        return redirect('/siswa');
    }
    public function __construct()
    {
        $this->middleware('auth');
   }
}
