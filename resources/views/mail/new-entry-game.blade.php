<h2>New Game: {{ $game->title }}</h2>

A new entry has been added to the media archive.

<p><a href="{{ url('/archive/games/' . $game->id) }}">View the new entry.</a></p>