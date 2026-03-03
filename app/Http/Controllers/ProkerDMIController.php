<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProkerDMIController extends Controller
{
    public function index(){
        return view ('layouts/proker/prokerDMI');
    }
}
