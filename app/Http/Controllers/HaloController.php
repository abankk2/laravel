<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloController extends Controller
{
    function index()
    {
        $nama = "Abank";
        return view('home.index', compact('nama'));
    }
}
