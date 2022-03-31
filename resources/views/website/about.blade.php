@extends('layouts.website')
@section('content')
    <section class="others_banner_page_part" id="others_banner_page_sec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-xl-4">
                    <div class="banner_other_content">
                        <h3>About Us</h3>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- others_banner_page end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_cont">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
   <!-- about_part start -->
    <section class="about_part py_90" id="about_sec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-xl-6">
                    <div class="about_content_img">
                        <img src="{{asset('uploads/about/'.$about->about_image)}}" alt="" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-xl-6">
                    <div class="about_content">
                      <h6>{{$content1->con_title}}</h6>
                      <h3>{{$content1->con_subtitle}}</h3>
                        <p>{{$about->about_details}}</p>
                        </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-xl-12">
                    <div class="about_content">
                        <p>{{$about->about_ldetails}}</p>
                          <p class="p_extra">{{$about->about_details}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
