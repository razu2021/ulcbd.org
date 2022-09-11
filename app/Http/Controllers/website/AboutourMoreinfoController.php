<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutourmoreInfo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;

class AboutourMoreinfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $all=AboutourmoreInfo::where('status', 1)->orderBy('uniq_id', 'DESC')->get();
        return view('admin.AboutourmoreInfo.all', compact('all'));
    }

    public function add()
    {
        return view('admin.AboutourmoreInfo.add');
    }
    public function edit($slug)
    {
        $data=AboutourmoreInfo::where('status', 1)->where('slug', $slug, )->firstOrFail();
        return view('admin.AboutourmoreInfo.edit', compact('data'));
    }
    public function view($slug)
    {
        $data=AboutourmoreInfo::where('status', 1)->where('slug', $slug, )->firstOrFail();
        return view('admin.AboutourmoreInfo.view', compact('data'));
    }
    public function insert(Request $request)
    {
        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=AboutourmoreInfo::insertGetId([
            'heading'=>$request['heading'],
            'title'=>$request['title'],
            'subtitle'=>$request['subtitle'],
            'caption'=>$request['caption'],
            'button'=>$request['button'],
            'button_url'=>$request['url'],
            'post_creator'=>$creator,
            'slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if ($request->hasFile('image')) {
            $image=$request->file('image');
            $imageName='ulcbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300, 300)->save('uploads/'.$imageName);

            AboutourmoreInfo::where('uniq_id', $insert)->update([
              'image'=>$imageName,
            ]);
        }

        if ($insert) {
            Session::flash('success', 'value');
            return redirect('dashboard/website/AboutourmoreInfo');
        } else {
            Session::flash('error', 'value');
            return redirect('dashboard/website/AboutourmoreInfo/add');
        }
    }
    public function update(Request $request)
    {
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
        $update=AboutourmoreInfo::where('status', 1)->where('uniq_id', $id)->update([
            'heading'=>$request['heading'],
            'title'=>$request['title'],
            'subtitle'=>$request['subtitle'],
            'caption'=>$request['caption'],
            'button'=>$request['button'],
            'button_url'=>$request['url'],
            'post_editor'=>$editor,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if ($request->hasFile('image')) {
            $image=$request->file('image');
            $imageName='ulcbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300, 300)->save('uploads/'.$imageName);
            AboutourmoreInfo::where('uniq_id', $id)->update([
              'image'=>$imageName,
            ]);
        }

    

        if ($update) {
            Session::flash('success', 'value');
            return redirect('dashboard/website/AboutourmoreInfo/view/'.$slug);
        } else {
            Session::flash('error', 'value');
            return redirect('dashboard/website/AboutourmoreInfo/edit/'.$slug);
        }
    }
    public function softdelete()
    {
        $id=$_POST['modal_id'];
        $soft=AboutourmoreInfo::where('status', 1)->where('uniq_id', $id)->update([
          'status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if ($soft) {
            Session::flash('success', 'value');
            return redirect('dashboard/website/AboutourmoreInfo');
        } else {
            Session::flash('error', 'value');
            return redirect('dashboard/website/AboutourmoreInfo');
        }
    }
    public function restore()
    {
        echo "restore ";
    }
    public function delete()
    {
        echo "delter ";
    }
}
