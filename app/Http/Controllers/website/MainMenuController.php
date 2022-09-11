<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainMenu;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;

class MainMenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $all=MainMenu::where('post_status',1)->orderBy('mainmenu_id','DESC')->get();
       return view('admin.MainMenu.all',compact('all'));
    }

    public function add(){
        return view('admin.MainMenu.add');
    }
    public function edit($slug){
        $data=MainMenu::where('post_status',1)->where('post_slug',$slug,)->firstOrFail();
        return view('admin.MainMenu.edit',compact('data'));
    }
    public function view($slug){
        $data=MainMenu::where('post_status',1)->where('post_slug',$slug,)->firstOrFail();
        return view('admin.MainMenu.view',compact('data'));
    }
    public function insert(Request $request){
        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=MainMenu::insertGetId([
            'main_menu'=>$request['main_menu'],
            'mainmenu_link'=>$request['mainmenu_link'],
            'submenu'=>$request['submenu'],
            'submenu_link'=>$request['submenu_link'],
            'other'=>$request['other'],
            'other_link'=>$request['other_link'],
            'post_creator'=>$creator,
            'post_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

          if($insert){
            Session::flash('success','value');
            return redirect('dashboard/website/MainMenu');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/MainMenu/add');
          }


    }
    public function update(Request $request){
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
        $update=MainMenu::where('post_status',1)->where('mainmenu_id',$id)->update([
            'main_menu'=>$request['main_menu'],
            'mainmenu_link'=>$request['mainmenu_link'],
            'submenu'=>$request['submenu'],
            'submenu_link'=>$request['submenu_link'],
            'other'=>$request['other'],
            'other_link'=>$request['other_link'],
            'post_editor'=>$editor,
            'post_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

          if($update){
            Session::flash('success','value');
            return redirect('dashboard/website/MainMenu/view/'.$slug);
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/MainMenu/edit/'.$slug);
          }
    }


    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=MainMenu::where('post_status',1)->where('mainmenu_id',$id)->update([
          'post_status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        
        if($soft){
            Session::flash('success','value');
            return redirect('dashboard/website/MainMenu');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/MainMenu');
          }

    }
    public function restore(){
        echo "restore ";
    }
    public function delete(){
        echo "delter ";
    }
}
