<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutHistory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;

class AboutHistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $all=AboutHistory::where('status', 1)->orderBy('uniq_id', 'DESC')->get();
        return view('admin.AboutHistory.all', compact('all'));
    }

    public function add()
    {
        return view('admin.AboutHistory.add');
    }
    public function edit($slug)
    {
        $data=AboutHistory::where('status', 1)->where('slug', $slug, )->firstOrFail();
        return view('admin.AboutHistory.edit', compact('data'));
    }
    public function view($slug)
    {
        $data=AboutHistory::where('status', 1)->where('slug', $slug, )->firstOrFail();
        return view('admin.AboutHistory.view', compact('data'));
    }
    public function insert(Request $request)
    {
        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=AboutHistory::insertGetId([
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

            AboutHistory::where('uniq_id', $insert)->update([
              'image'=>$imageName,
            ]);
        }

        if ($insert) {
            Session::flash('success', 'value');
            return redirect('dashboard/website/AboutHistory');
        } else {
            Session::flash('error', 'value');
            return redirect('dashboard/website/AboutHistory/add');
        }
    }
    public function update(Request $request)
    {
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
        $update=AboutHistory::where('status', 1)->where('uniq_id', $id)->update([
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
            AboutHistory::where('uniq_id', $id)->update([
              'image'=>$imageName,
            ]);
        }

    

        if ($update) {
            Session::flash('success', 'value');
            return redirect('dashboard/website/AboutHistory/view/'.$slug);
        } else {
            Session::flash('error', 'value');
            return redirect('dashboard/website/AboutHistory/edit/'.$slug);
        }
    }
    public function softdelete()
    {
        $id=$_POST['modal_id'];
        $soft=AboutHistory::where('status', 1)->where('uniq_id', $id)->update([
          'status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if ($soft) {
            Session::flash('success', 'value');
            return redirect('dashboard/website/AboutHistory');
        } else {
            Session::flash('error', 'value');
            return redirect('dashboard/website/AboutHistory');
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