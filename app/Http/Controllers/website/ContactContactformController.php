<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactContactform;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;

class ContactContactformController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $all=ContactContactform::where('status', 1)->orderBy('contact_id', 'DESC')->get();
        return view('admin.ContactContactform.all', compact('all'));
    }

    public function add()
    {
        return view('admin.ContactContactform.add');
    }
    public function edit($slug)
    {
        $data=ContactContactform::where('status', 1)->where('slug', $slug, )->firstOrFail();
        return view('admin.ContactContactform.edit', compact('data'));
    }
    public function view($slug)
    {
        $data=ContactContactform::where('status', 1)->where('slug', $slug, )->firstOrFail();
        return view('admin.ContactContactform.view', compact('data'));
    }
    public function insert(Request $request){

        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=ContactContactform::insertGetId([
            'name'=>$request['name'],
            'phone'=>$request['phone'],
            'email'=>$request['email'],
            'subject'=>$request['subject'],
            'contact_massage'=>$request['contact_massage'],
            'creator'=>$creator,
            'slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if ($insert) {
            Session::flash('success', 'value');
            return back();
        } else {
            Session::flash('error', 'value');
            return back();
        }
    }
    public function update(Request $request)
    {
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
        $update=ContactContactform::where('status', 1)->where('contact_id', $id)->update([
    'editor'=>$editor,
    'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->save('uploads/'.$imageName);
            
            ContactContactform::where('contact_id',$id)->update([
              'image'=>$imageName,
            ]);
          }


        if ($update) {
            Session::flash('success', 'value');
            return redirect('dashboard/website/ContactContactform/view/'.$slug);
        } else {
            Session::flash('error', 'value');
            return redirect('dashboard/website/ContactContactform/edit/'.$slug);
        }
    }
    public function softdelete()
    {
        $id=$_POST['modal_id'];
        $soft=ContactContactform::where('status', 1)->where('contact_id', $id)->update([
          'status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if ($soft) {
            Session::flash('success', 'value');
            return redirect('dashboard/website/ContactContactform');
        } else {
            Session::flash('error', 'value');
            return redirect('dashboard/website/ContactContactform');
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
