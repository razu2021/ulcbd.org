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
      <form method="post" action="{{url('dashboard/website/StudyabroadPractice/update')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-header bg-secondary">
            <div class="row">
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>our practice area   </div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/website/StudyabroadPractice')}}"><i class="fa fa-th"></i>all information   </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> heading  <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="hidden" name="id"  value="{{$data->uniq_id}}">
                <input type="hidden" name="slug"  value="{{$data->slug}}">
                <input type="text" class="form-control form_control" id="" name="heading" value="{{$data->heading}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> title <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="title"  value="{{$data->title}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> sub title <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="subtitle" value="{{$data->subtitle}}">
              </div>
            </div>
            {{-- // about end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> country name    <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="country_name" value="{{$data->country_name}}">
              </div>
            </div>

            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> practice are    <span class="req_star">*</span>:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="practice_area" value="{{$data->practice_area}}">
              </div>
            </div>
           
      
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label"> iframe  link:</label>
              <div class="col-md-7">
                <input type="text" class="form-control form_control" id="" name="iframe_link"  value="{{$data->iframe_link}}">
              </div>
            </div>
            {{-- end  --}}
            <div class="row mb-2">
              <label class="col-md-3 col-form-label col_form_label">   image<span class="req_star">*</span>:</label>
              <div class="col-md-3">
                <input type="file" class="form-control form_control" id="" name="image"  >
              </div>
              <div class="col-md-4">
                @if($data->image!='')
                <img height="70" src="{{asset('uploads/'.$data->image)}}"/>
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