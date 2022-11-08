<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dosen extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $sambut = 'Selamat Datang Di Halaman Dosen :p';
        //return view('dosen.index', compact('sambut'));
        return view('dosen.index')->with('sambut',$sambut);
    }

    public function matakuliah()
    {
        return view('dosen.matakuliah');
    }

    public function karya()
    {
        return view('dosen.karya');
    }

    
}
