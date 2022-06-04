<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index(){
        return "Esta es la pagina principal de pagos";

    }

    public function create(){
        return "Esta es la pagina para registrar un pago";

    }

    public function show($supplier){
        return "Esta es la pagina para mostrar los pagos de $supplier";

    }
}
