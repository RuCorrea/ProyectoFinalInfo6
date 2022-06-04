<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        return "Esta es la pagina principal de clientes";

    }

    public function create(){
        return "Esta es la pagina para crear un cliente";

    }

    public function show($client){
        return "Esta es la pagina para mostrar al cliente $client";

    }
}
