@extends('layouts.admin')
@section('content')
<div class="row bread_part">
    <div class="col-sm-12 bread_col">
        <h4 class="pull-left page-title bread_title">Product</h4>
        <ol class="breadcrumb pull-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Product</a></li>
            <li class="active">
                Edit
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="{{url('dashboard/product/update')}}" enctype="multipart/form-data">
          @csrf
          <div class="card">
              <div class="card-header">
                  <div class="row">
                      <div class="col-md-8">
                          <h3 class="card-title card_top_title"><i class="fa fa-gg-circle"></i>
                            Edit Product Information
                          </h3>
                      </div>
                      <div class="col-md-4 text-right">
                          <a href="{{url('dashboard/product')}}" class="btn btn-md btn-primary waves-effect card_top_button"><i class="fa fa-th"></i> All Product</a>
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
                             <strong>Successfully!</strong>
                          </div>
                        @endif
                        @if(Session::has('error'))
                          <div class="alert alert-warning alerterror" role="alert">
                             <strong>Opps!</strong>
                          </div>
                        @endif
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="form-group row custom_form_group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Name:<span class="req_star">*</span></label>
                    <div class="col-sm-7">
                      <input type="hidden" name="id" value="{{($data->product_id)}}">
                      <input type="hidden" name="slug" value="{{($data->product_slug)}}">
                      <input type="text" class="form-control" name="name" value="{{$data->product_name}}">
                      @if ($errors->has('name'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row custom_form_group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Title:<span class="req_star">*</span></label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="title" value="{{$data->product_title}}">
                      @if ($errors->has('title'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('title') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row custom_form_group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label class="col-sm-3 control-label">Description:<span class="req_star">*</span></label>
                    <div class="col-sm-7">
                      <textarea class="form-control" name="description" rows="4" cols="80">{{$data->product_description}}</textarea>
                      @if ($errors->has('description'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('description') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
               <div class="form-group row custom_form_group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                   <label class="col-sm-3 control-label">Description:<span class="req_star">*</span></label>
                   <div class="col-sm-4">
                     <select class="form-control" name="category_id">
                       <option value="">Select Category</option>
                       <option value="1"{{($data->category_id==1)?'selected':''}}>Baby</option>
                       <option value="2" {{($data->category_id==2)?'selected':''}}>Female</option>
                     </select>
                     @if ($errors->has('category_id'))
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $errors->first('category_id') }}</strong>
                         </span>
                     @endif
                   </div>
               </div>

                 <div class="form-group row custom_form_group{{ $errors->has('pic') ? ' has-error' : '' }}">
                     <label class="col-sm-3 control-label">Product Image:<span class="req_star">*</span></label>
                     <div class="col-sm-4">
                       <div class="input-group">
                           <span class="input-group-btn">
                               <span class="btn btn-default btn-file btnu_browse">
                                   Browse… <input type="file" name="pic" id="imgInp">
                               </span>
                           </span>
                           <input type="text" class="form-control" readonly>
                       </div>
                       @if ($errors->has('pic'))
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $errors->first('pic') }}</strong>
                           </span>
                       @endif
                       <img id='img-upload'/>
                     </div>
                     <div>
                       <img height="104" src="{{asset('uploads/product/'.$data->product_image)}}" alt="">
                     </div>
                 </div>
              </div>

              <div class="card-body">
                  @if ($errors->any())
                   <div class="alert alert-danger">
                       <ul>
                           @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                           @endforeach
                       </ul>
                   </div>
                   @endif
                 @if (Session::has('success'))
                     <div class="alert alert-success text-center">
                         <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                         <p>{{ Session::get('success') }}</p>
                     </div>
                 @endif
                 <div class="form-group row">
                   <div class="col-md-2">

                   </div>
                   <div class="col-md-8">
                     <table class="table table-bordered" id="dynamicTable">
                       @php
                       $fdata=$data->product_feature;
                       $features=explode(',', $fdata);
                       @endphp

                       @foreach($features as $key=>$ftr)
                         <tr>
                             <th>Feature {{$key+1}} :</th>
                             <td><input type="text" name="addcell[0][feature]" value="{{$ftr}}" placeholder="Enter feature" class="form-control" /></td>
                             <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                             <td><button type="button" class="btn btn-danger remove-tr">Remove</button></td>
                         </tr>
                        @endforeach
                     </table>
                   </div>
                 </div>
             </div>
             <div class="card-footer card_footer_button text-center">
                 <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
             </div>
          </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    var i = 0;
    $("#add").click(function(){
        ++i;
        $("#dynamicTable").append('<tr><td></td><td><input type="text" name="addcell['+i+'][feature]" placeholder="Enter feature" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });

    $(document).on('click', '.remove-tr', function(){
         $(this).parents('tr').remove();
    });
</script>

@endsection
