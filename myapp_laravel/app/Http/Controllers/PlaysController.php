<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Play;

class PlaysController extends Controller
{
    function index(){
        #$plays = Play::all();
        $plays = Play::latest()->get();
        dd($plays->toArray());
        return view ('plays.index');
    }
}
