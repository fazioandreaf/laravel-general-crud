<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;

class MainController extends Controller
{
    function home(){
        $matches=Match::all();
        // dd($matches);
        return view('pages.home',compact('matches'));
    }
    function description($id){
        $match=Match::findOrFail($id);
        // dd($match);
        return view('pages.description',compact('match'));
    }
    function add(){
        return view('pages.add');
    }
    function add_function(Request $request){
        // dd($request->all());
        $validate=$request -> validate([
            'team1' => 'nullable|max:50',
            'team2' => 'nullable|max:50',
            'point1' => 'nullable|integer',
            'point2' => 'nullable|integer',
            'result' => 'nullable|boolean',
        ]);
        $match=Match::create($validate);
        return redirect()->route('description',$match->id);

    }
    function edit($id){
        // dd($id);

        $match=Match::findOrFail($id);
        // dd($match);

        return view('pages.edit',compact('match'));

    }
    function edit_function(Request $request, $id){
        // dd($request->all());
        $match=Match::findOrFail($id);
        $validate=$request -> validate([
            'team1' => 'nullable|max:50',
            'team2' => 'nullable|max:50',
            'point1' => 'nullable|integer',
            'point2' => 'nullable|integer',
            'result' => 'nullable|boolean',
        ]);
        $match->update($validate);
        return redirect()->route('description',$match->id);

    }
}
