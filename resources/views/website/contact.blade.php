@extends('layouts.website')
@section('content')
    <section class="others_banner_page_part" id="others_banner_page_sec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-xl-4">
                    <div class="banner_other_content">
                        <h3>Contact Us</h3>
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
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_page_part py_90" id="contact_page_sec">
        <div class="container">
          <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-7">
                  @if(Session::has('success'))
                    <div class="alert alert-success alertsuccess" role="alert">
                       <strong>Successfully!</strong> Send Your message information.
                    </div>
                  @endif
                  @if(Session::has('error'))
                    <div class="alert alert-warning alerterror" role="alert">
                       <strong>Opps!</strong> please try again.
                    </div>
                  @endif
              </div>
              <div class="col-md-2"></div>
          </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-xl-8 order-md-2">
                    <div class="contact_form">
                       <h4>{{$content4->con_title}}</h4>
                       <p class="col-md-8">{{$content4->con_subtitle}}.</p>
                        <form class="row g-3" action="{{url('/contact/send')}}" method="post">
                          @csrf
                            <div class="col-md-6">
                                <input type="text" class="form-control" required id="inputEmail4" name="name" placeholder="Name">
                            </div>
                            <div class="col-md-6">

                                <input type="text" class="form-control" required id="inputPassword4" name="phone" placeholder="Phone">
                            </div>
                            <div class="col-6">

                                <input type="email" class="form-control" required id="inputAddress" name="email" placeholder="Email Address">
                            </div>
                            <div class="col-6">

                                <input type="text" class="form-control" required id="inputAddress" name="subject" placeholder="Subject">
                            </div>
                            <div class="col-12">
                                <textarea  class="form-control" id="inputAddress2" required name="message" placeholder="Message Here"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn_com float-end">SEND MASSAGE</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-xl-4 ">
                    <div class="contact_img">
                        <img src="{{asset('uploads/basic/'.$conImage->basic_contactpik)}}" alt="" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
