<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @php
        $basic=App\Models\Basic::where('basic_status',1)->where('basic_id',1)->firstOrFail();
        $social=App\Models\SocialMedia::where('sm_status',1)->where('sm_id',1)->firstOrFail();
        $conin=App\Models\ContactInformation::where('cont_status',1)->where('cont_id',1)->firstOrFail();
        $content5=App\Models\Content::where('status',1)->where('con_id',5)->firstOrFail();;
    @endphp

    <title>{{$basic->basic_title}}</title>
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/venobox.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/responisive.css">
    <script src="{{asset('contents/website')}}/js/jquery-2.1.3.min.js"></script>
    <script src="{{asset('contents/website')}}/js/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <header class="header_part" id="header_sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light menu_part">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="{{url('/')}}">
                                Hygiene Extra Care
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto menu">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/about')}}">About Us</a>
                                    </li>
                                    @php
                                    $allpro=App\Models\Product::where('product_status',1)->orderBy('product_id','DESC')->get();
                                    @endphp
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Our Products <i class="fas fa-angle-down"></i></a>
                                        <ul>
                                          @foreach($allpro as $proName)
                                            <li><a href="{{url('product/details/'.$proName->product_slug)}}">{{$proName->product_name}}</a></li>
                                          @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/contact')}}">Contact Us</a>
                                    </li>

                                </ul>
                                <form class="d-flex">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="main_footer_part pt_60" id="main_footer_sec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                    <div class="footer_item">
                        <a href="{{url('/')}}"><span>{{$content5->con_title}}</span></a>
                        <p>{{$content5->con_subtitle}}</p>
                        <ul>
                            <li><a href="{{$social->sm_facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{$social->sm_twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{$social->sm_linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{$social->sm_skype}}" target="_blank"><i class="fab fa-skype"></i></a></li>
                            <li><a href="{{$social->sm_youtube}}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                    <div class="footer_item_link">
                        <h4>Our Product</h4>
                        <ul>
                          @foreach($allpro as $proName)
                            <li><a href="{{url('product/details/'.$proName->product_slug)}}"><i class="fas fa-angle-right"></i>{{$proName->product_name}}</a></li>
                          @endforeach

                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                    <div class="footer_item_link">
                        <h4>Quick Link</h4>
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-right"></i>Company Profile</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i>Frequently Asked Questions (FAQ)</a></li>
                            <li><a href="{{url('privacy/policy')}}"><i class="fas fa-angle-right"></i>Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                    <div class="footer_item_link">
                        <h4>Contact Us</h4>
                        <div class="row mb-4">
                            <div class="col-2">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="col-10">
                                <p>{{$conin->cont_add1}}<br>
                                    {{$conin->cont_add2}}</p>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-2">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="col-10">
                                <a href="tel::{{$conin->cont_phone1}}"><p>{{$conin->cont_phone1}}</p></a>
                                <a href="tel::{{$conin->cont_phone2}}"><p>{{$conin->cont_phone2}}</p></a>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-2">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="col-10">
                                <a href="mailto::{{$conin->cont_email1}}"><p>{{$conin->cont_email1}}</p></a>
                                <a href="mailto::{{$conin->cont_email2}}"><p>{{$conin->cont_email2}}</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="bor_60_20"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="copy_right text-center">
                        <p>Copyright © 2021 | All rights reserved by Hyginene Extra care | Development By <a href="#"> Creative System Limited.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{asset('contents/website')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('contents/website')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('contents/website')}}/js/waypoints.min.js"></script>
    <script src="{{asset('contents/website')}}/js/jquery.counterup.min.js"></script>
    <script src="{{asset('contents/website')}}/js/venobox.min.js"></script>
    <script src="{{asset('contents/website')}}/js/isotope.pkgd.js"></script>
    <script src="{{asset('contents/website')}}/js/menu.js"></script>
    <script src="{{asset('contents/website')}}/js/custom.js"></script>
</body>
</html>
