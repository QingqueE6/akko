<h2>New Movie/Series: {{ $movie->title }}</h2>

A new entry has been added to the media archive.

<p><a href="{{ url('/archive/movies/' . $movie->id) }}">View the new entry.</a></p>