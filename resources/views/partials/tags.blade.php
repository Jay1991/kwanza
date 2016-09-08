<ul class="nav navbar-nav navbar-right">
  @foreach($tags as $tag)
  <li><a href="{{ url('/tag/'.$tag ->tag) }}" style="color:white;">#{{ $tag ->tag }}</a></li>
  @endforeach
</ul>
