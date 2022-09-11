<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactServices;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;

class ContactServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $all=ContactServices::where('slider_status',1)->orderBy('slider_id','DESC')->get();
       return view('admin.ContactServices.all',compact('all'));
    }

    public function add(){
        return view('admin.ContactServices.add');
    }
    public function edit($slug){
        $data=ContactServices::where('slider_status',1)->where('slider_slug',$slug,)->firstOrFail();
        return view('admin.ContactServices.edit',compact('data'));
    }
    public function view($slug){
        $data=ContactServices::where('slider_status',1)->where('slider_slug',$slug,)->firstOrFail();
        return view('admin.ContactServices.view',compact('data'));
    }
    public function insert(Request $request){
        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=ContactServices::insertGetId([
            'service_title'=>$request['service_title'],
            'service_info'=>$request['service_info'],
            'service_button'=>$request['service_button'],
            'button_url'=>$request['button_url'],
            'google_map'=>$request['google_map'],
            'support_title'=>$request['support_title'],
            'support_mail'=>$request['support_mail'],
            'support_phone'=>$request['support_phone'],
            'review_title'=>$request['review_title'],
            'review_subtitle'=>$request['review_subtitle'],
            'review_info'=>$request['review_info'],
            'slider_creator'=>$creator,
            'slider_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->save('uploads/'.$imageName);
            
            ContactServices::where('slider_id',$insert)->update([
              'slider_image'=>$imageName,
            ]);
          }

          if($insert){
            Session::flash('success','value');
            return redirect('dashboard/website/ContactServices');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/ContactServices/add');
          }


    }
    public function update(Request $request){
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
        $update=ContactServices::where('slider_status',1)->where('slider_id',$id)->update([
            'service_title'=>$request['service_title'],
            'service_info'=>$request['service_info'],
            'service_button'=>$request['service_button'],
            'button_url'=>$request['button_url'],
            'google_map'=>$request['google_map'],
            'support_title'=>$request['support_title'],
            'support_mail'=>$request['support_mail'],
            'support_phone'=>$request['support_phone'],
            'review_title'=>$request['review_title'],
            'review_subtitle'=>$request['review_subtitle'],
            'review_info'=>$request['review_info'],
            'slider_editor'=>$editor,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->save('uploads/'.$imageName);
            
            ContactServices::where('slider_id',$id)->update([
              'slider_image'=>$imageName,
            ]);
          }
          if($update){
            Session::flash('success','value');
            return redirect('dashboard/website/ContactServices/view/'.$slug);
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/ContactServices/edit/'.$slug);
          }

    }
    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=ContactServices::where('slider_status',1)->where('slider_id',$id)->update([
          'slider_status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        
        if($soft){
            Session::flash('success','value');
            return redirect('dashboard/website/ContactServices');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/ContactServices');
          }

    }
    public function restore(){
        echo "restore ";
    }
    public function delete(){
        echo "delter ";
    }
}
