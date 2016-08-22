@extends('admin.admin_template')

@section('content')

<div class="row">

<!-- introduction -->
  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">

          <h4 class="pull-left">New Post</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse1"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Title</label>
                          <input id="name" type="text" class="form-control" name="title" value="">
                  </div>

                  <div class="form-group col-md-12">
                      <label for="name">Tag</label>
                          <input id="name" type="text" class="form-control" name="tag" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Summary</label>
                          <textarea class="form-control" rows="5" id="" name="summary"></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">

                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="media"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>

                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>

                        <div class="form-group col-md-12">
                            <label for="name">Media source</label>
                                <input id="name" type="text" class="form-control" name="media_source" value="">
                        </div>
                      </div>
                    </div>
              </form>
          </div>
          <div class="panel-footer text-center">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-download"></i> Save
            </button>
          </div>
        </div>
      </div>
  </div>

  <!-- End of introduction -->

  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse2"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Number</label>
                          <input id="name" type="text" class="form-control" name="page_number" value="">
                  </div>

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="page_title" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id="" name="contents"></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="media"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="form-group col-md-12">
                          <label for="name">Media source</label>
                              <input id="name" type="text" class="form-control" name="media_source" value="">
                      </div>
                    </div>
              </form>
          </div>
          <div class="panel-footer text-center">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-download"></i> Save
            </button>
          </div>
        </div>
      </div>
  </div>

</div>



@endsection
