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
      <form method="post" action="{{url('dashboard/website/ContactGetreview/update')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-header bg-secondary">
            <div class="row">
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>our client massage  </div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/website/ContactGetreview')}}"><i class="fa fa-th"></i>All  massage   </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> name  <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="hidden" name="id" disabled value="{{$data->contact_id}}">
                <input type="hidden" name="slug"  value="{{$data->slug}}">
                <input type="text" disabled class="form-control form_control" id=""   name="name" value="{{$data->name}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> phpne <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" disabled class="form-control form_control"  id="" name="phone"  value="{{$data->phone}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> email <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="email" disabled class="form-control form_control"  id="" name="email" value="{{$data->email}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> subject   <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" disabled class="form-control form_control"   id="" name="subject" value="{{$data->subject}}">
              </div>
            </div>
            
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">  reviews   <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <textarea name="contact_massage" class="form-control form_control" id="" cols="100" rows="8" >{{$data->contact_massage}}</textarea>
              </div>
            </div>

          
            {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">   image<span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="file" disabled class="form-control form_control" id="" name="image" >
              </div>
            </div>

            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> title  <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text"  class="form-control form_control" id=""   name="title" value="{{$data->title}}">
              </div>
            </div>
  
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> subtitle  <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text"  class="form-control form_control" id=""   name="subtitle" value="{{$data->subtitle}}">
              </div>
            </div>
  
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> info  <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text"  class="form-control form_control" id=""   name="info" value="{{$data->info}}">
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