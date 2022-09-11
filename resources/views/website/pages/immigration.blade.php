@extends('layouts/master')
@section('content')

<!-- ============= MAIN CONTENT AREA START HERE  ========== -->
<section class="">
  <div id="">
    <div class="">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <div id="slider">
            <div class="owl-carousel main-carousel owl-theme main-slider">
              @foreach ($immigrationbanner as $data) 
              <div class="slider-item">
                <div class="slider-image">
                  <img src="{{asset('uploads/'.$data->slider_image)}}" alt="laptop image" class="img-fluid"/>
                </div>
                <div class="overlay-about"></div>
                <div class="slider-text slider-text-immi">
                  <div class="row">
                    <div class="col-lg-12">
                      <h6 class="text-white text-center ">{{$data->slider_title}}</h6>
                      <h1 class="text-white text-center display-4">{{$data->slider_heading}}</h1>
                      <p class="text-white text-center  ">{{$data->slider_caption}}</p>
                        <button type="button ripple" class="btn btn-primary bg-success px-4 btn-lg "><a href="{{$data->button_url}}">{{$data->slider_button}} </a></button>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
    <div class="container pt-5 pb-5" data-aos="zoom-in" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center" >
        <div class="row">
          <div class="col-lg-3"></div>
          @foreach ($immiservicehed as $data)
          <div class=" col-12 col-lg-6 text-center">
            <h1 class="display-5 text-capitalize text-dark text-bold p-2 text-primary">{{$data->heading}} </h1>
            <h6  class=" text-capitalize text-dark text-bold p-2">{{$data->title}} </h6>
          </div>
          @endforeach
          <div class="col-lg-3"></div>
          @foreach ($immiservice as $data)
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-4">
                <div class="our-visa-service">
                    <div class="card text-center">
                        <div class="card-body"> 
                            <img src="{{asset('uploads/'.$data->image)}}" alt="">
                          <h5 class="card-title text-center mt-4"  style="font-size:25px ">{{$data->subtitle}}</h5>
                          <p class="card-text text-center">{{$data->caption}}</p>
                          <br>
                          <p class="card-text text-center">{{$data->info}}</p>
                        </div>
                      </div>
                </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- seervice section end  -->



<div  class="" style="position: relative; background:#F8F9FB" data-aos="fade-left" >
  <section  class="container pt-5 pb-1" data-aos="fade-right" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
    <section class="mb-5 position-relative">
      <style>
        @media (min-width: 768px) {
          #cta-img-nml-50 {
            margin-left: 50px;
          }
        }
      </style>
    @foreach ($aboutimmigration as $data)
      <div class="row gx-0">
        <div class="col-md-5 mb-4 mb-md-0">
          <div class="d-flex py-md-5">
            <img src="{{asset('uploads/'.$data->image)}}" class="w-100 rounded-5 shadow-3-strong" id="cta-img-nml-50" style="z-index: 10" alt="" >
          </div>
        </div>
        <div class="col-md-7 mb-4 mb-md-0">
          <div class="bg-primary h-100 rounded-6 p-4 ps-md-5 text-white d-flex align-items-center">
            <div class="ps-md-5">
              <h6 class="fw-light mb-4 text-white ">{{$data->heading}}</h6>
              <h2 class="fw-bold mb-4 text-white ">{{$data->title}}</h2>
              <p class="mb-4 text-white ">{{$data->subtitle}}</p>
              <p class="mb-4 text-white ">{{$data->caption}}</p>
              <p class="mb-4 text-white ">
                {{$data->info}}</p>
              <button type="button" class="btn  btn-outline-white btn-rounded btn-lg" ><a class="text-white" href="{{$data->button_url}}">{{$data->button}}</a></button>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </section>
  </section>
  <!---->
</div>
<!-- about agency end here  -->



<section class="section-padding" >
<div class="container">
  <div class="row">
    @foreach ($immipracticeareahed as $data)
    <div class="consul-title">
      <h4 class="display-3 text-dark p-2">{{$data->heading}}</h4>
      <h6 class="display-6 text-dark p-2">{{$data->title}}</h6>
      <p class="text-dark pb-4" style="font-size: 18px; font-family:'Open Sans';">{{$data->subtitle}}</p>
    </div>
    @endforeach

    <div class="col--12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3" data-aos="zoom-in" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center" >
      <div class="immi-country">
        <ul class="list-group list-group-light">
          <li class="list-group-item px-3 border-0  m-1 bg-success text-white" > COUNTRY NAME:  </li>
          @foreach ($immipracticearea as $data)
          <li class="list-group-item px-3 border-0 bg-light m-1" ><a href="#">{{$data->practice_name}} </a> </li>
          @endforeach

        </ul>
      </div>
    </div>
    <!-- col end  -->
    <div class="col--12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3"  data-aos="zoom-out" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
      <div class="immi-country">
        <ul class="list-group list-group-light">
          <li class="list-group-item px-3 border-0  m-1 bg-success text-white" > PRACTICE AREA :   </li>
          @foreach ($immipracticearea as $data)
          <li class="list-group-item px-3 border-0 bg-light m-1" ><a href="#">{{$data->practice_area}}</a> </li>
          @endforeach

        </ul>
      </div>
    </div>
    <!-- col end  -->
    <div class="col--12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3"data-aos="fade-right" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
      <div class="immi-world-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d54239321.456518546!2d-23.51853741506272!3d38.891787686713705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1660641904562!5m2!1sen!2sbd" width="600" height="520" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <!-- col end  -->
  </div>
