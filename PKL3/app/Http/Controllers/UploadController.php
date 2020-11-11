<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function upload(Request $req)
    {
        $file = $req->file('file');
        $file -> move('data_file', $file -> getClientOriginalName());
    	return redirect('data_file/'.$file -> getClientOriginalName());
    }
}
