<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artikel;

class UploadController extends Controller
{
    //
    function upload(Request $req)
    {
        $file = $req->file('file');
        $file -> move('data_file', $file -> getClientOriginalName());
        $filename = $file -> getClientOriginalName();
        // $Artikel = new artikel;
    	// $Artikel ->Nama_Artikel=$req->nama;
    	// $Artikel ->Jenis =$req->JenisFile;
        // $Artikel ->tanggal_terbit =$req->tanggal;
        artikel::create([
            'Nama_Artikel' => $filename,
            'Jenis' => $req->JenisFile,
            'tanggal_terbit' => $req->tanggal
        ]);
    	return redirect('data_file/'.$file -> getClientOriginalName());
    }

    function tambah_data(Request $req)
    {
    	
    }
}