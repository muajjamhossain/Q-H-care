@extends('layouts.admin')
@section('content')
<div class="row bread_part">
    <div class="col-sm-12 bread_col">
        <h4 class="pull-left page-title bread_title">Content</h4>
        <ol class="breadcrumb pull-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Content</a></li>
            <li class="active">edit</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <form class="" action="{{url('dashboard/content/update/')}}" method="post">
            @csrf
          <div class="card">
              <div class="card-header">
                <input type="hidden" name="id" value="{{$data->con_id}}">
                  <div class="row">
                      <div class="col-md-8">
                          <h3 class="card-title card_top_title"><i class="fa fa-gg-circle"></i> edit Content Information</h3>
                      </div>
                      <div class="col-md-4 text-right">
                          <a href="{{url('dashboard/content')}}" class="btn btn-md btn-primary waves-effect card_top_button"><i class="fa fa-th"></i> All Content</a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body card_form">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-7">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="form-group row custom_form_group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Title:<span class="req_star">*</span></label>
                    <div class="col-sm-7">
                      <input type="hidden"name="id" value="{{$data->con_id}}">
                      <input type="text" class="form-control" name="title" value="{{$data->con_title}}">
                      @if ($errors->has('title'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('title') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row custom_form_group{{ $errors->has('subtitle') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Details:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="subtitle" value="{{$data->con_subtitle}}">
                      @if ($errors->has('subtitle'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('subtitle') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
              </div>
              <div class="card-footer card_footer_button text-center">
                  <button type="submit" class="btn btn-primary waves-effect">{{(@$data)?'UPDATE':'UPLOAD'}}</button>
              </div>
          </div>
        </form>
    </div>
</div>
@endsection
