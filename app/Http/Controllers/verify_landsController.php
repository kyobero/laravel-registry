<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class verify_landsController extends Controller
{
    public function index()
    {
        $verify_land = Lands::latest()->get();
        return view('lands.index', ['lands' => $verify_land]);
    }

    
    public function show($id)
    {
       $verify_land = verify_landsController::find($id);
        
        return view('lands.show', ['land' =>$verify_land]);
    }

    public function create()
    {
        return view(verifyland.create);
    }

    public function store()
        {
            //persist the new registration
           dump(request()->all);
        // die('hello');
        }
}
