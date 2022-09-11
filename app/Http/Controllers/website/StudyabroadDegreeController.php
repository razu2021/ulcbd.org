<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudyabroadDegree;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;


class StudyabroadDegreeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $all=StudyabroadDegree::where('choose_status',1)->orderBy('choose_id','DESC')->get();
        return view('admin.StudyabroadDegree.all' ,compact('all'));

    }

    public function add(){
        return view('admin.StudyabroadDegree.add');

    }
    public function edit($slug){
        $data=StudyabroadDegree::where('choose_status',1)->where('choose_slug',$slug,)->firstOrFail();
        return view('admin.StudyabroadDegree.edit',compact('data'));
    }
    public function view($slug){
        $data=StudyabroadDegree::where('choose_status',1)->where('choose_slug',$slug,)->firstOrFail();
        return view('admin.StudyabroadDegree.view',compact('data'));
    }
    public function insert(Request $request){
        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=StudyabroadDegree::insertGetId([
            'choose_heading'=>$request['heading'],
            'choose_caption'=>$request['caption'],
            'news_title'=>$request['title'],
            'news_count'=>$request['count'],
            'choose_info'=>$request['info'],
            'choose_creator'=>$creator,
            'choose_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success','value');
            return redirect('dashboard/website/StudyabroadDegree');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/StudyabroadDegree/add');
          }



    }
    public function update(Request $request){
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
        $update=StudyabroadDegree::where('choose_status',1)->where('choose_id',$id)->update([
            'choose_heading'=>$request['heading'],
            'choose_caption'=>$request['caption'],
            'news_title'=>$request['title'],
            'news_count'=>$request['count'],
            'choose_info'=>$request['info'],
            'choose_editor'=>$editor,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success','value');
            return redirect('dashboard/website/StudyabroadDegree/view/'.$slug);
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/StudyabroadDegree/edit'.$slug);
          }

    }
    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=StudyabroadDegree::where('choose_status',1)->where('choose_id',$id)->update([
          'choose_status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        
        if($soft){
            Session::flash('success','value');
            return redirect('dashboard/website/StudyabroadDegree');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/StudyabroadDegree');
          }

    }
    public function restore(){
      
    }
    public function delete(){
       
    }
}
