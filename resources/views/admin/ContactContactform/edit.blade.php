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
      <form method="post" action="{{url('dashboard/website/ContactContactform/update')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-header bg-secondary">
            <div class="row">
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>our client massage  </div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/website/ContactContactform')}}"><i class="fa fa-th"></i>All  massage   </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> name  <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="hidden" name="id"  value="{{$data->contact_id}}">
                <input type="hidden" name="slug"  value="{{$data->slug}}">
                <input type="text" class="form-control form_control" id="" disabled  name="name" value="{{$data->name}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> phpne <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" disabled id="" name="phone"  value="{{$data->phone}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> email <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" disabled id="" name="email" value="{{$data->email}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> subject   <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" disabled id="" name="subject" value="{{$data->subject}}">
              </div>
            </div>

            {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> slider  image<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="file" class="form-control form_control" id="" name="image" >
              </div>
            </div>

          </div>
          <div class="card-footer bg-secondary text-center">
            <button class="btn btn-md btn-dark" >upload </button>
          </div>
      </div>
      </form>
  </div>
</div>

@endsection