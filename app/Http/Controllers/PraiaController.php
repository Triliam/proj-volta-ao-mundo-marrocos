<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PraiaController extends Controller
{
    public function princ() {
        return view('site.praias');
    }
}
