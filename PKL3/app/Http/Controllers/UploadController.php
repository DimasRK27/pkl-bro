<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class UploadController extends Controller
{
    //
    function upload(Request $req)
    {
        $file = $req->file('file');
        $file -> move('data_file', $file -> getClientOriginalName());
    	return redirect('data_file/'.$file -> getClientOriginalName());
    }

    function tambah_data(Request $req)
    {
    	$Artikel = new Artikel
    	$Artikel ->nama=$req->Nama_Artikel
    	$Artikel ->JenisFile=$req->Jenis
    	$Artikel ->tanggal=$req->tanggal_terbit
    }
}