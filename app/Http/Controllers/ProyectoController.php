<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index(){
        return view('proyectos.index');

    }

    public function create(){
        return view('proyectos.create');

    }

    public function show($proyect){
        return view('proyectos.show',['proyects' => $proyect]);

    }
}
