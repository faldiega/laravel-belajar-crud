<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contact()
    {
    	return view('contact');
    }

    public function about()
    {
    	$nama = "Naufaldi";
    	return view('about', compact('nama'));
    }
}
