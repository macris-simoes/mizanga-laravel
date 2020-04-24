<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConferenceConfig;


class HomeController extends Controller
{
    public function index(){

        $infosCongresso = ConferenceConfig::first();
        return view('home')->with('infosCongresso', $infosCongresso);
    }
}

