<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactDeteails;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;

class ContactDeteailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $all=ContactDeteails::where('post_status',1)->orderBy('deteails_id','DESC')->get();
       return view('admin.ContactDeteails.all',compact('all'));
    }

    public function add(){
        return view('admin.ContactDeteails.add');
    }
    public function edit($slug){
        $data=ContactDeteails::where('post_status',1)->where('post_slug',$slug,)->firstOrFail();
        return view('admin.ContactDeteails.edit',compact('data'));
    }
    public function view($slug){
        $data=ContactDeteails::where('post_status',1)->where('post_slug',$slug,)->firstOrFail();
        return view('admin.ContactDeteails.view',compact('data'));
    }
    public function insert(Request $request){
        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=ContactDeteails::insertGetId([
            'phone'=>$request['phone'],
            'email'=>$request['email'],
            'address'=>$request['address'],
            'post_creator'=>$creator,
            'post_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->save('uploads/'.$imageName);
            ContactDeteails::where('deteails_id',$insert)->update([
              'logo'=>$imageName,
            ]);
          }

          if($insert){
            Session::flash('success','value');
            return redirect('dashboard/website/ContactDeteails');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/ContactDeteails/add');
          }


    }
    public function update(Request $request){
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
        $update=ContactDeteails::where('post_status',1)->where('deteails_id',$id)->update([
            'phone'=>$request['phone'],
            'email'=>$request['email'],
            'address'=>$request['address'],
            'post_editor'=>$editor,
            'post_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->save('uploads/'.$imageName);
            
            ContactDeteails::where('deteails_id',$id)->update([
              'logo'=>$imageName,
            ]);
          }
          if($update){
            Session::flash('success','value');
            return redirect('dashboard/website/ContactDeteails/view/'.$slug);
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/ContactDeteails/edit/'.$slug);
          }
    }
    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=ContactDeteails::where('slider_status',1)->where('deteails_id',$id)->update([
          'post_status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        
        if($soft){
            Session::flash('success','value');
            return redirect('dashboard/website/ContactDeteails');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/ContactDeteails');
          }

    }
    public function restore(){
        echo "restore ";
    }
    public function delete(){
        echo "delter ";
    }
}
