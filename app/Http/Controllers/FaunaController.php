<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaunaController extends Controller
{
    public function princ() {
        return view('site.fauna');
    }
}
