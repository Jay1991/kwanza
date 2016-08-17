@extends('layouts.app')

@section('content')
<div class="container-fixed">
  <div class="row">
    <!-- main content -->
    <div class="card-page-content col-xs-10 col-xs-offset-1 col-md-6" style="height:">
      <div class="class="card-title-page"">
        <h4 class="card-heading">Interesting Facts You Probably Din't Know About Eminem</h4>
        <a href="{{ url('/view_end') }}" type="button" class="btn btn-success pull-right">Next</a>
      </div>
      <br>
      <hr class="line">
      <div class="card-content">
          <div class="">
              #1 Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
          </div>
      </div>
      <br>
      <div class="img-card-view text-center" href="{{ url('/view') }}">
          <img class="img-thumbnail" src="img/gif.600x" style="height: auto;" />
      </div>
      <br>
      <div class="card-read-more">
        <p>Eminem continues to make records every day. He is the only white person ever to
           be put on the front cover of the "Source" and "XXL" magazines</p>
      </div>
      <br>
      <hr class="line">
      <div class="text-center" style="margin-bottom: 10px;">
        <a href="{{ url('/view_end') }}" type="button" class="btn btn-success">Next</a>
      </div>
    </div>
    <!-- main content ends -->


    <!-- suggestions contents -->

    <div class="card hidden-xs hidden-sm col-md-3 col-md-offset-1" style="">
      <div class="card-content row">
      <div class="img-card-small-view col-xs-6 col-md-6 col-sm-6" href="">
          <img class="img-thumbnail" src="img/gif.600x" style="height:auto;" />
        </div>
        <h4 class="card-title col-xs-6 col-md-6 col-sm-6">
            <a href="">
                Interesting Facts You Probably Din't Know About Eminem
            </a>
        </h4>
      </div>
      <div class="">
          Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
      </div>
    </div>

    <div class="card hidden-xs hidden-sm col-md-3 col-md-offset-1" style="">
      <div class="card-content row">
      <div class="img-card-small-view col-xs-6 col-md-6 col-sm-6" href="">
          <img class="img-thumbnail" src="img/f.jpg" style="height:auto;" />
        </div>
        <h4 class="card-title col-xs-6 col-md-6 col-sm-6">
            <a href="">
                Interesting Facts You Probably Din't Know About Eminem
            </a>
        </h4>
      </div>
      <div class="">
          Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
      </div>
    </div>

  </div>

  <div class="container-fixed">
    <div class="row">
      <!-- popular -->
      <br>
      <h4 class="card-title text-center">Popular</h4>
      <div class="card col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-1">
        <a class="img-card" href="{{ url('/view') }}">
            <img class="img-thumbnail" src="img/eminem.jpg" />
        </a>
        <div class="card-content">
            <h4 class="card-title">
                <a href="{{ url('/view') }}">
                    Interesting Facts You Probably Din't Know About Eminem
                </a>
            </h4>
            <div class="">
                Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
            </div>
        </div>
    </div>

    <div class="card col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-1">
      <a class="img-card" href="{{ url('/view') }}">
          <img class="img-thumbnail" src="img/eminem.jpg" />
      </a>
      <div class="card-content">
          <h4 class="card-title">
              <a href="{{ url('/view') }}">
                  Interesting Facts You Probably Din't Know About Eminem
              </a>
          </h4>
          <div class="">
              Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
          </div>
      </div>
    </div>

    <div class="card col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-1">
      <a class="img-card" href="{{ url('/view') }}">
          <img class="img-thumbnail" src="img/eminem.jpg" />
      </a>
      <div class="card-content">
          <h4 class="card-title">
              <a href="{{ url('/view') }}">
                  Interesting Facts You Probably Din't Know About Eminem
              </a>
          </h4>
          <div class="">
              Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
          </div>
      </div>
    </div>

    <div class="card col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-1">
      <a class="img-card" href="{{ url('/view') }}">
          <img class="img-thumbnail" src="img/eminem.jpg" />
      </a>
      <div class="card-content">
          <h4 class="card-title">
              <a href="{{ url('/view') }}">
                  Interesting Facts You Probably Din't Know About Eminem
              </a>
          </h4>
          <div class="">
              Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
          </div>
      </div>
    </div>

    <div class="card col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-1">
      <a class="img-card" href="{{ url('/view') }}">
          <img class="img-thumbnail" src="img/eminem.jpg" />
      </a>
      <div class="card-content">
          <h4 class="card-title">
              <a href="{{ url('/view') }}">
                  Interesting Facts You Probably Din't Know About Eminem
              </a>
          </h4>
          <div class="">
              Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
          </div>
      </div>
    </div>

    </div>

  </div>



</div>
@endsection
