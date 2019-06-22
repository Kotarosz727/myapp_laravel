<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Play;

class PlaysController extends Controller
{
    public function index(){
        #$plays = Play::all();
        $plays = Play::latest()->get();
        #dd($plays->toArray());
        return view ('plays.index', ['plays' => $plays]);
    }

    public function show($id){
        $play = Play::findOrFail($id);
        return view ('plays.show', ['play' => $play]);
    }

    public function new(){
        return view ('plays.new');
    }
}
