<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurClientsQuesion;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;

class OurClientsQuesionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $all=OurClientsQuesion::where('status', 1)->orderBy('Clientsq_id', 'DESC')->get();
        return view('admin.OurClientsQuesion.all', compact('all'));
    }

    public function add()
    {
        return view('admin.OurClientsQuesion.add');
    }
    public function edit($slug)
    {
        $data=OurClientsQuesion::where('status', 1)->where('slug', $slug, )->firstOrFail();
        return view('admin.OurClientsQuesion.edit', compact('data'));
    }
    public function view($slug)
    {
        $data=OurClientsQuesion::where('status', 1)->where('slug', $slug, )->firstOrFail();
        return view('admin.OurClientsQuesion.view', compact('data'));
    }
    public function insert(Request $request){

        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=OurClientsQuesion::insertGetId([
            'name'=>$request['name'],
            'phone'=>$request['phone'],
            'email'=>$request['email'],
            'subject'=>$request['subject'],
            'client_quesion'=>$request['client_quesion'],
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
        $update=OurClientsQuesion::where('status', 1)->where('Clientsq_id', $id)->update([
            'ansqwer'=>$request['ansqwer'],
            'editor'=>$editor,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            
            OurClientsQuesion::where('Clientsq_id',$id)->update([
              'image'=>$imageName,
            ]);
          }


        if ($update) {
            Session::flash('success', 'value');
            return redirect('dashboard/website/OurClientsQuesion/view/'.$slug);
        } else {
            Session::flash('error', 'value');
            return redirect('dashboard/website/OurClientsQuesion/edit/'.$slug);
        }
    }
    public function softdelete()
    {
        $id=$_POST['modal_id'];
        $soft=OurClientsQuesion::where('status', 1)->where('Clientsq_id', $id)->update([
          'status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if ($soft) {
            Session::flash('success', 'value');
            return redirect('dashboard/website/OurClientsQuesion');
        } else {
            Session::flash('error', 'value');
            return redirect('dashboard/website/OurClientsQuesion');
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
