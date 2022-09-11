@extends('layouts.admin')
@section('content')
@if(Session::has('success'))
  <script>
    swal({ title: "Success!", text: "Successfully upload banner information!", icon: "success", timer:5000});
  </script>
@endif
@if(Session::has('error'))
  <script>
    swal({ title: "Opps!", text: "Banner information upload failed!", icon: "warning", timer:5000});
  </script>
@endif
<div class="row">
  <div class="col-xl-12">
      <form method="post" action="{{url('dashboard/website/LegalAbouts/update')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-header bg-secondary">
            <div class="row">
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>  About information  </div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/website/LegalAbouts')}}"><i class="fa fa-th"></i>All about   information </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> about title 1 <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="hidden" name="id"  value="{{$data->homeabout_id}}">
                <input type="hidden" name="slug"  value="{{$data->about_slug}}">
                <input type="text" class="form-control form_control" id="" name="title1" value="{{$data->title1}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> about title 2 <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="title2"  value="{{$data->title2}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> about title 3 <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="title3" value="{{$data->title3}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> about info 1  <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="info1" value="{{$data->info1}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> about info 2 <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="info2" value="{{$data->info2}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> about info 3 <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="info3" value="{{$data->info3}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> designation 1 <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="designation1" value="{{$data->designation1}}" >
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> designation 2 <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="designation2" value="{{$data->designation2}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> designation 3<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="designation3" value="{{$data->designation3}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> name 1<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="name1" value="{{$data->name1}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> name 2<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="name2" value="{{$data->name2}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> name 3<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="name3" value="{{$data->name3}}">
              </div>
            </div>
            {{-- // about end  --}}

            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">about   Button:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="button"  value="{{$data->button}}">
              </div>
            </div>
            {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">button  url<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="url" value="{{$data->button_url}}">
              </div>
            </div>
            {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> about  image<span class="req_star">*</span>:</label>
              <div class="col-md-3">
                <input type="file" class="form-control form_control" id="" name="image"  >
              </div>
              <div class="col-md-4">
                @if($data->about_image!='')
                <img height="70" src="{{asset('uploads/'.$data->about_image)}}"/>
                @else
                  <img height="70" src="{{asset('uploads/avatar.jpg')}}"/>
                @endif
              </div>
            </div>
            {{-- end  --}}
          </div>
          <div class="card-footer bg-secondary text-center">
            <button class="btn btn-md btn-dark">upload </button>
          </div>
      </div>
      </form>
  </div>
</div>

@endsection