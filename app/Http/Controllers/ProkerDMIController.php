<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProkerDMIController extends Controller
{
    public function index(){
        return view ('layouts/proker/prokerDMI');
    }
    public function index2(){
        return view ('layouts/proker/ekonomi');
    }
    public function index3(){
        return view ('layouts/proker/kemasjidan');
    }
}
