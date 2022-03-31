<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Session;
use Image;

class NewsController extends Controller{
  public function __contruct(){
    $this->middleware('auth');
  }

  public function index(){
        $all=News::where('news_status',1)->orderBy('news_id','DESC')->get();
        return view('admin.news.all',compact('all'));
    }

    public function add(){
        return view('admin.news.add');
    }

    public function edit($slug){
        $data=News::where('news_status',1)->where('news_slug',$slug)->firstOrFail();
        return view('admin.news.edit',compact('data'));
    }

    public function view($slug){
        $data=News::where('news_status',1)->where('news_slug',$slug)->firstOrFail();
        return view('admin.news.view',compact('data'));
    }

    public function insert(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'date'=>'required',
            'pic'=>'required',
        ],[
            'title.required'=>'Please enter news title!',
            'date.required'=>'Please enter news date!',
            'pic.required'=>'Please upload news image!',
        ]);
        $slug='N'.uniqid(20);
        $insert=News::insertGetId([
            'news_title'=>$_POST['title'],
            'news_date'=>$_POST['date'],
            'news_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName='news_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save(base_path('public/uploads/news/'.$imageName));

          News::where('news_id',$insert)->update([
              'news_image'=>$imageName
          ]);
        }

        if($insert){
            Session::flash('success','successfully insert news information.');
            return redirect('dashboard/news');
        }else{
            Session::flash('error','please try again.');
            return redirect('dashboard/news/add');
        }
    }

    public function update(Request $request){
        $this->validate($request,[
            'title'=>'required',
        ],[
            'title.required'=>'Please enter news title!',
        ]);
        $slug=$_POST['slug'];
        $id=$_POST['id'];
        $update=News::where('news_slug',$slug)->update([
            'news_title'=>$_POST['title'],
            'news_date'=>$_POST['date'],
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName='news_'.$id.'_'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save(base_path('public/uploads/news/'.$imageName));

          News::where('news_slug',$slug)->update([
              'news_image'=>$imageName
          ]);
        }

        if($update){
            Session::flash('up_success','successfully update news information.');
            return redirect('dashboard/news');
        }else{
            Session::flash('error','please try again');
            return redirect()->back();
        }
    }

    public function publish(){
        $id=$_POST['modal_id'];
        $publish=News::where('news_status',1)->where('news_id',$id)->update([
            'news_publish'=>1,
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($publish){
            Session::flash('success_publish','successfully publish news information.');
            return redirect('dashboard/news');
        }else{
          Session::flash('error','please try again');
          return redirect('dashboard/news');
        }
    }

    public function unpublish(){
        $id=$_POST['modal_id'];
        $unpublish=News::where('news_publish',1)->where('news_id',$id)->update([
            'news_publish'=>0,
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($unpublish){
            Session::flash('success_unpublish','successfully unpublish news information.');
            return redirect('dashboard/news');
        }else{
          Session::flash('error','please try again');
          return redirect('dashboard/news');
        }
    }

    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=News::where('news_status',1)->where('news_id',$id)->update([
            'news_status'=>0,
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($soft){
            Session::flash('soft_del','successfully delete news information.');
            return redirect('dashboard/news');
        }else{
          Session::flash('error','please try again');
          return redirect('dashboard/news');
        }
    }

    public function restore(){
        $id=$_POST['modal_id'];
        $restore=News::where('news_status',0)->where('news_id',$id)->update([
            'news_status'=>1,
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($restore){
            Session::flash('restore','successfully restore news information.');
            return redirect('dashboard/recycle/news');
        }else{
          Session::flash('error','please try again');
          return redirect('dashboard/recycle/news');
        }
    }

    public function delete(){
        $id=$_POST['modal_id'];
        $del=News::where('news_status',0)->where('news_id',$id)->delete();
        if($del){
            Session::flash('delete','value');
            return redirect('dashboard/recycle/news');
        }else{
          Session::flash('error','value');
          return redirect('dashboard/recycle/news');
        }
    }

}
