@extends('layouts.admin')
@section('content')
<div class="row bread_part">
    <div class="col-sm-12 bread_col">
        <h4 class="pull-left page-title bread_title">Product</h4>
        <ol class="breadcrumb pull-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Product</a></li>
            <li class="active">View</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card-title card_top_title"><i class="fa fa-gg-circle"></i> View Product Information</h3>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('dashboard/product')}}" class="btn btn-md btn-primary waves-effect card_top_button"><i class="fa fa-th"></i> All Product</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <table class="table table-bordered table-striped table-hover custom_view_table">
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td>{{$data->product_name}}</td>
                            </tr>
                            <tr>
                                <td>Title</td>
                                <td>:</td>
                                <td>{{$data->product_title}}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>:</td>
                                <td>{{$data->product_description}}</td>
                            </tr>
                            <!-- @php
                            $requirements=$data->details;
                            $demo= explode(',',$requirements);
                            @endphp -->
                            @php
                            $fdata=$data->product_feature;
                            $features=explode(',', $fdata);
                            @endphp
                            @foreach($features as $key=>$ftr)
                            <tr>
                                <td>Feature {{$key+1}}</td>
                                <td>:</td>
                                <td>{{$ftr}}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td>Photo</td>
                                <td>:</td>
                                <td>
                                    @if($data->product_image!='')
                                        <img class="table_image_product_big" src="{{asset('uploads/product/'.$data->product_image)}}" alt="product"/>
                                    @else
                                        <img class="table_image_product_big" src="{{asset('uploads')}}/no-image-big.jpg" alt="product"/>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="card-footer card_footer_expode">
                <a href="#" class="btn btn-secondary waves-effect">PRINT</a>
                <a href="#" class="btn btn-warning waves-effect">EXCEL</a>
                <a href="#" class="btn btn-success waves-effect">PDF</a>
            </div>
        </div>
    </div>
</div>
@endsection
