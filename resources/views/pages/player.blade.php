@extends('layouts.main-layout')

{{-- prende il nome e cognome del singolo giocatore e lo mostra nel titolo --}}
@section('title')
    <title>Giocatore: {{$player["name"]}} {{$player["surname"]}}</title>
@endsection

@section('contents')
    <div class="wrapper container">
        <div class="col-12 mycardSingle">
            @include('components.player')
        </div>
        <div>
            <a href="{{route("player.home")}}">
                <button class="btn btn-info">
                    <i class="fa-solid fa-house"></i>
                </button>
            </a>
         
            <a href="{{route("player.delete" , ['id' => $player -> id] )}}">
                <button class="btn btn-danger">
                    <i class="fa-solid fa-user-xmark"></i>
                </button>
            </a>

        </div>
    </div>
@endsection