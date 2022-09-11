<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\homeabout;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;

class HomeAboutcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $all=homeabout::where('about_status',1)->orderBy('homeabout_id','DESC')->get();
       return view('admin.website.homeabout.all' , compact('all'));
    }

    public function add(){
        return view('admin.website.homeabout.add');
    }
    public function edit($slug){
        $data=homeabout::where('about_status',1)->where('about_slug',$slug,)->firstOrFail();
        return view('admin.website.homeabout.edit',compact('data'));
    }
    public function view($slug){
        $data=homeabout::where('about_status',1)->where('about_slug',$slug,)->firstOrFail();
        return view('admin.website.homeabout.view',compact('data'));
    }
    public function insert(Request $request){
        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=homeabout::insertGetId([
            'title1'=>$request['title1'],
            'title2'=>$request['title2'],
            'title3'=>$request['title3'],
            'info1'=>$request['info1'],
            'info2'=>$request['info2'],
            'info3'=>$request['info3'],
            'name1'=>$request['name1'],
            'name2'=>$request['name2'],
            'name3'=>$request['name3'],
            'designation1'=>$request['designation1'],
            'designation2'=>$request['designation2'],
            'designation3'=>$request['designation3'],
            'button'=>$request['button'],
            'button_url'=>$request['url'],
            'about_creator'=>$creator,
            'about_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            
            homeabout::where('homeabout_id',$insert)->update([
              'about_image'=>$imageName,
            ]);
          }

          if($insert){
            Session::flash('success','value');
            return redirect('dashboard/website/homepageabout');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/homepageabout/add');
          }


    }
    public function update(Request $request){
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
        $update=homeabout::where('about_status',1)->where('homeabout_id',$id)->update([
            'title1'=>$request['title1'],
            'title2'=>$request['title2'],
            'title3'=>$request['title3'],
            'info1'=>$request['info1'],
            'info2'=>$request['info2'],
            'info3'=>$request['info3'],
            'name1'=>$request['name1'],
            'name2'=>$request['name2'],
            'name3'=>$request['name3'],
            'designation1'=>$request['designation1'],
            'designation2'=>$request['designation2'],
            'designation3'=>$request['designation3'],
            'button'=>$request['button'],
            'button_url'=>$request['url'],
            'about_editor'=>$editor,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            
            homeabout::where('homeabout_id',$id)->update([
              'about_image'=>$imageName,
            ]);
          }
          if($update){
            Session::flash('success','value');
            return redirect('dashboard/website/homepageabout/view/'.$slug);
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/homepageabout/edit/'.$slug);
          }

    }
    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=homeabout::where('about_status',1)->where('homeabout_id',$id)->update([
          'about_status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        
        if($soft){
            Session::flash('success','value');
            return redirect('dashboard/website/homepageabout');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/homepageabout');
          }

    }
    public function restore(){
        echo "restore ";
    }
    public function delete(){
        echo "delter ";
    }
}
