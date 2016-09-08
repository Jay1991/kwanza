@extends('admin.admin_template')

@section('content')

<div class="row">

<!-- -->
@foreach($posts as $post)
<div class="card col-xs-9 col-xs-offset-1 col-md-5 col-md-offset-1">
  <a class="img-card">
      <img class="img-thumbnail" src="../media/{{ $post ->media }}" />
  </a>
  <div class="card-content">
      <h4 class="card-title">
          <a href="{{ url('') }}">
            {{ $post ->title }}
          </a>
      </h4>
      <div class="">
        {{ $post ->summary }}
      </div>
  </div>
  <br>
  <hr class="line">
  <div class="card-read-more">
    <h6>#{{ $post ->tag }}</h6>
    <a href="{{ url('admin/publish/'.$post -> id) }}" class="pull-right" style="margin-bottom: 15px;">
      <button class="btn btn-success">Publish</button>
    </a>
  </div>
</div>
@endforeach
</div>


@endsection
