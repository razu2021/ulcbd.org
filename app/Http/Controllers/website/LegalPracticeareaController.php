<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LegalPracticearea;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;

class LegalPracticeareaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $all=LegalPracticearea::where('status',1)->orderBy('uniq_id','DESC')->get();
       return view('admin.LegalPracticearea.all',compact('all'));
    }
    public function add(){

        return view('admin.LegalPracticearea.add');
    }
    public function edit($slug){
        $data=LegalPracticearea::where('status',1)->where('slug',$slug,)->firstOrFail();
        return view('admin.LegalPracticearea.edit',compact('data'));
    }
    public function view($slug){
        $data=LegalPracticearea::where('status',1)->where('slug',$slug,)->firstOrFail();
        return view('admin.LegalPracticearea.view',compact('data'));
    }
    public function insert(Request $request){
        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=LegalPracticearea::insertGetId([
            'heading'=>$request['heading'],
            'title'=>$request['title'],
            'subtitle'=>$request['subtitle'],
            'practice_name'=>$request['practice_name'],
            'practice_subject'=>$request['practice_subject'],
            'practice_area'=>$request['practice_area'],
            'post_creator'=>$creator,
            'slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('bgimage')){
            $image=$request->file('bgimage');
            $imageName='ulcbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            
            LegalPracticearea::where('uniq_id',$insert)->update([
              'bgimage'=>$imageName,
            ]);
          }

          if($insert){
            Session::flash('success','value');
            return redirect('dashboard/website/LegalPracticearea');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/LegalPracticearea/add');
          }
    }
    public function update(Request $request){
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
        $update=LegalPracticearea::where('status',1)->where('uniq_id',$id)->update([
            'heading'=>$request['heading'],
            'title'=>$request['title'],
            'subtitle'=>$request['subtitle'],
            'practice_name'=>$request['practice_name'],
            'practice_subject'=>$request['practice_subject'],
            'practice_area'=>$request['practice_area'],
            'post_editor'=>$editor,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('bgimage')){
            $image=$request->file('bgimage');
            $imageName='ulcbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            LegalPracticearea::where('uniq_id',$id)->update([
              'bgimage'=>$imageName,
            ]);
          }

          if($update){
            Session::flash('success','value');
            return redirect('dashboard/website/LegalPracticearea/view/'.$slug);
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/LegalPracticearea/edit/'.$slug);
          }

    }
    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=LegalPracticearea::where('status',1)->where('uniq_id',$id)->update([
          'status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        
        if($soft){
            Session::flash('success','value');
            return redirect('dashboard/website/LegalPracticearea');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/LegalPracticearea');
          }

    }
    public function restore(){
        echo "restore ";
    }
    public function delete(){
        echo "delter ";
    }
}
