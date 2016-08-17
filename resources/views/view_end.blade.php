@extends('layouts.app')

@section('content')
<div class="container-fixed">
  <div class="row">
    <!-- main content -->
    <div class="card col-xs-10 col-xs-offset-1 col-md-10" style="height:160px; ">
      <div class="img-card-view text-center" href="{{ url('/view') }}" style="width:210px; float: none; margin: 0 auto;">
          <img class="img-responsive" src="img/chinese_symbols_for_end.png" style="" />
          <h4 class="card-heading">THE END</h4>
      </div>
    </div>
  </div>

    <br>

      <div class="row">
        <div class="card col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1" style="">
          <div class="card-content row" style="height:150;">
          <div class="img-card-small-view col-xs-5 col-md-3 col-sm-4" href="">
              <img class="img-thumbnail" src="img/gif.600x" style="height:auto;" />
          </div>
          <div  class="col-xs-7 col-md-9 col-sm-8">
            <h4 class="card-title text-center">Interesting Facts You Probably Din't Know About Eminem</h4>
          </div>
          </div>

          <div class="row" style="height:100px;">
            <h3>Share Na Marafiki Wa </h3>
            <div class="btn-group btn-group-justified">
              <a href="" class="btn btn-social-icon btn-facebook">
                <span class="fa fa-facebook fa-2x"></span>
              </a>
              <a  href="" class="btn btn-social-icon btn-whatsapp">
                <span class="fa fa-whatsapp fa-2x"></span>
              </a>
              <a  href="" class="btn btn-social-icon btn-instagram">
                <span class="fa fa-instagram fa-2x"></span>
              </a>
              <a  href="" class="btn btn-social-icon btn-twitter">
                <span class="fa fa-twitter fa-2x"></span>
              </a>
            </div>
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

</div>




</div>
@endsection
