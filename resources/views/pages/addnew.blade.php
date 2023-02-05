<div class="col-12 ">
    <form action="{{route('player.store')}}" method="POST" class="d-flex flex-column">
        @csrf
        <input type="text" placeholder="nome" name="name">
        <input type="text" placeholder="cognome" name="surname">
        <input type="text" placeholder="imglink" name="img">
        <input type="date" placeholder="data di nascita" name="date_of_birth">
        <input type="number" placeholder="Valore di mercato" name="market_value">
        <label for="has_a_team">Ha già un team?</label>
        <input type="checkbox" name="has_a_team">
        <button class="submit" class="btn btn-success">Aggiungi</button>
    </form>
</div>
