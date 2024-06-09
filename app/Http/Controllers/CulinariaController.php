<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CulinariaController extends Controller
{
    public function princ() {
        return view('site.culinaria');
    }
}
