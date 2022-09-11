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
      <form method="post" action="{{url('dashboard/website/ContactDeteails/update')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-header bg-secondary">
            <div class="row">
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>quick contact  </div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/website/ContactDeteails')}}"><i class="fa fa-th"></i>All  information </a>
              </div>
            </div>
          </div>
          <div class="card-body">
           {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> Phone <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="hidden" name="id" id="" value="{{$data->deteails_id}}">
                <input type="hidden" name="slug" id="" value="{{$data->post_slug}}">
                <input type="text" class="form-control form_control" id="" name="phone" value="{{$data->phone}}">
              </div>
            </div>

           {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> email <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="email" value="{{$data->email}}">
              </div>
            </div>
           {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> Adress <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="email" value="{{$data->address}}">
              </div>
            </div>
           {{-- end  --}}


            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">image<span class="req_star">*</span>:</label>
              <div class="col-md-4">
                <input type="file" class="form-control form_control" id="" name="image" >
              </div>
              <div class="col-md-3">
                @if($data->logo!='')
                <img height="100" src="{{asset('uploads/'.$data->logo)}}"/>
                @else
                  <img height="100" src="{{asset('uploads/avatar.jpg')}}"/>
                @endif</td>
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