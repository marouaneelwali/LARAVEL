<form action="{{ route('start.game') }}" method="POST">
    @csrf
    <input type="text" name="player_name" placeholder="Enter your name" required>
    <button type="submit">Start Game</button>
</form>
