@extends('layouts.app')
@section('meta')
@php
  $firstpage = 1;
@endphp
<meta property="og:url"           content="{{ url('/post/'.$posts -> id.'/nextPage/'.$firstpage) }}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{ $posts->title }}" />
<meta property="og:description"   content="{{ $posts->summary }}" />
<meta property="og:image"         content="{{ $posts->media }}" />
@endsection

@section('content')
<div class="container top-container">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-md-6">
        <div class="row">
          <div class="card-end col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
            <div class="img-card-view text-center" href="{{ url('/view') }}" style="width:210px; float: none; margin: 0 auto;">
                <img class="img-responsive" src="../../../media/chinese_symbols_for_end.png" />
                <h4 class="card-heading">THE END</h4>
            </div>
          </div>

          <div style="clear:both;"></div>
          <div class="card-end col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
            <div>
              <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4 img-card-small-view">
                    <img class="img-thumbnail" src="../../../media/{{ $posts -> media}}" />
                </div>
                <div  class="col-md-7 col-sm-7 col-xs-7">
                  <h4 class="card-title text-center">{{ $posts -> title }}</h4>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <h3>Share Na Marafiki </h3>
                  </div>
                  <div class="fb-share-button col-md-4 col-sm-4 col-xs-4 pull-left" data-href="{{ Request::fullUrl() }}" data-layout="button_count" data-size="small"
                   data-mobile-iframe="true">
                   <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ Request::fullUrl() }}">Share</a>
                 </div>
              </div>
            </div>
          </div>
      </div>

    </div>
    <div class="col-md-3 col-md-offset-1 hidden-sm hidden-xs text-center">
      <nav data-spy="affix" data-offset-top="0" data-offset-bottom="100" style="background-color:#42A4DB; position:fixed;">
        <script data-cfasync='false' type='text/javascript' src='//clksite.com/adServe/banners?tid=163359_288755_5'></script>
      </nav>
    </div>
  </div>

<div class="clear:fix"></div>
  <!-- suggestions contents -->

  <div class="container">
    <div class="row">
      <h4 class="card-title">Tiririka na hizi pia</h4>
      @include('partials.suggestions')
    </div>
  </div>
</div>

@endsection