</div>
</section>
<!-- find consultaion end here  -->

@foreach ($immistudy as $data)
<div id="" class=" bg-image" style=
"
background-image: url('{{asset('uploads/'.$data->bgimage)}}');
background-position: center;
background-attachment: fixed;
background-repeat: no-repeat;
background-size: cover;
">
{{-- <div class="mask" style="background-color: rgba(50, 68, 114,0.5)"></div> --}}
<div>
  <div  class="" >
    <!---->
    <!---->
    <section  class="container pt-5 section-padding"  data-aos="fade-right" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
      <section class="">
        <div class="row gx-lg-5 align-items-center ">
          <div class="col-md-6  mb-md-0"    data-aos-offset="200">
            <div class="bg-image hover-overlay ripple shadow-4-strong rounded-4 mb-4" data-mdb-ripple-color="light">
              <img src="{{asset('uploads/'.$data->image)}}" class="w-100" alt="" >
            </div>
          </div>
          <div class="col-md-6 mb-4 mb-md-0  pt-5"    data-aos-offset="200">
           <div class="study-aborods-immi">
              <h6 class="text-white ">{{$data->heading}}</h6>
              <h3 class="fw-bold  display-4 ">{{$data->title}}</h3>
              <p class=" text-white">{{$data->caption}}</p>
              <h5 class=" text-white">{{$data->subtitle}}</h5>
           </div>
          </div>
        </div>
      </section>
    </section>
    <!---->
  </div>
</div>
</div>
@endforeach
<!-- study abroad end here this  -->
<!-- tabs area end here  -->
<section class="section-padding ">
  <div class="container" data-aos="fade-down" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4" >
        @foreach($Immicountry as $value)
              <section class="mb-5">
                <!-- Background image -->
                <div class="p-5 text-center bg-image" style="background-image: url('{{asset('uploads/'.$value->image)}}'); height: 300px; background-size: cover; background-position: 50% 50%; background-color: rgba(0, 0, 0, 0);"></div>
                <!-- Background image -->
                <div class="card mx-4 mx-md-2  text-center shadow-5-strong" style=" margin-top:-80px; background: hsla(0, 0%, 100%, 0.7); backdrop-filter: blur(30px); ">
                  <div class="card-body px-2 py-1  px-md-2">
                    <h1 class=" fw-bold ls-tight ">
                    {{$value->image_name}}
                    </h1>
                  </div>
                </div>
              </section>
            </div>
            @endforeach
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

@foreach ($AbroadOffers as $data)
<div id="" class=" bg-image" style=
"
background-image: url('{{asset('uploads/'.$data->bgimage)}}');
background-position: center;
background-attachment: fixed;
background-repeat: no-repeat;
background-size: cover;
">
{{-- <div class="mask" style="background-color: rgba(50, 68, 114,0.5)"></div> --}}
<div>
  <div  class="" >
    <!---->
    <!---->
    <section  class="container pt-5 section-padding"  data-aos="fade-right" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
      <section class="">
        <div class="row gx-lg-5 align-items-center ">
          <div class="col-md-6  mb-md-0"    data-aos-offset="200">
            <div class="bg-image hover-overlay ripple shadow-4-strong rounded-4 mb-4" data-mdb-ripple-color="light">
              <img src="{{asset('uploads/'.$data->image)}}" class="w-100" alt="" >
            </div>
          </div>
          <div class="col-md-6 mb-4 mb-md-0  pt-5"    data-aos-offset="200">
           <div class="study-aborods-immi">
              <h6 class="text-white ">{{$data->heading}}</h6>
              <h3 class="fw-bold  display-4 ">{{$data->title}}</h3>
              <p class=" text-white">{{$data->caption}}</p>
              <h5 class=" text-white">{{$data->subtitle}}</h5>
           </div>
          </div>
        </div>
      </section>
    </section>
    <!---->
  </div>
</div>
</div>
@endforeach
<!-- study abroad end here this  -->

