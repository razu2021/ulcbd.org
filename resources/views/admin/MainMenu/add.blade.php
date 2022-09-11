@extends('layouts.admin')
@section('content')
@if(Session::has('success'))
  <script>
    swal({ title: "Success!", text: "Successfully upload  information!", icon: "success", timer:5000});
  </script>
@endif
@if(Session::has('error'))
  <script>
    swal({ title: "Opps!", text: " information upload failed!", icon: "warning", timer:5000});
  </script>
@endif
<div class="row">
  <div class="col-xl-12">
      <form method="post" action="{{url('dashboard/website/MainMenu/insert')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-header bg-secondary">
            <div class="row">
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>Main Menu   </div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/website/MainMenu')}}"><i class="fa fa-th"></i>all  menu </a>
              </div>
            </div>
          </div>
          <div class="card-body">

            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">  Main menu   <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="main_menu" >
              </div>
            </div>
          {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">  Main menu link   <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="mainmenu_link" >
              </div>
            </div>
          {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">  SubMenu   <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="submenu" >
              </div>
            </div>
          {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">  Sub Menu Link    <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="submenu_link" >
              </div>
            </div>
          {{-- end  --}}

            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> Other menu   <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="other" placeholder="optional " >
              </div>
            </div>
          {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">  Other Menu Link    <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="other_link" placeholder="optional " >
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