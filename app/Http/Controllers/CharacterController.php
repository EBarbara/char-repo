<?php

namespace App\Http\Controllers;

use App\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CharacterController extends Controller{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $characters = Character::all();
        return view('character.index', ['characters' => $characters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $character = new Character;
        return view('character.create', ['character' => $character]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        var_dump($request);
        die();

        $character = new Character();
        $character->name = $request->name;
        $character->race = $request->race;
        $character->class = $request->class;
        $character->level = 1;
        $character->save();
        return view('character.show', ['character' => $character]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id){
        $character = Character::findOrFail($id);
        return view('character.show', ['character' => $character]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Character $character){
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id){
        $character = Character::findOrFail($id);
        $character->delete();

        Session::flash('message', 'Character deleted');
        return $this->index();
    }
}
