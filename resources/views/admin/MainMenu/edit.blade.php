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
      <form method="post" action="{{url('dashboard/website/MainMenu/update')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-header bg-secondary">
            <div class="row">
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>Main Menu   </div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/website/MainMenu')}}"><i class="fa fa-th"></i>All  menu  </a>
              </div>
            </div>
          </div>
          <div class="card-body">
           {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> Main Menu  <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="hidden" name="id" id="" value="{{$data->mainmenu_id}}">
                <input type="hidden" name="slug" id="" value="{{$data->post_slug}}">
                <input type="text" class="form-control form_control" id="" name="main_menu" value="{{$data->main_menu}}">
              </div>
            </div>

           {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> Main Menu Link   <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="mainmenu_link" value="{{$data->mainmenu_link}}">
              </div>
            </div>

           {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> Sub Menu  <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="submenu" value="{{$data->submenu}}">
              </div>
            </div>
           {{-- end  --}}

            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> Sub Menu  Link <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="submenu_link" value="{{$data->submenu_link}}">
              </div>
            </div>
           {{-- end  --}}


            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> other Menu  <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="other" value="{{$data->other}}">
              </div>
            </div>
           {{-- end  --}}

            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> other Menu Link  <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="other_link" value="{{$data->other_link}}">
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