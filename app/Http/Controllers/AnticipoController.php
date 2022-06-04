<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnticipoController extends Controller
{
    public function index(){
        return "Esta es la pagina principal de anticipos";

    }

    public function create(){
        return "Esta es la pagina para registar un anticipo";

    }

    public function show($supplier){
        return "Esta es la pagina para mostrar los anticipos de $supplier";

    }
}
