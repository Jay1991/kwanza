@extends('admin.admin_template')

@section('content')

<div class="row">

<!-- introduction -->
  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">

          <h4 class="pull-left">Edit Intro of {{ $posts -> title }}</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse1"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{ url('admin/storeEditedPage/'.$posts -> id) }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Title</label>
                          <input id="name" type="text" class="form-control" name="titlePost" value="{{ $posts -> title }}">
                  </div>

                  <div class="form-group col-md-12">
                      <label for="name">Tag</label>
                          <input id="name" type="text" class="form-control" name="tag" value="{{ $posts -> tag }}">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Summary</label>
                          <textarea class="form-control" rows="5" id="" name="summary"></textarea>
                    </div>

                    <div class="form-group col-md-12 text-center" >
                        <label for="image_file" class="pull-left">Media</label>
                            <input type="file" class="form-control" id="" name="mediaPost"  value="">
                    </div>

                      <div class="form-group col-md-12">
                            <label for="name">Media source</label>
                                <input id="name" type="text" class="form-control" name="media_sourcePost" value="{{ $posts -> media_source }}">
                      </div>
                    <div class="panel-footer text-center">
                      <button type="submit" class="btn btn-primary">
                          <i class="fa fa-btn fa-download"></i> Save
                      </button>
                    </div>
              </form>
          </div>

        </div>
      </div>
  </div>

  <!-- End of introduction -->

</div>
@endsection
