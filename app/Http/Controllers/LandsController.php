<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandsController extends Controller
{
    public function index()
    {
        $lands = Lands::latest()->get();
        return view('lands.index', ['lands' => $lands]);
    }

    
    public function show($id)
    {
        $land = Land::find($id);
        
        return view('lands.show', ['land' => $land]);
    }

    public function create()
    {
        return view(verifyland.create);
    }

    public function store()
        {
            die('hello');
        }


}


 