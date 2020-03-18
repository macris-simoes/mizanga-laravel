<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inscritoController extends Controller
{
    public function inscritoIndex() {
        return view('inscrito-tabs');
    }
}
