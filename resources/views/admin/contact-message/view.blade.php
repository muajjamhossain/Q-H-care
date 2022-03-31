@extends('layouts.admin')
@section('content')
<div class="row bread_part">
    <div class="col-sm-12 bread_col">
        <h4 class="pull-left page-title bread_title">Message</h4>
        <ol class="breadcrumb pull-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Message</a></li>
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
                        <h3 class="card-title card_top_title"><i class="fa fa-gg-circle"></i> View Message Information</h3>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('/dashboard/contact/us')}}" class="btn btn-md btn-primary waves-effect card_top_button"><i class="fa fa-th"></i> All Message</a>
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
                                <td>{{$data->con_name}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{$data->con_email}}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>:</td>
                                <td>{{$data->con_phone}}</td>
                            </tr>
                            <tr>
                                <td>Subject</td>
                                <td>:</td>
                                <td>{{$data->con_subject}}</td>
                            </tr>
                            <tr>
                                <td>Message</td>
                                <td>:</td>
                                <td>{{$data->con_message}}</td>
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
