<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\PrivacyPolicy;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Session;
use Image;

class PrivacyPolicyController extends Controller{
  public function __contruct(){
    $this->middleware('auth');
  }

  public function index(){
        $all=PrivacyPolicy::where('privacy_status',1)->orderBy('privacy_id','DESC')->get();
        return view('admin.privacy-policy.all',compact('all'));
    }

    public function add(){
        return view('admin.privacy-policy.add');
    }

    public function edit($slug){
        $data=PrivacyPolicy::where('privacy_status',1)->where('privacy_slug',$slug)->firstOrFail();
        return view('admin.privacy-policy.edit',compact('data'));
    }

    public function view($slug){
        $data=PrivacyPolicy::where('privacy_status',1)->where('privacy_slug',$slug)->firstOrFail();
        return view('admin.privacy-policy.view',compact('data'));
    }

    public function insert(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'details'=>'required',
        ],[
            'title.required'=>'Please enter privacy policy title!',
            'details.required'=>'Please enter privacy policy details!',
        ]);
        $slug='Privacy'.uniqid(20);
        $insert=PrivacyPolicy::insertGetId([
            'privacy_title'=>$_POST['title'],
            'privacy_details'=>$_POST['details'],
            'privacy_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($insert){
            Session::flash('success','value');
            return redirect('/dashboard/privacy/policy');
        }else{
            Session::flash('error','value');
            return redirect('/dashboard/privacy/policy/add');
        }
    }

    public function update(Request $request){
        $this->validate($request,[
          'title'=>'required',
          'details'=>'required',
      ],[
          'title.required'=>'Please enter privacy policy title!',
          'details.required'=>'Please enter privacy policy details!',
      ]);
        $slug=$_POST['slug'];
        $id=$_POST['id'];
        $update=PrivacyPolicy::where('privacy_slug',$slug)->update([
            'privacy_title'=>$_POST['title'],
            'privacy_details'=>$_POST['details'],
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($update){
            Session::flash('success_update','value');
            return redirect('/dashboard/privacy/policy');
        }else{
            Session::flash('error','value');
            return redirect()->back();
        }
    }

    public function publish(){
        $id=$_POST['modal_id'];
        $soft=PrivacyPolicy::where('privacy_status',1)->where('privacy_id',$id)->update([
            'privacy_publish'=>1,
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($soft){
            Session::flash('success_publish','value');
            return redirect('/dashboard/privacy/policy');
        }else{
          Session::flash('error','value');
          return redirect('/dashboard/privacy/policy');
        }
    }

    public function unpublish(){
        $id=$_POST['modal_id'];
        $soft=PrivacyPolicy::where('privacy_status',1)->where('privacy_id',$id)->update([
            'privacy_publish'=>0,
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($soft){
            Session::flash('success_unpublish','value');
            return redirect('/dashboard/privacy/policy');
        }else{
          Session::flash('error','value');
          return redirect('/dashboard/privacy/policy');
        }
    }

    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=PrivacyPolicy::where('privacy_status',1)->where('privacy_id',$id)->update([
            'privacy_status'=>0,
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($soft){
            Session::flash('success_soft','value');
            return redirect('/dashboard/privacy/policy');
        }else{
          Session::flash('error','value');
          return redirect('/dashboard/privacy/policy');
        }
    }

    public function restore(){
        $id=$_POST['modal_id'];
        $restore=PrivacyPolicy::where('privacy_status',0)->where('privacy_id',$id)->update([
            'privacy_status'=>1,
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($restore){
            Session::flash('restore','value');
            return redirect('dashboard/recycle/banner');
        }else{
          Session::flash('error','value');
          return redirect('dashboard/recycle/banner');
        }
    }

    public function delete(){
        $id=$_POST['modal_id'];
        $del=PrivacyPolicy::where('privacy_status',0)->where('privacy_id',$id)->delete();
        if($del){
            Session::flash('delete','value');
            return redirect('dashboard/recycle/banner');
        }else{
          Session::flash('error','value');
          return redirect('dashboard/recycle/banner');
        }
    }

}
