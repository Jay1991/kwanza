@extends('admin.admin_template')

@section('content')

<div class="row">

<!-- introduction -->
  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">

          <h4 class="pull-left">Edit Page of {{ $pages -> page_title }}</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse1"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{ url('admin/storeEditedPost/'.$pages -> id) }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Number</label>
                          <input id="name" type="text" class="form-control" name="number" value="{{ $pages -> number }}">
                  </div>

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <textarea class="form-control" rows="2" name="page_title"></textarea>
                  </div>

                  <div class="form-group col-md-12">
                      <label for="email">Page Contents(summary)</label>
                        <textarea class="form-control" rows="5" id="" name="contents"></textarea>
                  </div>
                  <div class="form-group col-md-12">
                      <label for="name">Page Contents source</label>
                          <input id="name" type="text" class="form-control" name="source" value="">
                  </div>
                    <div class="form-group col-md-12 text-center" >
                        <label for="image_file" class="pull-left">Media</label>
                        <input type="file" class="form-control" id="" name="mediaPage"  value="">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="name">Media source</label>
                            <input id="name" type="text" class="form-control" name="media_sourcePage" value="">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-download"></i> Save
                    </button>
              </form>
          </div>

        </div>
      </div>
  </div>

  <!-- End of introduction -->

</div>
@endsection
