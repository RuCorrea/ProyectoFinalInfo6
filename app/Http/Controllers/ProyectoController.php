<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index(){
        return "Esta es la pagina principal de proyectos";

    }

    public function create(){
        return "Esta es la pagina para crear un proyecto";

    }

    public function show($proyecto){
        return "Esta es la pagina para mostrar el proyecto $proyecto";

    }
}
