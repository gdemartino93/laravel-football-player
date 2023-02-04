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
}
