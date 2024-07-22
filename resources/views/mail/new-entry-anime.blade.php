<h2>New Anime/Manga: {{ $anime->title }}</h2>

A new entry has been added to the media archive.

<p><a href="{{ url('/archive/anime/' . $anime->id) }}">View the new entry.</a></p>