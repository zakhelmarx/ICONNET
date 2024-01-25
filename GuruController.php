<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guru;

class GuruController extends Controller
{
    public function data2(Request $request){
        $search= $request->search;
        $guru = guru::where('Nama','LIKE','%' .$search.'%')
                            ->paginate();
        return view('guru.data2',compact(['guru']));
    }
    public function createg()
    {
        return view('guru.createg');
    }
    public function storeg(Request $request)
    {
        guru::create($request->except(['_token','submit']));
        return redirect('/guru');
    }
    public function editg( $id)
    {
        $guru = guru::find($id);
        return view('guru.editg',compact(['guru']));
    }
    public function updateg($id, Request $request)
    {
        $guru = guru::find($id);
        $guru->update($request->except(['_token','submit']));
        return redirect('/guru');
    }
    public function destroy($id)
    {
        $guru = guru::find($id);
        $guru->delete();
        return redirect('/guru');
    }
    public function __construct()
    {
        $this->middleware('auth');
   }
}
