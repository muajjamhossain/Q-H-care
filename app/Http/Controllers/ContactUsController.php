<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ContactUs;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Session;
use Image;

class ContactUsController extends Controller{
  public function __contruct(){
    $this->middleware('auth');
  }

  public function index(){
        $all=ContactUs::where('con_status',1)->orderBy('con_id','DESC')->get();
        return view('admin.contact-message.all',compact('all'));
    }

    public function view($id){
        $data=ContactUs::where('con_status',1)->where('con_id',$id)->firstOrFail();
        return view('admin.contact-message.view',compact('data'));
    }

    public function insert(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ],[
            'name.required'=>'Please enter your name!',
            'phone.required'=>'Please enter your name!',
            'email.required'=>'Please enter email address!',
            'subject.required'=>'Please enter subject!',
            'message.required'=>'Please enter message!',
        ]);
        $insert=ContactUs::insertGetId([
            'con_name'=>$_POST['name'],
            'con_phone'=>$_POST['phone'],
            'con_email'=>$_POST['email'],
            'con_subject'=>$_POST['subject'],
            'con_message'=>$_POST['message'],
            'created_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($insert){
            Session::flash('success','value');
            return redirect('/dashboard/contact/us');
        }else{
            Session::flash('error','value');
            return redirect()->back();
        }
    }

    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=ContactUs::where('con_status',1)->where('con_id',$id)->update([
            'con_status'=>0,
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($soft){
            Session::flash('success_soft','value');
            return redirect('/dashboard/contact/us');
        }else{
          Session::flash('error','value');
          return redirect('/dashboard/contact/us');
        }
    }

    public function restore(){
        $id=$_POST['modal_id'];
        $restore=ContactUs::where('con_status',0)->where('con_id',$id)->update([
            'con_status'=>1,
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
        $del=ContactUs::where('con_status',0)->where('con_id',$id)->delete();
        if($del){
            Session::flash('delete','value');
            return redirect('dashboard/recycle/banner');
        }else{
          Session::flash('error','value');
          return redirect('dashboard/recycle/banner');
        }
    }

}
