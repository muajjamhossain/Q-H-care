@extends('layouts.website')
@section('content')
    <section class="others_banner_page_part" id="others_banner_page_sec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-xl-4">
                    <div class="banner_other_content">
                        <h3>Privacy Policy</h3>
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
                                <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="privacy_policy_part py_90" id="privacy_policy_sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="privacy_policy_contnet">
                      @foreach($all as $privacy)
                        <h4><i class="fas fa-circle"></i>{{$privacy->privacy_title}}</h4>
                         <p>{{$privacy->privacy_details}}</p>
                      @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
