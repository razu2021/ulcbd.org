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
      <form method="post" action="{{url('dashboard/website/ContactServices/update')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-header bg-secondary">
            <div class="row">
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>uploads banner information </div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/website/ContactServices')}}"><i class="fa fa-th"></i>All banner info  </a>
              </div>
            </div>
          </div>
          <div class="card-body">
           <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label"> service title <span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="hidden" name="id" value="{{$data->slider_id}}">
              <input type="hidden" name="slug" value="{{$data->slider_slug}}">
              <input type="text" class="form-control form_control" id="" name="service_title" value="{{$data->service_title}}">
            </div>
          </div>
          {{-- // heading end  --}}
          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label"> service info   <span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="service_info" value="{{$data->service_info}}">
            </div>
          </div>
          {{-- // caption end  --}}

          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label">service button  <span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="service_button" value="{{$data->service_button}}">
            </div>
          </div>
          {{-- end  --}}
          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label">service button  <span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="button_url" value="{{$data->button_url}}">
            </div>
          </div>
          {{-- end  --}}

          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label">google map iframe:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="google_map" value="{{$data->google_map}}" >
            </div>
          </div>
          {{-- end  --}}
          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label">support title<span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="support_title" value="{{$data->support_title}}">
            </div>
          </div>
          {{-- end  --}}

          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label">support mail <span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="support_mail" value="{{$data->support_mail}}">
            </div>
          </div>
          {{-- end  --}}

          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label">support phone <span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="support_phone" value="{{$data->support_phone}}">
            </div>
          </div>

          {{-- end  --}}
          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label">Review title <span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="review_title" value="{{$data->review_title}}">
            </div>
          </div>
          {{-- end  --}}
          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label">Review subtitle <span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="review_subtitle" value="{{$data->review_subtitle}}" >
            </div>
          </div>
          {{-- end  --}}
          <div class="row mb-2">
            <label class="col-md-3 col-form-label col_form_label">Review information <span class="req_star">*</span>:</label>
            <div class="col-md-7">
              <input type="text" class="form-control form_control" id="" name="review_info" value="{{$data->review_info}}">
            </div>
          </div>
          {{-- end  --}}
        
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">image<span class="req_star">*</span>:</label>
              <div class="col-md-4">
                <input type="file" class="form-control form_control" id="" name="image" >
              </div>
              <div class="col-md-3">
                @if($data->slider_image!='')
                <img height="100" src="{{asset('uploads/'.$data->slider_image)}}"/>
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