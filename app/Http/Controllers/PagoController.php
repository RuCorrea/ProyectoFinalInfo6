<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index(){
        return view('pagos.index');

    }

    public function create(){
        return view('pagos.create');

    }

    public function show($payment){
        return view('pagos.show',['payments' => $payment]);

    }
}
