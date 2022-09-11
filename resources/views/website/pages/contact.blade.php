@extends('layouts/master')
@section('content')


<div> 
  <div>
    <div >
      <section  class="overflow-hidden pt-0">
        <section class=" overflow-hidden">
          @foreach($Contactbanner as $data)
          <div class="px-4 py-5 px-md-5 text-center bg-image ripple" style="background-image: url('{{asset('uploads/'.$data->slider_image)}}'); height: 600px; background-size: cover; background-position: 50% 50%;">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.85)">
              <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-lg-12">
                    <div class="text-white">
                      <h1 class="  display-2 fw-bold ls-tight text-white">
                          {{$data->slider_heading}}
                      </h1>
                      <h6 class=" px-5 display-6 fw-bold ls-tight text-white">
                          {{$data->slider_title}}
                      </h6>
                      <p class="px-5 display-3 fw-bold ls-tight text-white">
                          {{$data->slider_caption}}
                      </p>
                      <a class="btn btn-primary btn-lg btn-rounded py-3 px-5 mb-2 mb-md-0 me-md-2 mt-2" href="{{$data->button_url}}" role="button"  >{{$data->slider_button}} </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </section>
      </section>
    </div>
  </div>
</div>
<!-- banner end here  -->





<div class="section-padding ">
  <div class="container">
      <div class="row">
        @foreach ($contactservice as $data)
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
              <div class="our-office-address">
                  <div class="card ripple">
                      <div class="card-body ">
                        <h5 class="card-title">{{$data->service_title}} </h5>
                        <p class="card-text">{{$data->service_info}}</p>
                        <a class="text-success text-uppercase pt-4" href="{{$data->button_url}}">{{$data->service_button}}</a>
                      </div>
                    </div>
              </div>
          </div>
          @endforeach
      </div>
  </div>
</div>

<!-- section end her  -->
<div id="" class="">
  <div>
    <div  style="position: relative;">

      <section  class="container-fluid pt-5">
        <section class="">
          <style>
            /* Map settings */
            .map-container-2 {
              height: 500px;
            }

            .map-container-2 iframe {
              left: 0;
              top: 0;
              height: 100%;
              width: 100%;
            }

            .rounded-t-5 {
              border-top-left-radius: 0.5rem;
              border-top-right-radius: 0.5rem;
            }

            @media (min-width: 992px) {
              .rounded-tr-lg-0 {
                border-top-right-radius: 0;
              }

              .rounded-bl-lg-5 {
                border-bottom-left-radius: 0.5rem;
              }
            }
          </style>
          <div class="card mb-3">
            <div class="row g-0 d-flex align-items-center">
              <div class="col-12 col-sm-12 col-md-12  col-lg-12 col-xl-12 col-xxl-12 d-lg-flex">
                <div class="map-container-2 w-100 mb-4 mb-lg-0">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.2259482142854!2d90.38695751524672!3d23.73932078459486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bf54700001%3A0x4ce0dc99dc6a7224!2sUNIVERSITAS%20LAW%20CHAMBERS!5e0!3m2!1sen!2sbd!4v1660329560818!5m2!1sen!2sbd" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" ></iframe>
                </div>
              </div>   
            </div>
          </div>

          <div class="container">
            <div class="row">
              @foreach ($contactservice as $data)
              <div class="  col-12 col-sm-12 col-md-12  col-lg-6 col-xl-6 col-xxl-6 ">
                <div class="card-body py-5 px-md-5">
                  <div class="row gx-lg-5">
                    <div class="col-md-6 mb-5">
                      <div class="d-flex align-items-start">
                        <div class="flex-shrink-0">
                          <div class="p-3 bg-primary rounded-4 shadow-2-strong">
                            <i class="fas fa-headset fa-lg text-white fa-fw"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-4">
                          <p class="fw-bold mb-1"> {{$data->support_title}} </p>
                          <p class="text-muted mb-0"><a href="mailto:{{$data->support_mail}}">{{$data->support_mail}}</a></p>
                          <p class="text-muted mb-0"><a href="tel:{{$data->support_phone}}">{{$data->support_phone}}</a></p>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
          </div>
        </section>
      </section>
    </div>
  </div>
</div>

