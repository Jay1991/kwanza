@extends('admin.admin_template')

@section('content')

<div class="row">

<!-- introduction -->
  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Introduction</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse1"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Summary</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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
          <h4 class="pull-left">Page 1</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse2"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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

  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 2</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse3"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse3" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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

  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 3</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse4"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse4" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 4</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse5"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse5" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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

  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 5</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse6"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse6" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 6</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse7"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse7" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 7</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse8"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse8" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 8</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse9"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse9" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 9</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse10"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse10" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 10</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse11"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse11" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 11</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse13"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse13" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 12</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse14"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse14" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 13</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse15"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse15" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 14</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse16"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse16" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 15</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse17"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse17" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 16</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse18"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse18" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 17</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse19"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse19" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 18</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse20"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse20" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 19</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse21"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse21" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 20</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse22"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse22" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 21</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse23"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse23" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 22</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse24"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse24" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 23</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse25"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse25" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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


  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 24</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse26"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse26" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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

  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="pull-left">Page 25</h4>
            <button class="btn btn-primary pull-right" data-toggle="collapse" data-target="#collapse26"><i class="fa fa-plus"></i></button>
            <div class="clearfix"></div>
        </div>
        <div id="collapse26" class="panel-collapse collapse">
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                  {{ csrf_field() }}

                  <div class="form-group col-md-12">
                      <label for="name">Page Title</label>
                          <input id="name" type="text" class="form-control" name="name" value="">
                  </div>

                    <div class="form-group col-md-12">
                        <label for="email">Page Contents(summary)</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="image">
                          <div class="row col-md-4">
                            <div class="form-group col-md-12 text-center" >
                                <label for="image_file" class="pull-left">Media</label>
                                <input type="file" class="form-control" id="" name="image_file"  value="{{ old('image_file')}}">
                                <button type="submit" class="btn btn-default">Upload</button>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Media source</label>
                                    <input id="name" type="text" class="form-control" name="name" value="">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="img-card-view text-center" href="{{ url('') }}">
                                <img class="img-thumbnail" src="../img/gif.600x" style="height: auto;" />
                            </div>
                          </div>
                        </form>
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
