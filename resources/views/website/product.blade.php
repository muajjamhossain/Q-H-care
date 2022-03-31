@extends('layouts.website')
@section('content')
    <section class="others_banner_page_part" id="others_banner_page_sec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-xl-4">
                    <div class="banner_other_content">
                        <h3>Our Products</h3>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_cont">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Products</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our_product_part our_product_page" id="our_product_sec">
        <div class="container">

            <div class="row">
              @foreach($all as $data)
                <div class="col-12 col-sm-6 col-md-6 col-xl-4">
                   <div class="our_product_item text-center">
                        <div class="our_product_item_img">
                            <img src="{{asset('uploads/product/'.$data->product_image)}}" alt="" class="img-fluid w-100">
                        </div>
                        <h4>{{$data->product_name}}</h4>
                        <p>{{$data->product_title}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="paginations_part text-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination d-flex justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
