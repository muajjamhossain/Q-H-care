<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Session;
use Image;

class ProductController extends Controller{
  public function __contruct(){
    $this->middleware('auth');
  }

     public function index(){
          $all=Product::where('product_status',1)->orderBy('product_id','DESC')->get();
          return view('admin.product.all', compact('all'));
      }

      public function add(){
          return view('admin.product.add');
      }

      public function view($slug){
        $data= Product::where('product_status',1)->where('product_slug',$slug)->firstOrFail();
          return view('admin.product.view', compact('data'));
      }

      public function edit($slug){
        $data= Product::where('product_status',1)->where('product_slug',$slug)->firstOrFail();
          return view('admin.product.edit', compact('data'));
      }


    public function insert(Request $request){
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'pic' => 'required',
            'addcell.*.feature' => 'required',
        ],[

        ]);

        $detail='';

        foreach ($request->addcell as $key => $value) {
            if($detail==''){
                $detail=$value['feature'];
            }elseif($detail!=''){
                $detail=$detail.','.$value['feature'];
            }
        }

        $slug= 'P'.uniqid(10);
        $insert= Product::insertGetId([
          'category_id'=>$request['category_id'],
          'product_name'=>$request['name'],
          'product_title'=>$request['title'],
          'product_description'=>$request['description'],
          'product_slug'=>$slug,
          'product_feature'=>$detail,
        ]);

        if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName='product_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save(base_path('public/uploads/product/'.$imageName));

          Product::where('product_id',$insert)->update([
              'product_image'=>$imageName
          ]);
        }

        if ($insert) {
          Session::flash('success','successfully insert product information.');
          return redirect('dashboard/product');
        }else{
          Session::flash('error','please try again.');
          return redirect()->back();
        }

    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'addcell.*.feature' => 'required',
        ],[

        ]);

        $detail='';

        foreach ($request->addcell as $key => $value) {
            if($detail==''){
                $detail=$value['feature'];
            }elseif($detail!=''){
                $detail=$detail.','.$value['feature'];
            }
        }
        $id=$request['id'];
        $update= Product::where('product_status',1)->where('product_id',$id)->update([
          'category_id'=>$request['category_id'],
          'product_name'=>$request['name'],
          'product_title'=>$request['title'],
          'product_description'=>$request['description'],
          'product_feature'=>$detail,
        ]);

        if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName='product_'.$id.'_'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save(base_path('public/uploads/product/'.$imageName));

          Product::where('product_id',$id)->update([
              'product_image'=>$imageName
          ]);
        }

        if ($update) {
          Session::flash('up_success','successfully insert product information.');
          return redirect('dashboard/product');
      }else{
        Session::flash('error','please try again.');
        return redirect()->back();
      }

    }

    public function publish(){
        $id=$_POST['modal_id'];
        $soft=Product::where('product_status',1)->where('product_id',$id)->update([
            'product_publish'=>1,
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($soft){
            Session::flash('success_publish','successfully publish product information.');
            return redirect('dashboard/product');
        }else{
          Session::flash('error','please try again.');
          return redirect('dashboard/product');
        }
    }

    public function unpublish(){
        $id=$_POST['modal_id'];
        $soft=Product::where('product_status',1)->where('product_id',$id)->update([
            'product_publish'=>0,
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($soft){
            Session::flash('success_unpublish','successfully unpublish product information.');
            return redirect('dashboard/product');
        }else{
          Session::flash('error','please try again.');
          return redirect('dashboard/product');
        }
    }

    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=Product::where('product_status',1)->where('product_id',$id)->update([
            'product_status'=>0,
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($soft){
            Session::flash('success_soft','successfully unpublish product information.');
            return redirect('dashboard/product');
        }else{
          Session::flash('error','please try again.');
          return redirect('dashboard/product');
        }
    }

    public function restore(){
        $id=$_POST['modal_id'];
        $restore=Product::where('product_status',0)->where('product_id',$id)->update([
            'product_status'=>1,
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($restore){
            Session::flash('restore','value');
            return redirect('dashboard/recycle/banner');
        }else{
          Session::flash('error','please try again.');
          return redirect('dashboard/recycle/banner');
        }
    }

    public function delete(){
        $id=$_POST['modal_id'];
        $del=Product::where('product_status',0)->where('product_id',$id)->delete();
        if($del){
            Session::flash('delete','value');
            return redirect('dashboard/recycle/banner');
        }else{
          Session::flash('error','value');
          return redirect('dashboard/recycle/banner');
        }
    }

  }
