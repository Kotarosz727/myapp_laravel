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

    public function create(Request $request){
        $play = new Play();
        $play->title = $request->title;
        $play->arthist = $request->arthist;
        $play->body = $request->body;
        $play->save();
        return redirect('/');
    }

    public function edit (Request $request, $id){
        $play = Play::find($id);
        return view('plays.edit', ['play' => $play]);
    }

    public function update (Request $request) {
        $play = Play::find($request->id);
        $play->title = $request->title;
        $play->arthist = $request->arthist;
        $play->body = $request->body;
        $play->save();
        return redirect('/');    
    }
}
