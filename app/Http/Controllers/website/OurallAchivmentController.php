<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurallAchivment;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;

class OurallAchivmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $all=OurallAchivment::where('status', 1)->orderBy('uniq_id', 'DESC')->get();
        return view('admin.OurallAchivment.all', compact('all'));
    }

    public function add()
    {
        return view('admin.OurallAchivment.add');
    }
    public function edit($slug)
    {
        $data=OurallAchivment::where('status', 1)->where('slug', $slug, )->firstOrFail();
        return view('admin.OurallAchivment.edit', compact('data'));
    }
    public function view($slug)
    {
        $data=OurallAchivment::where('status', 1)->where('slug', $slug, )->firstOrFail();
        return view('admin.OurallAchivment.view', compact('data'));
    }
    public function insert(Request $request)
    {
        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=OurallAchivment::insertGetId([
            'heading'=>$request['heading'],
            'title'=>$request['title'],
            'subtitle'=>$request['subtitle'],
            'count'=>$request['count'],
            'post_creator'=>$creator,
            'slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if ($insert) {
            Session::flash('success', 'value');
            return redirect('dashboard/website/OurallAchivment');
        } else {
            Session::flash('error', 'value');
            return redirect('dashboard/website/OurallAchivment/add');
        }
    }
    public function update(Request $request)
    {
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
        $update=OurallAchivment::where('status', 1)->where('uniq_id', $id)->update([
            'heading'=>$request['heading'],
            'title'=>$request['title'],
            'subtitle'=>$request['subtitle'],
            'count'=>$request['count'],
            'post_editor'=>$editor,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if ($request->hasFile('image')) {
            $image=$request->file('image');
            $imageName='ulcbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300, 300)->save('uploads/'.$imageName);
            OurallAchivment::where('uniq_id', $id)->update([
              'image'=>$imageName,
            ]);
        }

    

        if ($update) {
            Session::flash('success', 'value');
            return redirect('dashboard/website/OurallAchivment/view/'.$slug);
        } else {
            Session::flash('error', 'value');
            return redirect('dashboard/website/OurallAchivment/edit/'.$slug);
        }
    }
    public function softdelete()
    {
        $id=$_POST['modal_id'];
        $soft=OurallAchivment::where('status', 1)->where('uniq_id', $id)->update([
          'status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if ($soft) {
            Session::flash('success', 'value');
            return redirect('dashboard/website/OurallAchivment');
        } else {
            Session::flash('error', 'value');
            return redirect('dashboard/website/OurallAchivment');
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
