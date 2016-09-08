@extends('admin.admin_template')

@section('content')

<div class="row">
  @foreach($pages as $page)
  <div class="card-page-content col-xs-10 col-xs-offset-1 col-md-6">
    <div class="card-title-page">
      <h4 class="card-heading">{{ $page -> title }} </h4>
      <a href="{{ url('/view_end') }}" type="button" class="btn btn-success pull-right">Next</a>
    </div>
    <br>
    <hr class="line">
    <div class="card-content">
        <p class="text-justify">#{{ $page -> number }} {{ $page -> page_title }}</p>
    </div>
    <div class="img-card-view text-center">
        <img class="img-thumbnail" src="../../media/{{ $page -> media}}" />
        <small>{{ $page -> media_source }}</small>
    </div>
    <br>
    <div class="card-read-more">
      <p>{{ $page -> contents }}</p>
    </div>
    <br>
    <hr class="line">
    <div class="text-center" style="margin-bottom: 10px;">
      <a href="{{ url('/view_end') }}" type="button" class="btn btn-success">Next</a>
    </div>
    <div>
      <div class="pull-right" style="margin-bottom: 10px;">
      <a href="{{ url('admin/addPage/'.$page -> id) }}" class="text-center" style="margin-bottom: 15px;">
        <button class="btn btn-success">Add Page</button>
      </a>
    </div>
      <div class="text-center" style="margin-bottom: 10px;">
      <a href="{{ url('admin/deletePage/'.$page -> id) }}" class="text-center" style="margin-bottom: 15px;">
        <button class="btn btn-success">Delete This Page</button>
      </a>
    </div>
      <div class="pull-left" style="margin-bottom: 10px;">
      <a href="{{ url('admin/editPost/'.$page -> id) }}" class="text-center" style="margin-bottom: 15px;">
        <button class="btn btn-success">Edit This Page</button>
      </a>
    </div>
    </div>
  </div>
  @endforeach
</div>

@endsection
