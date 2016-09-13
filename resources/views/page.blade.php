@extends('layouts.app')
@section('meta')
@foreach($pages as $page)
<meta property="og:url"           content="{{ url('post/'.$page -> post_id.'/nextPage/'.$page->number) }}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{ $page->title }}" />
<meta property="og:description"   content="{{ $page->summary }}" />
<meta property="og:image"         content="{{ $page->media }}" />
@endforeach
@endsection

@section('content')
<div class="container top-container">
  <div class="row">
    <!-- main content -->
    @foreach($pages as $page)
        <div class="card-page-content col-xs-10 col-xs-offset-1 col-md-6" style=" font-family: 'Open Sans', sans-serif;">
          <div class="card-title-page">
            <h4 class="card-heading">{{ $page -> title }}</h4>
          </div>
<!-- for blapy testing -->
          <div id="mainContainer" data-blapy-container="true" data-blapy-container-name="mainContainer" data-blapy-container-content="page">
            <a href="{{ url('post/'.$page -> post_id.'/nextPage/'.($page->number + 1)) }}" type="button" data-blapy-link="true"  class="btn btn-success pull-right">Next</a>
            <br>
            <hr class="line">
            <p class="text-justify">#{{ $page -> number }} {{ $page -> page_title }}</p>
            <br>
            <div class="img-card-view text-center">
              <a href="{{ url('post/'.$page -> post_id.'/nextPage/'.($page->number + 1)) }}">
                <img class="img-responsive center-block" src="../../../media/{{ $page -> media}}"/>
              </a>
              <small class="source">via <a>{{ $page -> media_source }}</a></small>
            </div>
            <br>
            <div class="card-read-more">
              <p class="text-justify">{{ $page -> contents }}</p>
              <small class="source">Source: <a href="{{ $page -> source }}" style="width:150px; margin:0 auto; position:relative;
                overflow:hidden;">{{ $page -> source }}</a></small>
            </div>
            <br>
            <hr class="line">
            <div class="myNext text-center">
              <a href="{{ url('post/'.$page -> post_id.'/nextPage/'.($page->number + 1)) }}" type="button" class="btn btn-success">Next</a>
            </div>
        </div>
      </div>
  @endforeach
  <div class="col-md-3 col-md-offset-1 hidden-sm hidden-xs text-center">
    <nav data-spy="affix" data-offset-top="0" data-offset-bottom="100" style="background-color:#42A4DB; position:fixed;">
      <script data-cfasync='false' type='text/javascript' src='//clksite.com/adServe/banners?tid=163359_288755_5'></script>
    </nav>
  </div>

</div>
</div>
@endsection

@section('pagescript')
<!-- load of the external libraries needed by Blapy (provided in the package) -->
<script type="text/javascript" src="js/extlib/jquery-2.1.4.min.js"             ></script>
<script type="text/javascript" src="js/extlib/sammy/lib/sammy.js"              ></script>
<script type="text/javascript" src="js/extlib/iFSM/extlib/jquery.dotimeout.js" ></script>
<script type="text/javascript" src="js/extlib/iFSM/extlib/jquery.attrchange.js"></script>
<script type="text/javascript" src="js/extlib/iFSM/iFSM.js"                    ></script>
<!-- load of the Blapy script -->
<script type="text/javascript" src="js/Blapy.js"></script>
<!-- start Blapy -->
<script>
    $(document).ready(function() {
        $('#myBlapy').Blapy();
    });
</script>

@stop
