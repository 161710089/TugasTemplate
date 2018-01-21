<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_tabel;
class gg extends Controller
{
    public function tabel()
    {
    	$awe =data_tabel::all();
    	return view('tabel',compact('awe'));
    }
    public function store(Request $request)
    {

    	$file   	=$request->file('gambar');
    	$filename   =$file->getClientOriginalName();
    	$request->file ('gambar')->move("image/", $filename);

    	$tambah->gambar =$filename;
    	$tambah->save();

    	return redirect()->to('/');
    }
}
