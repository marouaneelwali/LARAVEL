<html>
<body>
    <h1>Game</h1>
    @if(isset($result))
        <p>{{ $result }}</p>
    @endif
    <p>Remaining Chances: {{ $chances }}</p>
    <form action="{{ route('play.game') }}" method="POST">
    @csrf
    <input type="hidden" name="player_name" value="{{ $playerName }}">
    <input type="hidden" name="chances" value="{{ $chances }}">
    <input type="number" name="guessed_number" placeholder="Enter your guess" required>
    <input type="hidden" name="game_id" value="{{ $game->id }}"> 
    <button type="submit">Guess</button>
</form>

</body>
</html>
