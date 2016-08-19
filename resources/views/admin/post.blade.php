@extends('admin.admin_template')

@section('content')

<div class="row">
  <div class="col-lg-4 col-md-2">
      <div class="panel panel-green">
          <div class="panel-heading">
              <div class="row">
                  <div class="col-xs-3 col-md-4">
                      <span class="fa fa-pencil-square-o fa-lg"></span>
                  </div>
                  <div class="col-xs-9 col-md-8 text-right">
                  <div>Add New Post</div>
                  </div>
              </div>
          </div>
          <a href="">
          <div class="panel-footer">
              <span class="pull-right fa fa-arrow-circle-right"></span>
              <div></div>
              <div class="clearfix"></div>
          </div>
          </a>
      </div>
  </div>
  <div class="col-lg-4 col-md-2">
      <div class="panel panel-green">
          <div class="panel-heading">
              <div class="row">
                  <div class="col-xs-3 col-md-4">
                      <span class="fa fa-upload fa-lg"></span>
                  </div>
                  <div class="col-xs-9 col-md-8 text-right">
                  <div>Ready To Publish</div>
                  </div>
              </div>
          </div>
          <a href="">
          <div class="panel-footer">
              <span class="pull-right fa fa-arrow-circle-right"></span>
              <div>Total</div>
              <div class="clearfix"></div>
          </div>
          </a>
      </div>
  </div>
  <div class="col-lg-4 col-md-2">
      <div class="panel panel-green">
          <div class="panel-heading">
              <div class="row">
                  <div class="col-xs-3 col-md-4">
                      <span class="fa fa-check fa-lg"></span>
                  </div>
                  <div class="col-xs-9 col-md-8 text-right">
                  <div>Published</div>
                  </div>
              </div>
          </div>
          <a href="">
          <div class="panel-footer">
              <span class="pull-right fa fa-arrow-circle-right"></span>
              <div>Total</div>
              <div class="clearfix"></div>
          </div>
          </a>
      </div>
  </div>
  <div class="col-lg-4 col-md-2">
      <div class="panel panel-green">
          <div class="panel-heading">
              <div class="row">
                  <div class="col-xs-3 col-md-4">
                      <span class="fa fa-calculator fa-lg"></span>
                  </div>
                  <div class="col-xs-9 col-md-8 text-right">
                  <div>All Posts</div>
                  </div>
              </div>
          </div>
          <a href="">
          <div class="panel-footer">
              <span class="pull-right fa fa-arrow-circle-right"></span>
              <div>Total</div>
              <div class="clearfix"></div>
          </div>
          </a>
      </div>
  </div>
</div>
@endsection
