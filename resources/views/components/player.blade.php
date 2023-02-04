<a href="{{route('player.single', ['id' => $player -> id])}}">
    <article class="myCard d-flex flex-column" >
        <div class="text-center head-card">
            <img src="{{$player["img"]}}" alt="">
            <h5 class="fw-bold">{{$player['name']}}</h5>
            <h5 class="fw-bold">{{$player["surname"]}}</h5>
        </div>
        <div class="d-flex flex-column">
            <span class="fw-bold">Data di Nascita:</span>
            <span>{{ $player['date_of_birth'] }}</span>
            <span class="fw-bold">Valore di Mercato:</span>
            <span class="text-success fw-bold">{{number_format($player['market_value'],0,'.','.') }} &euro;</span>
            <span class="fw-bold">E' in una squadra?</span>
            {{-- operatore ternaio poichè returnava 1 o 0 per vero e falso --}}
            <span>{{ $player['has_a_team'] ? "Si" : "No" }}</span>
        </div>
    </article>
</a>

