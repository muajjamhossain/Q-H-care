<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Content;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Session;
use Image;

class ContentController extends Controller{
    public function __contruct()  {
      $this->middleware('auth');
    }

    public function index(){
      $all= Content::all();
      return view('admin.content.all', compact('all'));
    }

    public function edit($id){
      $data= Content::where('status',1)->where('con_id',$id)->firstOrFail();
      return view('admin.content.edit', compact('data'));
    }

    public function update(Request $request){
      $id= $request->id;
      $this->validate($request,[
        'title'=>'required',
        'subtitle'=>'required'
      ],[
        'title.required'=>'please insert title',
        'subtitle.required'=>'please insert subtitle',
      ]);
    $update=  Content::where('status',1)->where('con_id',$id)->update([
        'con_title'=>$request->title,
        'con_subtitle'=>$request->subtitle,
      ]);
      if($update){
          Session::flash('success','value');
          return redirect('dashboard/content');
      }else{
          Session::flash('error','value');
          return redirect()->back();
      }

    }

}
