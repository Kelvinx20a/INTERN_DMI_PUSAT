<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function event()
    {
        return view('layouts/kegiatan/event');
    }
    public function kalender()
    {
        return view('layouts/kegiatan/kalender');
    }
    public function detail()
    {
        return view('layouts/kegiatan/detail');
    }
}
