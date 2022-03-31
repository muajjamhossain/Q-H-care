@extends('layouts.website')
@section('content')
<section class="banner_part" id="banner_sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-7 col-xl-5">
                <div class="banner_content">
                    <h1>{{$ban[0]->ban_title}}</h1>
                    <p>{{$ban[0]->ban_details}}</p>
                    <a href="{{$ban[0]->ban_url}}" class="btn btn_com">{{$ban[0]->ban_button}}</a>
                </div>
            </div>
        </div>
    </div>
</section>
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
                    <a href="{{url('/about')}}" class="btn_com">VIEW MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our_product_part" id="our_product_sec">
    <div class="container">
        <!-- common_heading start -->
        <div class="row">
            <div class="col-12">
                <div class="common_heading text-center">
                  <h6>{{$content2->con_title}}</h6>
                  <h3>{{$content2->con_subtitle}}</h3>
                </div>
            </div>
        </div>


        <div class="row">
          @foreach($product as $pro)
            <div class="col-12 col-sm-6 col-md-6 col-xl-4">
                <div class="our_product_item text-center">
                    <div class="our_product_item_img">
                        <img src="{{asset('uploads/product/'.$pro->product_image)}}" alt="" class="img-fluid w-100">
                    </div>
                    <h4>{{$pro->product_name}}</h4>
                    <p>{{$pro->product_title}}.</p>
                </div>
            </div>
          @endforeach
        </div>
        <div class="row">
            <div class="col-12">
                <div class="load_meor text-center">
                    <a href="{{url('/product')}}" class="btn btn_com">VIEW MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our_news_part pt_90 pb_90" id="our_news_sec">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="common_heading text-center">
                  <h6>{{$content3->con_title}}</h6>
                  <h3>{{$content3->con_subtitle}}</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="our_news_slide owl-carousel">
                  @foreach($news as $nws)
                    <div class="our_news_slide_item">
                        <div class="our_news_slide_img">
                            <img src="{{asset('uploads/news/'.$nws->news_image)}}" alt="" class="img-fluid w-100">
                        </div>
                        <p>{{date('F', strtotime($nws->news_date))}}</p>
                        <h5>{{$nws->news_title}}</h5>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
