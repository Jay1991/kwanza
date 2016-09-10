@php
  $firstpage = 1;
@endphp
@extends('layouts.app')

@section('content')
<div class="container top-container" style="font-family: 'Open Sans', sans-serif;">
  <!-- Tab panes -->
      <div class="row">
        <div class="col-md-8 link">
        @foreach($posts as $post)
        <a href="{{ url('/post/'.$post -> id.'/nextPage/'.$firstpage) }}" style="text-decoration:none; color:inherit;">
          <div class="card">
            <div class="row">
              <div class="img-card col-md-4 col-sm-4 col-xs-10 col-xs-offset-1">
                  <img class="img-responsive center-block" src="../media/{{ $post->media }}"/>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-10 col-xs-offset-1">
                  <div class="card-content text-center">
                    <h5 class="card-title">{{ $post->title }}</h5>
                  </div>
                </div>
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 hidden-xs summary">
                  <hr class="line">
                  <p class="text-justify">{{ $post->summary }}</p>
                </div>
                </div>
              </div>
            </a>
        @endforeach
        </div>
        <div class="col-md-3 col-md-offset-1 hidden-sm hidden-xs text-center">
          <nav data-spy="affix" data-offset-top="0" data-offset-bottom="100" style="background-color:#42A4DB; height:480px; width:300px; position:fixed;">
            <h5>YOUR ADS HERE</h5>
          </nav>
        </div>
      </div>
      {{ $posts->links() }}

</div>
@endsection
