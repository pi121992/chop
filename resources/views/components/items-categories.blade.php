<img class="rounded-circle" src="{{ $imgsrc }}" width="140" height="140">
<h2 class="m3">{{ $title ?? 'titles' }}</h2>
<p>{{ $slot }}</p>
{{ $price }}
<p><a class="btn btn-secondary" href="/location/{{ $location }}/{{ $link }}" role="button">View details &raquo;</a></p>
   