<!-- ouer university partners start  -->
<section class="section-padding" 
style="background-image: url('image/bannner5.jpg');
background-attachment: scroll;
background-size: cover;
background-repeat: no-repeat;
">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="client-say">
          <h1  class="text-dark text-center text-bold" style="font-size:35px;font-family:'Open Sans',sane sarif;font-weight:400 ;padding-bottom: 10px; text-transform: uppercase;">OUR achievement</h1>
        </div>
      </div>
      @foreach ($num1 as $data)
      <div class="col-12 col-sm-12 col-md-2 col-lg-3 col-xl-3 col-xxl-3 mt-2">
         <div class="legal-happy-clients">
          <div class="card text-center border border-primary shadow-0 " style="background-color:#fff;">
              <div class="card-header"><h1 id="{{$data->heading}}">{{$data->count}}</h1></div>
              <div class="card-body">
                  <h6>{{$data->title}}</h6>
              </div>
            </div>
         </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- client say end here  -->



@foreach ($immitestimonialhed as $data)
<div id="" style="
    background-image: url('{{asset('uploads/'.$data->bgimage)}}');
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;">

      <section  class="container mt-5">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-5">
              <div class="immi-testimonial-title text-center ">
              
                <h1 class="text-center pt-4 display-5 text-bold" style="color: #fff;">{{$data->heading}}</h1>
                <p class="text-center pt-4 text-white">{{$data->title}}</p>
                <p class="text-center pt-4 text-white">{{$data->caption}}</p>
              </div>
              @endforeach

            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-5" >
              <div class="owl-carousel imigration-testimonial">

                @foreach ($immitestimonial as $data)
                <div class="card shadow-2-strong h-100 mt-5 mb-5 m-1">
                  <div class="d-flex justify-content-center" style="margin-top: -43px">
                    <div class="p-1 bg-primary rounded-circle shadow-5-strong d-inline-block">
                      <img src="{{asset('uploads/'.$data->image)}}" alt="" style="border-radius:50%;height: 100px; width:100px;">
                    </div>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">{{$data->subtitle}}</h5>
                    <p class="card-text">{{$data->info}}</p>
                  </div>
                </div>
                @endforeach
              </div>>
            </div>
          </div>
      </section>
    </div>
<!-- end  -->












<section class="section-padding"  data-aos="fade-right"  data-aos-offset="200"  data-aos-delay="120"  data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="false"  data-aos-once="true" >
  <div class="container">
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-12 col-lg-6">
        @foreach($newshed as $data)

        <div class="client-say">
          <h1  class=" text-center text-bold" style="color:#000;font-size:35px;font-family:'Open Sans',sane sarif;font-weight:400 ;padding-bottom: 10px;">{{$data->news_heading}}</h1>
          <p>{{$data->news_caption}}</p>
        </div>  
        @endforeach
        <hr class="hr hr-blurry" />
      </div>
      <div class="col-lg-3"></div>
      <!-- col end  -->
                  @foreach ($news as $data) 
                  <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4" >
                    <div class="card shadow-2-strong" >
                      <div class="bg-image hover-overlay ripple shadow-4-strong rounded mx-3 ripple-surface-light" data-mdb-ripple-color="light" style="margin-top: -15px;">
                        <img  src="{{asset('uploads/'.$data->news_image)}}"  class="img-fluid" alt="" >
                      </div>
                      <div class="card-body text-left">
                        <h5 class="card-title">{{$data->news_title}}</h5>
                        <p class="card-text">{{$data->news_info}}</p>
                        <hr class="hr hr-blurry" />
                        <ul class="list-group list-group-light list-group-small">
                          <li class="list-group-item px-2"><span><i class="fa-solid fa-calendar-plus"></i></span> {{$data->news_date}}</li>
                        </ul>
                        <hr class="hr hr-blurry" />
                        <a href="{{$data->button_url}}" class="btn btn-primary btn-rounded"  >{{$data->news_button}}</a>
                      </div>
                    </div>
                  </div>
                  @endforeach
            </div>
      </div>
</section>








<!-- latest news area end here  -->
  <!-- Start your project here-->
  <div id="" class=" bg-super-light" >
    <div>
      <div  class="" style="position: relative;">
        <!---->
        <!---->
        <section  class="container pt-5" data-aos="zoom-in-right" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
          <section class=" text-center text-md-start">
            <div class="py-5 px-md-5 my-lg-5">
              <div class="container">
                <div class="row gx-lg-5 align-items-center">
                  <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="my-4 display-4 fw-bold ls-tight">
                      <span>Are you ready</span>
                      <br>
                      <span class="text-primary">for an adventure?</span>
                    </h1>
                    <div class="d-md-flex flex-row">
                      <!-- Submit button -->
                      <button type="submit" class="btn  btn-primary btn-lg ms-md-2" >Subscribe</button>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="ratio ratio-16x9">
                      <iframe src="https://www.youtube.com/embed/vlDzYIIOYmM" title="YouTube video" class="rounded-4 shadow-4-strong" allowfullscreen=""></iframe>
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


