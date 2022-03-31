<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Models\Banner;
use App\Models\About;
use App\Models\Product;
use App\Models\Content;
use App\Models\PrivacyPolicy;
use App\Models\Basic;
use App\Models\News;
use Illuminate\Support\Str;
use Session;
use Carbon\Carbon;
use Image;
use Auth;

class WebsiteController extends Controller{


  public function index(){
    $data['ban']= Banner::where('ban_status',1)->orderBy('ban_id','DESC')->limit(1)->get();
    $data['about']= About::where('about_id',1)->firstOrFail();
    $data['product']=Product::where('product_status',1)->orderBy('product_id','DESC')->limit(6)->get();
    $data['news']=News::where('news_status',1)->orderBy('news_id','DESC')->get();
    $data['content1']= Content::where('status',1)->where('con_id',1)->firstOrFail();
    $data['content2']= Content::where('status',1)->where('con_id',2)->firstOrFail();
    $data['content3']= Content::where('status',1)->where('con_id',3)->firstOrFail();
    $data['content5']= Content::where('status',1)->where('con_id',5)->firstOrFail();
      return view('website.index',$data);
  }

  public function contact(){
    $data['content4']= Content::where('status',1)->where('con_id',4)->firstOrFail();
    $data['conImage']= Basic::where('basic_status',1)->where('basic_id',1)->firstOrFail();
      return view('website.contact',$data);
  }

  public function about(){
    $data['content1']= Content::where('status',1)->where('con_id',1)->firstOrFail();
    $data['about']= About::where('about_id',1)->firstOrFail();
      return view('website.about',$data);
  }

  public function product(){
    $all=Product::where('product_status',1)->orderBy('product_id','DESC')->get();
      return view('website.product', compact('all'));
  }

  public function product_details($slug){
    $all=Product::where('product_status',1)->orderBy('product_id','DESC')->get();
    $data= Product::where('product_status',1)->where('product_slug',$slug)->firstOrFail();
      return view('website.product_dtls', compact('data', 'all'));
  }

  public function privacy(){
    $all=PrivacyPolicy::where('privacy_status',1)->orderBy('privacy_id','DESC')->get();
      return view('website.privet_policy', compact('all'));
  }


  public function contact_insert(Request $request){

    $insert= ContactUs::insertGetId([
      'con_name'=>$request['name'],
      'con_phone'=>$request['phone'],
      'con_email'=>$request['email'],
      'con_subject'=>$request['subject'],
      'con_message'=>$request['message'],
    ]);
    if ($insert) {
      Session::flash('success');
      return redirect('/contact');
    }else{
      Session::flash('error');
      return redirect('/contact');
    }
  }

}
