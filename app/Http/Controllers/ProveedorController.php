<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index(){
        return "Esta es la pagina principal de proveedores";

    }

    public function create(){
        return "Esta es la pagina para crear un proveedores";

    }

    public function show($supplier){
        return "Esta es la pagina para mostrar el proveedor $supplier";

    }
}
