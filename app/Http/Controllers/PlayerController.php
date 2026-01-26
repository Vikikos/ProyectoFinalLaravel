<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::where('visible',1)->get();
        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $player = new Player();

        $generateCode = $request->file('photo')->store('players','public');
        $player->name = $request->input('name');
        $player->twitter = $request->input('twitter');
        $player->instagram = $request->input('twitch');

        if($request->input('visible')){
            $player->visible = 1;
        }else{
            $player->visible = 0;
        }
        $player->photo = $generateCode;

        $player->save();

        return redirect()->route('players.show',$player);
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        return view('players.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {
        $generateCode = $request->file('photo')->store('players','public');
        $player->name = $request->input('name');
        $player->twitter = $request->input('twitter');
        $player->instagram = $request->input('twitch');

        if($request->input('visible')){
            $player->visible = 1;
        }else{
            $player->visible = 0;
        }
        $player->photo = $generateCode;

        $player->save();

        return redirect()->route('players.show',$player);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        //
    }
}
