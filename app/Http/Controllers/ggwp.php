<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ggwp extends Controller
{
   public function store(Request $request)
    {

    	$file   	=$request->file('gambar');
    	$filename   =$file->getClientOriginalName();
    	$request->file ('gamabar')->move("image/", $filename);

    	$tambah->gambar =$filename;
    	$tambah->save();

    	return redirect()->to('/');
    }
}


