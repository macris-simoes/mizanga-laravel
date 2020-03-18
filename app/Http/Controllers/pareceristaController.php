<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pareceristaController extends Controller
{
    public function pareceristaIndex() {
        return view('parecerista-tabs');
    }
}
