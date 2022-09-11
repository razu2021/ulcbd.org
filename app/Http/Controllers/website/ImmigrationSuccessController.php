<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\immisuccess;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;

class ImmigrationSuccessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $all=immisuccess::where('status',1)->orderBy('uniq_id','DESC')->get();
       return view('admin.website.immisuccess.all',compact('all'));
    }

    public function add(){
        return view('admin.website.immisuccess.add');
    }
    public function edit($slug){
        $data=immisuccess::where('status',1)->where('slug',$slug,)->firstOrFail();
        return view('admin.website.immisuccess.edit',compact('data'));
    }
    public function view($slug){
        $data=immisuccess::where('status',1)->where('slug',$slug,)->firstOrFail();
        return view('admin.website.immisuccess.view',compact('data'));
    }
    public function insert(Request $request){
        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=immisuccess::insertGetId([
            'heading'=>$request['heading'],
            'title'=>$request['title'],
            'subtitle'=>$request['subtitle'],
            'caption'=>$request['caption'],
            'info'=>$request['info'],
            'button'=>$request['button'],
            'button_url'=>$request['url'],
            'post_creator'=>$creator,
            'slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            
            immisuccess::where('uniq_id',$insert)->update([
              'image'=>$imageName,
            ]);
          }

        if($request->hasFile('bgimage')){
            $image=$request->file('bgimage');
            $imageName='ulcbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            
            immisuccess::where('uniq_id',$insert)->update([
              'bgimage'=>$imageName,
            ]);
          }

          if($insert){
            Session::flash('success','value');
            return redirect('dashboard/website/immisuccess');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/immisuccess/add');
          }
    }
    public function update(Request $request){
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
        $update=immisuccess::where('status',1)->where('uniq_id',$id)->update([
            'heading'=>$request['heading'],
            'title'=>$request['title'],
            'subtitle'=>$request['subtitle'],
            'caption'=>$request['caption'],
            'info'=>$request['info'],
            'button'=>$request['button'],
            'button_url'=>$request['url'],
            'post_editor'=>$editor,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            immisuccess::where('uniq_id',$id)->update([
              'image'=>$imageName,
            ]);
          }

        if($request->hasFile('bgimage')){
            $image=$request->file('bgimage');
            $imageName='ulcbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            immisuccess::where('uniq_id',$id)->update([
              'bgimage'=>$imageName,
            ]);
          }

          if($update){
            Session::flash('success','value');
            return redirect('dashboard/website/immisuccess/view/'.$slug);
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/immisuccess/edit/'.$slug);
          }

    }
    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=immisuccess::where('status',1)->where('uniq_id',$id)->update([
          'status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        
        if($soft){
            Session::flash('success','value');
            return redirect('dashboard/website/immisuccess');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/immisuccess');
          }

    }
    public function restore(){
        echo "restore ";
    }
    public function delete(){
        echo "delter ";
    }
}
