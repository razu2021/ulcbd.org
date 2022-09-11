<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactGetreview;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;

class ContactGetrivewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $all=ContactGetreview::where('status', 1)->orderBy('contact_id', 'DESC')->get();
        return view('admin.ContactGetreview.all', compact('all'));
    }

    public function add()
    {
        return view('admin.ContactGetreview.add');
    }
    public function edit($slug)
    {
        $data=ContactGetreview::where('status', 1)->where('slug', $slug, )->firstOrFail();
        return view('admin.ContactGetreview.edit', compact('data'));
    }
    public function view($slug)
    {
        $data=ContactGetreview::where('status', 1)->where('slug', $slug, )->firstOrFail();
        return view('admin.ContactGetreview.view', compact('data'));
    }
    public function insert(Request $request){

        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=ContactGetreview::insertGetId([
            'name'=>$request['name'],
            'phone'=>$request['phone'],
            'email'=>$request['email'],
            'subject'=>$request['subject'],
            'contact_massage'=>$request['contact_massage'],
            'creator'=>$creator,
            'slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->save('uploads/'.$imageName);
            
            ContactGetreview::where('contact_id',$insert)->update([
              'image'=>$imageName,
            ]);
          }

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
        $update=ContactGetreview::where('status', 1)->where('contact_id', $id)->update([
            'contact_massage'=>$request['contact_massage'],
            'title'=>$request['title'],
            'subtitle'=>$request['subtitle'],
            'info'=>$request['info'],
            'editor'=>$editor,
            'editor'=>$editor,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if ($update){
            Session::flash('success', 'value');
            return redirect('dashboard/website/ContactGetreview/view/'.$slug);
        } else {
            Session::flash('error', 'value');
            return redirect('dashboard/website/ContactGetreview/edit/'.$slug);
        }
    }
    public function softdelete()
    {
        $id=$_POST['modal_id'];
        $soft=ContactGetreview::where('status', 1)->where('contact_id', $id)->update([
          'status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if ($soft) {
            Session::flash('success', 'value');
            return redirect('dashboard/website/ContactGetreview');
        } else {
            Session::flash('error', 'value');
            return redirect('dashboard/website/ContactGetreview');
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
