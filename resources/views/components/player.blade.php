<article class="card d-flex flex-column" >
    <div>
        <img src="" alt="">
        <h5>{{$player['name']}}</h5>
        <h5>{{$player["surname"]}}</h5>
    </div>
    <div>
        <span>{{ $player['date_of_birth'] }}</span>
        <span>{{ $player['market_value'] }}</span>
        <span>{{ $player['has_a_team'] }}</span>
    </div>
</article>