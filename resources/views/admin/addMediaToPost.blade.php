@extends('admin.admin_template')

@section('content')

<div class="row">

<!-- introduction -->
  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">

          <h4 class="pull-left">Add Media</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse1"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
          <div class="panel-body">

                    <div class="form-group col-md-12">
                      <p> {{ $posts['title'] }}   {{ $posts['tag'] }}  {{ $posts['summary'] }}   </p>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="" method="post" action="{{ url('admin/AddMediaToPost/{id}') }}" enctype="multipart/form-data">
                          {{ csrf_field() }}

                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="media"  value="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="media_source" value="">
                                    <button type="submit" class="btn btn-default">Upload</button>

                            </div>
                            </div>
                            <div class="col-md-8">
                              <div class="img-card-view text-center" href="{{ url('') }}">
                                  <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                              </div>
                            </div>
                            <!-- <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="media_source" value="">
                            </div> -->
                      </form>
                      </div>
                    </div>
          </div>
        </div>
      </div>
  </div>

  <!-- End of introduction -->
<a class="col-md-10 col-md-offset-1" href="{{ url('admin/showPost{id}') }}">
  <button class="btn btn-primary">view post</button>
</a>

</div>



@endsection
