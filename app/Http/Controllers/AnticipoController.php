<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnticipoController extends Controller
{
    public function index(){
        return view('anticipos.index');

    }

    public function create(){
        return view('anticipos.create');

    }

    public function show($advance){
        return view('anticipos.show',['supplier' => $advance]);

    }
}
