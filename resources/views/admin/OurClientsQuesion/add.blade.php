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
      <form method="post" action="{{url('dashboard/website/OurClientsQuesion/insert')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-header bg-secondary">
            <div class="row">
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>Our clients Quesion </div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/website/OurClientsQuesion')}}"><i class="fa fa-th"></i>All Quesions  </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">  name  <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="name" >
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">  phone  <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="phone" >
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> Email   <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="email" >
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> subject <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="subject" >
              </div>
            </div>

            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> weitte your Quesions  <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="client_quesion" >
              </div>
            </div>


          </div>
          <div class="card-footer bg-secondary text-center">
            <button class="btn btn-md btn-dark" type="submit"> Submit  </button>
          </div>
      </div>
      </form>
  </div>
</div>

@endsection