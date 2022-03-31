@extends('layouts.admin')
@section('content')
<div class="row bread_part">
    <div class="col-sm-12 bread_col">
        <h4 class="pull-left page-title bread_title">About</h4>
        <ol class="breadcrumb pull-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">About</a></li>
            <li class="active">edit</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <form class="" action="{{url('dashboard/about/update')}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="card">
              <div class="card-header">
                  <div class="row">
                      <div class="col-md-8">
                          <h3 class="card-title card_top_title"><i class="fa fa-gg-circle"></i> edit About Information</h3>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body card_form">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-7">
                      @if(Session::has('success'))
                        <div class="alert alert-success alertsuccess" role="alert">
                           <strong>Successfully!</strong> updfate about information.
                        </div>
                      @endif
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="form-group row custom_form_group{{ $errors->has('details') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">About Short Content:</label>
                    <div class="col-sm-7">
                      <textarea class="form-control" name="details" rows="10" cols="80">{{$data->about_details}}</textarea>
                      @if ($errors->has('details'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('details') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row custom_form_group{{ $errors->has('l_details') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">About Long Content:</label>
                    <div class="col-sm-7">
                      <textarea class="form-control" name="l_details" rows="10" cols="80">{{$data->about_ldetails}}</textarea>
                      @if ($errors->has('l_details'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('l_details') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row custom_form_group{{ $errors->has('s_details') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">About Short Content:</label>
                    <div class="col-sm-7">
                      <textarea class="form-control" name="s_details" rows="6" cols="80">{{$data->about_sdetails}}</textarea>
                      @if ($errors->has('s_details'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('s_details') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
              </div>
              <div class="form-group row custom_form_group">
                  <label class="col-sm-3 control-label">About Image:<span class="req_star">*</span></label>
                  <div class="col-sm-4">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-default btn-file btnu_browse">
                                Browse… <input type="file" name="pic" id="imgInp">
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <img id='img-upload'/>
                  </div>
                  <div>
                    <img height="150" src="{{asset('uploads/about/'.@$data->about_image)}}" alt="">
                  </div>
              </div>
              <div class="card-footer card_footer_button text-center">
                  <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
              </div>
          </div>
        </form>
    </div>
</div>
@endsection
