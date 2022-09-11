@extends('layouts.admin')
@section('content')
@if(Session::has('success'))
  <script>
    swal({ title: "Success!", text: "Successfully update banner information!", icon: "success", timer:5000});
  </script>
@endif
<div class="row">
  <div class="col-xl-12">
      <div class="card">
          <div class="card-header bg-secondary">
            <div class="row">
              <div class="col-md-8 card_header_title"><i class="fa fa-gg-circle"></i>Quick contact informaton </div>
              <div class="col-md-4 text-end card_header_btn">
                <a class="btn btn-sm btn-dark" href="{{url('dashboard/website/ContactDeteails')}}"><i class="fa fa-th"></i>All contact </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <table class="table table-bordered table-striped custom_view_table">

                  <tr>
                    <td>phone </td>
                    <td>:</td>
                    <td>{{$data->phone}}</td>
                  </tr>

                  <tr>
                    <td>email </td>
                    <td>:</td>
                    <td>{{$data->email}}</td>
                  </tr>

                  <tr>
                    <td>address </td>
                    <td>:</td>
                    <td>{{$data->address}}</td>
                  </tr>


                  <tr>
                    <td> logo </td>
                    <td>:</td>
                    <td>
                      @if($data->logo!='')
                        <img height="80" src="{{asset('uploads/'.$data->logo)}}"/>
                      @else
                        <img height="80" src="{{asset('uploads/avatar.jpg')}}"/>
                      @endif
                    </td>
                  </tr>
                  <tr>
                    <td>Creator</td>
                    <td>:</td>
                    <td>{{$data->creatorInfo->name}}</td>
                  </tr>
                  <tr>
                    <td>Editor</td>
                    <td>:</td>
                    <td>
                      @if ($data->post_editor!='')
                        {{$data->editorInfo->name}}
                      @endif
                      
                    
                    </td>
                   
                  </tr>
                  <tr>
                    <td>Upload Time</td>
                    <td>:</td>
                    <td>{{$data->created_at->format('d-m-y | h:i:s A')}}</td>
                  </tr>

                </table>
              </div>
              <div class="col-md-2"></div>
            </div>
          </div>
          <div class="card-footer bg-secondary">
            <div class="btn-group" role="group">
              <a class="btn btn-primary" href="#">Print</a>
              <a class="btn btn-dark" href="#">PDF</a>
              <a class="btn btn-primary" href="#">Excel</a>
            </div>
          </div>
      </div>
  </div>
</div>
@endsection
