@extends('layouts.website')
@section('content')
    <section class="others_banner_page_part" id="others_banner_page_sec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-xl-4">
                    <div class="banner_other_content">
                        <h3>New Libresse
                            Ultra Thin</h3>
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
                                <li class="breadcrumb-item"><a href="#">Our Products</a></li>
                                <li class="breadcrumb-item active" aria-current="page">New Libresse
                                    Ultra Thin</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


   <!-- our_product_dtls start -->
   <section class="our_product_dtls_part py_90" id="our_product_dtls_sec">
       <div class="container">
           <div class="row">
               <div class="col-12 col-sm-12 col-md-6 col-xl-6">
                   <div class="our_product_dtls_img">
                       <img src="{{asset('uploads/product/'.$data->product_image)}}" alt="" class="img-fluid w-100">
                   </div>
               </div>
               <div class="col-12 col-sm-12 col-md-6 col-xl-6">
                   <div class="our_product_dtls_content">
                      <h4>{{$data->product_name}}</h4>
                      <ul>
                        @php
                        $fdata=$data->product_feature;
                        $features=explode(',', $fdata);
                        @endphp

                        @foreach($features as $feature)
                            <li><i class="fas fa-circle"></i>{{$feature}}</li>
                        @endforeach
                      </ul>
                      <p>{{$data->product_description}}</p>
                   </div>
               </div>
           </div>

           <div class="row">
               <div class="col-12">
                   <div class="bor-der_p60"></div>
               </div>
           </div>
           <!-- common_heading start -->
            <div class="row">
                <div class="col-12">
                    <div class="common_heading text-center">
                        <h6>OUR PRODUCTS</h6>
                        <h3>See Our Related Products</h3>
                    </div>
                </div>
            </div>
            <!-- common_heading start -->

           <div class="row">
               <div class="col-12  blog_set_po">
                   <div class="our_product_top owl-carousel">
                     @foreach($all as $prod)
                         <div class="our_product_top_item text-center">
                             <div class="our_product_top_item_img">
                                 <img src="{{asset('uploads/product/'.$prod->product_image)}}" alt="" class="img-fluid w-100">
                                 <div class="overlay_our_product_top_item_img">
                                     <a href="#"><i class="fas fa-link"></i></a>
                                 </div>
                             </div>
                             <h4>{{$prod->product_name}}</h4>
                             <p>{{$prod->product_title}}</p>
                         </div>
                      @endforeach
                   </div>
               </div>
           </div>
       </div>
   </section>
@endsection
