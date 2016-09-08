@php
  $firstpage = 1;
@endphp

@foreach($suggestions as $suggestion)
<a href="{{ url('/post/'.$suggestion -> id.'/nextPage/'.$firstpage) }}" style="font-family: 'Open Sans', sans-serif; text-decoration:none; color:inherit;">
<div class="card col-xs-10 col-xs-offset-1 col-md-6 col-sm-10 col-sm-offset-1">
  <div class="row">
  <div class="img-card col-md-4 col-sm-4 col-xs-10 col-xs-offset-1">
      <img class="img-responsive center-block" src="../../../media/{{ $suggestion->media }}" />
  </div>
  <div class="col-md-6 col-sm-6 col-xs-10 col-xs-offset-1">
    <div class="card-content text-center">
        <h4 class="card-title">{{ $suggestion->title }}</h4>
    </div>
  </div>
  <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 hidden-xs summary">
    <hr class="line">
    <p class="text-justify">{{ $suggestion->summary }}</p>
  </div>
</div>
</div>
</a>
@endforeach
