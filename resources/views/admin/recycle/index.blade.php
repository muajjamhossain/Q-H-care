@extends('layouts.admin')
@section('content')
<div class="row bread_part">
    <div class="col-sm-12 bread_col">
        <h4 class="pull-left page-title bread_title">Recycle</h4>
        <ol class="breadcrumb pull-right">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Recycle</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/user')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-person"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                      $totalUser=App\Models\User::where('status',0)->count();
                  @endphp
                  <span class="counter text-dark">{{$totalUser}}</span>
                  Users
              </div>
          </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/banner')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-panorama"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                      $totalBan=App\Models\Banner::where('ban_status',0)->count();
                  @endphp
                  <span class="counter text-dark">{{$totalBan}}</span>
                  Banner
              </div>
          </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/contactus')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-contacts"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                      $totalConus=App\Models\Contactus::where('con_status',0)->count();
                  @endphp
                  <span class="counter text-dark">{{$totalConus}}</span>
                  Contact Message
              </div>
          </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/news')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-view-carousel"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                  $all=App\Models\News::where('news_status',0)->count();
                  @endphp
                  <span class="counter text-dark">{{$all}}</span>
                  News
              </div>
          </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/privacy/policy')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-stars"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                  $allprivacy=App\Models\PrivacyPolicy::where('privacy_status',0)->count();
                  @endphp
                  <span class="counter text-dark">{{$allprivacy}}</span>
                  Privacy Policy
              </div>
          </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="{{url('dashboard/recycle/product')}}">
          <div class="mini-stat clearfix bx-shadow bg-white">
              <span class="mini-stat-icon bg-primary"><i class="md md-photo-library"></i></span>
              <div class="mini-stat-info text-right text-dark mini_stat_info">
                  @php
                    $allproduct=App\Models\Product::where('product_status',0)->count();
                  @endphp
                  <span class="counter text-dark"></span>
                  Product
              </div>
          </div>
        </a>
    </div>
</div> <!-- End row-->
@endsection
