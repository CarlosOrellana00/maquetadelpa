<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function homeindex(){
      return view('home.index');
    }

    public function clientesindex(){
      return view('clientes.index');
    }

    public function proveedores(){

    }

    public function reportes(){
      return view('reportes.index');
    }

    public function parametroindex(){

    }
}

