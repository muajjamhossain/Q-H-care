<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\About;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Session;
use Image;

class AboutController extends Controller{
    public function __contruct()  {
      $this->middleware('auth');
    }

    public function edit(){
      $data= About::where('about_id',1)->firstOrFail();
      return view('admin.about.edit', compact('data'));
    }

    public function update(Request $request){
      $this->validate($request,[
        'details'=>'required',
        'l_details'=>'required',
        's_details'=>'required',
      ],[
        'pic.required'=>'please select image',
        'details.required'=>'please insert short content',
        's_details.required'=>'please insert short content',
      ]);
    $update=  About::where('about_id',1)->update([
        'about_details'=>$request->details,
        'about_ldetails'=>$request->l_details,
        'about_sdetails'=>$request->l_details,
      ]);

      if($request->hasFile('pic')){
        $image=$request->file('pic');
        $imageName='about_'.time().'.'.$image->getClientOriginalExtension();
        Image::make($image)->save(base_path('public/uploads/about/'.$imageName));

        About::where('about_id',1)->update([
            'about_image'=>$imageName
        ]);
      }

      if($update){
          Session::flash('success','value');
          return redirect('dashboard/about');
      }else{
          Session::flash('error','value');
          return redirect()->back();
      }

    }

}
