@extends('layouts.app')

@section('content')
<div class="container">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#new"  role="tab" data-toggle="tab">new</a></li>
    <li><a href="#popular" role="tab" data-toggle="tab">popular</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active" id="new">
      <div class="row">
              <div class="card col-xs-9 col-xs-offset-1 col-md-5 col-md-offset-1">
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
                <br>
                <hr class="line">
                <div class="card-read-more">
                  By <span class="glyphicon glyphicon-user">Author Name </span>
                  <span class="glyphicon glyphicon-time">two days ago</span>
                   #123views
                </div>
            </div>
            <div class="card col-xs-9 col-xs-offset-1 col-md-5 col-md-offset-1">
              <a class="img-card" href="">
                  <img class="img-thumbnail" src="img/geto.jpg" />
              </a>
              <div class="card-content">
                  <h4 class="card-title">
                      <a href="">
                          Interesting Facts You Probably Din't Know About Eminem
                      </a>
                  </h4>
                  <div class="">
                      Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
                  </div>
              </div>
              <br>
              <hr class="line">
              <div class="card-read-more">
                By <span class="glyphicon glyphicon-user">Author Name </span>
                <span class="glyphicon glyphicon-time">two days ago</span>
              </div>
          </div>
          <div class="card col-xs-9 col-xs-offset-1 col-md-5 col-md-offset-1">
            <a class="img-card" href="">
                <img class="img-thumbnail" src="img/desk.jpg" />
            </a>
            <div class="card-content">
                <h4 class="card-title">
                    <a href="">
                        Interesting Facts You Probably Din't Know About Eminem
                    </a>
                </h4>
                <div class="">
                    Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
                </div>
            </div>
            <br>
            <hr class="line">
            <div class="card-read-more">
              By <span class="glyphicon glyphicon-user">Author Name </span>
              <span class="glyphicon glyphicon-time">two days ago</span>
            </div>
          </div>

            <div class="card col-xs-9 col-xs-offset-1 col-md-5 col-md-offset-1">
            <a class="img-card" href="">
                <img class="img-thumbnail" src="img/f.jpg" />
            </a>
            <div class="card-content">
                <h4 class="card-title">
                    <a href="">
                        Interesting Facts You Probably Din't Know About Eminem
                    </a>
                </h4>
                <div class="">
                    Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
                </div>
            </div>
            <br>
            <hr class="line">
            <div class="card-read-more">
              By <span class="glyphicon glyphicon-user">Author Name </span>
              <span class="glyphicon glyphicon-time">two days ago</span>
            </div>
          </div>

            <div class="card col-xs-9 col-xs-offset-1 col-md-5 col-md-offset-1">
            <a class="img-card" href="">
                <img class="img-thumbnail" src="img/pichai.jpg" />
            </a>
            <div class="card-content">
                <h4 class="card-title">
                    <a href="">
                        Interesting Facts You Probably Din't Know About Eminem
                    </a>
                </h4>
                <div class="">
                    Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
                </div>
            </div>
            <br>
            <hr class="line">
            <div class="card-read-more">
              By <span class="glyphicon glyphicon-user">Author Name </span>
              <span class="glyphicon glyphicon-time">two days ago</span>
            </div>
        </div>
        <div class="card col-xs-9 col-xs-offset-1 col-md-5 col-md-offset-1">
            <a class="img-card" href="">
                <img class="img-thumbnail" src="img/sample.jpg" />
            </a>
            <div class="card-content">
                <h4 class="card-title">
                    <a href="">
                        Interesting Facts You Probably Din't Know About Eminem
                    </a>
                </h4>
                <div class="">
                    Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
                </div>
            </div>
            <br>
            <hr class="line">
            <div class="card-read-more">
              By <span class="glyphicon glyphicon-user">Author Name </span>
              <span class="glyphicon glyphicon-calendar-time">two days ago</span>
            </div>
        </div>
          </div>
      </div>


    <div class="tab-pane" id="popular">
      <div class="row">
        <div class="card col-xs-9 col-xs-offset-1 col-md-5 col-md-offset-1">
          <a class="img-card" href="">
              <img class="img-thumbnail" src="img/pichai.jpg" />
          </a>
          <div class="card-content">
              <h4 class="card-title">
                  <a href="">
                      Interesting Facts You Probably Din't Know About Eminem
                  </a>
              </h4>
              <div class="">
                  Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
              </div>
          </div>
          <br>
          <hr class="line">
          <div class="card-read-more">
            By <span class="glyphicon glyphicon-user">Author Name </span>
            <span class="glyphicon glyphicon-time">two days ago</span>
             #123views
          </div>
      </div>
      <div class="card col-xs-9 col-xs-offset-1 col-md-5 col-md-offset-1">
        <a class="img-card" href="">
            <img class="img-thumbnail" src="img/wall.jpg" />
        </a>
        <div class="card-content">
            <h4 class="card-title">
                <a href="">
                    Interesting Facts You Probably Din't Know About Eminem
                </a>
            </h4>
            <div class="">
                Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
            </div>
        </div>
        <br>
        <hr class="line">
        <div class="card-read-more">
          By <span class="glyphicon glyphicon-user">Author Name </span>
          <span class="glyphicon glyphicon-time">two days ago</span>
           #123views
        </div>
    </div>
    <div class="card col-xs-9 col-xs-offset-1 col-md-5 col-md-offset-1">
      <a class="img-card" href="">
          <img class="img-thumbnail" src="img/eminem.jpg" />
      </a>
      <div class="card-content">
          <h4 class="card-title">
              <a href="">
                  Interesting Facts You Probably Din't Know About Eminem
              </a>
          </h4>
          <div class="">
              Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
          </div>
      </div>
      <br>
      <hr class="line">
      <div class="card-read-more">
        By <span class="glyphicon glyphicon-user">Author Name </span>
        <span class="glyphicon glyphicon-time">two days ago</span>
         #123views
      </div>
  </div>
  <div class="card col-xs-9 col-xs-offset-1 col-md-5 col-md-offset-1">
    <a class="img-card" href="">
        <img class="img-thumbnail" src="img/geto.jpg" />
    </a>
    <div class="card-content">
        <h4 class="card-title">
            <a href="">
                Interesting Facts You Probably Din't Know About Eminem
            </a>
        </h4>
        <div class="">
            Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
        </div>
    </div>
    <br>
    <hr class="line">
    <div class="card-read-more">
      By <span class="glyphicon glyphicon-user">Author Name </span>
      <span class="glyphicon glyphicon-time">two days ago</span>
       #123views
    </div>
