<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SOP extends Controller
{
     public function index(){
    	return view('artikel/sop');
    }
}