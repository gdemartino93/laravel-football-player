<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class MainController extends Controller
{
    public function home(){
        
       $players = Player::all();

        $data = [ "players" => $players];

        return view('pages.home' , $data);
    }
    public function player($id){

        $player = Player::Find($id);
        
        $data = ["player" => $player];


        return view('pages.player', $data);
    }
    public function deletePlayer($id){
        $player = Player::Find($id);
        $player -> delete();

        return redirect() -> route('player.home');
        
    }
    public function addPlayer(){
        return view('pages.addnew');
    }
    public function storePlayer(Request $request){
        
        $data = $request -> all();

        $newPlayer = new Player();
        $newPlayer -> name = $data['name'];
        $newPlayer -> surname = $data['surname'];
        $newPlayer -> img = $data['img'];
        $newPlayer -> date_of_birth = $data['name'];
        $newPlayer -> market_value = $data['market_value'];
        $newPlayer -> has_a_team = $data['has_a_team'] ? 1 : 0;

        $newPlayer -> save();

        return redirect() -> route('player.home');

    }
}