</div>
<div class="card col-xs-9 col-xs-offset-1 col-md-5 col-md-offset-1">
  <a class="img-card" href="">
      <img class="img-thumbnail" src="img/f.jpg" />
  </a>
  <div class="card-content">
      <h4 class="card-title">
          <a href="">
              Interesting Facts You Probably Din't Know About Eminem
          </a>
      </h4>
      <div class="">
          Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
      </div>
  </div>
  <br>
  <hr class="line">
  <div class="card-read-more">
    By <span class="glyphicon glyphicon-user">Author Name </span>
    <span class="glyphicon glyphicon-time">two days ago</span>
     #123views
  </div>
</div>
<div class="card col-xs-9 col-xs-offset-1 col-md-5 col-md-offset-1">
  <a class="img-card" href="">
      <img class="img-thumbnail" src="img/simu.jpg" />
  </a>
  <div class="card-content">
      <h4 class="card-title">
          <a href="">
              Interesting Facts You Probably Din't Know About Eminem
          </a>
      </h4>
      <div class="">
          Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
      </div>
  </div>
  <br>
  <hr class="line">
  <div class="card-read-more">
    By <span class="glyphicon glyphicon-user">Author Name </span>
    <span class="glyphicon glyphicon-time">two days ago</span>
     #123views
  </div>
</div>
<div class="card col-xs-9 col-xs-offset-1 col-md-5 col-md-offset-1">
  <a class="img-card" href="">
      <img class="img-thumbnail" src="img/sample.jpg" />
  </a>
  <div class="card-content">
      <h4 class="card-title">
          <a href="">
              Interesting Facts You Probably Din't Know About Eminem
          </a>
      </h4>
      <div class="">
          Eminem ni msanii mwenye pande mbili tofauti serious side, na nyingine ni...
      </div>
  </div>
  <br>
  <hr class="line">
  <div class="card-read-more">
    By <span class="glyphicon glyphicon-user">Author Name </span>
    <span class="glyphicon glyphicon-time">two days ago</span>
     #123views
  </div>
</div>



    </div>
    </div>
  </div>

</div>
@endsection