<div >
  <div>
    <div  class="" style="position: relative;">
      <section  class="container">
        <section class=" text-center">
          <style>
            hr.divider-vertical {
              position: absolute;
              right: 0;
              top: 0;
              width: 1px;
              background-image: linear-gradient(180deg, transparent, hsl(0, 0%, 40%), transparent);
              background-color: transparent;
              height: 100%;
            }
          </style>
          <!-- Background image -->
           @foreach ($contactservice as $data) 
          <div class="p-5 bg-image" style="background-image: url('{{asset('uploads/'.$data->slider_image)}}'); height: 400px;width:100%; background-size: cover; background-position: 50% 50%; background-color: rgba(0, 0, 0, 0);" >
          <h1 class="display-5 text-bold bg-success text-white text-capitalize container-fluid " style="margin-top: 170px" >{{$data->google_map}}</h1>
          </div>
          @endforeach
          <div class="card  shadow-5-strong" style=" margin-top: -400px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px); ">
            <div class="card-body ">
              <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                  <form method="POST" action="{{url('dashboard/website/ContactContactform/insert')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-outline mb-4">
                      <input type="text" id="form4Example1" class="form-control" name="name">
                      <label class="form-label" for="form4Example1" style="margin-left: 0px;">Name</label>
                      <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 42.4px;"></div>
                        <div class="form-notch-trailing"></div>
                      </div>
                    </div>
                      <!-- phone input -->
                    <div class="form-outline mb-4">
                      <input type="tel" id="form4Example1" class="form-control" name="phone">
                      <label class="form-label" for="form4Example1" style="margin-left: 0px;">Phone</label>
                      <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 42.4px;"></div>
                        <div class="form-notch-trailing"></div>
                      </div>
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" id="form4Example2" class="form-control" name="email">
                      <label class="form-label" for="form4Example2" style="margin-left: 0px;">Email address</label>
                      <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 88.8px;"></div>
                        <div class="form-notch-trailing"></div>
                      </div>
                    </div>
                    <!-- subject input -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form4Example2" class="form-control" name="subject">
                      <label class="form-label" for="form4Example2" style="margin-left: 0px;">Subject</label>
                      <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 88.8px;"></div>
                        <div class="form-notch-trailing"></div>
                      </div>
                    </div>
                    <!-- Message input -->
                    <div class="form-outline mb-4">
                      <textarea class="form-control" id="form4Example3" rows="4" name="contact_massage"></textarea>
                      <label class="form-label" for="form4Example3" style="margin-left: 0px;">Message</label>
                      <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 60px;"></div>
                        <div class="form-notch-trailing"></div>
                      </div>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn  btn-primary btn-block ripple">massage submit </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
    </div>
  </div>
</div>

<!-- contact form end here  -->
<!-- get agency statrt -->
<div id="preview" class="preview">
<div>
  <div >
    <section  class="overflow-hidden pt-0" >
      <section class=" background-radial-gradient overflow-hidden">
        <style>
          .background-radial-gradient {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%, hsl(218, 41%, 35%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100%), radial-gradient(1250px circle at 100% 100%, hsl(218, 41%, 45%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100%);
          }

          #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
          }

          #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
          }

          .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
          }
        </style>
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start">
          <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
              @foreach ($contactservice as $data)
              <h1 class="my-5 display-2 fw-bold ls-tight " style="color: hsl(218, 81%, 95%);text-transform: uppercase;">
                <span>{{$data->review_title}}</span> 
              </h1>
              <h1 class="my-5 display-3 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                <span style="color: hsl(218, 81%, 75%)">{{$data->review_subtitle}}</span>
              </h1>
              <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">{{$data->review_info}}</p>
              @endforeach
            </div>          
           
            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
              <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
              <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
              <div class="card bg-glass">
                <div class="card-body px-4 py-5 px-md-5">

                  <form method="POST" action="{{url('dashboard/website/ContactGetreview/insert')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-outline mb-4">
                      <input type="text" id="form4Example1" class="form-control" name="name">
                      <label class="form-label" for="form4Example1" style="margin-left: 0px;">Name</label>
                      <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 42.4px;"></div>
                        <div class="form-notch-trailing"></div>
                      </div>
                    </div>
                      <!-- phone input -->
                    <div class="form-outline mb-4">
                      <input type="tel" id="form4Example1" class="form-control" name="phone">
                      <label class="form-label" for="form4Example1" style="margin-left: 0px;">Phone</label>
                      <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 42.4px;"></div>
                        <div class="form-notch-trailing"></div>
                      </div>
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" id="form4Example2" class="form-control" name="email">
                      <label class="form-label" for="form4Example2" style="margin-left: 0px;">Email address</label>
                      <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 88.8px;"></div>
                        <div class="form-notch-trailing"></div>
                      </div>
                    </div>
                    <!-- subject input -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form4Example2" class="form-control" name="subject">
                      <label class="form-label" for="form4Example2" style="margin-left: 0px;">Subject</label>
                      <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 88.8px;"></div>
                        <div class="form-notch-trailing"></div>
                      </div>
                    </div>
                    <!-- Message input -->
                    <div class="form-outline mb-4">
                      <textarea class="form-control" id="form4Example3" rows="4" name="contact_massage"></textarea>
                      <label class="form-label" for="form4Example3" style="margin-left: 0px;">Message</label>
                      <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 60px;"></div>
                        <div class="form-notch-trailing"></div>
                      </div>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="file" class="form-control" id="form4Example3" name="image"/>
                      <label class="form-label" for="form4Example3" style="margin-left: 0px;"></label>
                      <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 60px;"></div>
                        <div class="form-notch-trailing"></div>
                      </div>
                    </div>
                    <div class="form-check d-flex justify-content-center mb-4">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked="">
                      <label class="form-check-label" for="form2Example33">uploads your photo</label>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn  btn-primary btn-block ripple"> submit </button>
                  </form>

      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    <!---->
  </div>
</div>
</div>
<!-- End your project here-->


@endsection


