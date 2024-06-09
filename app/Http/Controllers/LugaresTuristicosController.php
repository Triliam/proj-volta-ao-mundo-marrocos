<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LugaresTuristicosController extends Controller
{
    public function princ() {
        return view('site.lugares');
    }
}
