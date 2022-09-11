@extends('layouts/master')
@section('content')


<section class="">
  <div id="">
    <div class="">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <div id="slider">
            <div class="owl-carousel main-carousel owl-theme main-slider">
              @foreach ($AbroadBanner as $data)
              <div class="slider-item">
                <div class="slider-image">
                  <img src="{{asset('uploads/'.$data->slider_image)}}" alt="laptop image" class="img-fluid"/>
                </div>
                <div class="caption d-flex align-items-center right-align">
                  <div class="container">
                     <div class="row">
                       <div class="col-md-9 col-lg-7">
                         <div class="caption-txt white-color slider-text-abroad" >
                          <!-- Title -->
                            <h3 class="display-6 text-"   >{{$data->slider_title}}</h3>
                            <h2 class="display-2 text-"   >{{$data->slider_heading}}</h2>									      	
                            <!-- Text -->
                            <h5 class="h4-md"   >{{$data->slider_caption}}</h4>
                        </div>	
                       </div>
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

|



<!-- slider area end here  -->
<section>
  <div class="container mt-5 mb-5" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;" 
  data-aos="zoom-out-right" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center"
  >
      <div class="row">
          <div class="col-lg-3"></div>
        @foreach ($AbroadDegreehed as $data)
          <div class="col-lg-6 ">
              <div class="populer-course">
                  <h2 class="text-center p-2">{{$data->choose_heading}} </h2>
              <p class="text-center pt-2 pb-4">{{$data->choose_caption}}</p>
              </div>
          </div>
          @endforeach

          <div class="col-lg-3"></div>

          @foreach ( $AbroadDegree as $data )
          <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3"   data-aos-offset="200">
              <div class="our-course text-center">
                  <h3 class=" p-1 text-center">{{$data->news_title}} </h3>
                  <p class="text-center justify-content-center"> {{$data->choose_info}}</p>
              </div>
          </div>
          @endforeach
        
  </div>
</section>
<!-- most populer degress end here  -->


<section class="section-padding">
  <div class="container mt-5 mb-5" data-aos="zoom-out-left" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
      <div class="row">
          <div class="col-lg-3"></div>
        @foreach ($AbroadCareerhed as  $data)
          <div class="col-lg-6 "    data-aos-offset="200">
              <div class="populer-course">
                  <h2 class="text-center p-2">{{$data->heading}}</h2>
              <p class="text-center pt-2 pb-4">{{$data->caption}}</p>
              </div>
          </div>
          @endforeach
          <div class="col-lg-3"></div>
          @foreach ($AbroadCareer as $data)
          <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3"    data-aos-offset="200">
              <div class="our-course text-center">
                  <img src="{{asset('uploads/'.$data->image)}}" alt="images here ">
                  <h3 class=" p-1 text-center">{{$data->title}} </h3>
                  <h6 class=" p-1 text-center">{{$data->subtitle}} </h6>
                  <p class="text-center justify-content-center">{{$data->info}}</p>
              </div>
          </div>
          @endforeach
  </div>
</section>
<!-- most populer careers end here  -->



<section class="section-padding bg-light">
  <div class="container" style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;"
  data-aos="zoom-out-up" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center"
  >
      <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6 "    data-aos-offset="200">
              @foreach ($AbroadCoursehed as $data) 
              <div class="populer-course">
              <h2 class="text-center p-2">{{$data->heading}}</h2>
              <p class="text-center pt-2 pb-4">{{$data->caption}}</p>
              </div>
              @endforeach

          </div>
          <div class="col-lg-3"></div>
          <div class="col-12 m-3"    data-aos-offset="200">
              <div class="most-populer-course-slider">
                  <div class="owl-carousel most-populer-course-sliders ">
                    @foreach ($AbroadCourse as $data)
                      <div class="our-course text-center m-2">
                          <img src="{{asset('uploads/'.$data->image)}}" alt="images here ">
                          <h3 class=" p-1 text-center">{{$data->title}} </h3>
                          <h3 class=" p-1 text-center">{{$data->subtitle}} </h3>
                          <p class="text-center justify-content-center">{{$data->info}}</p>
                      </div>
                      @endforeach
                    </div>
              </div>
          </div>
      </div>
  </div>
</section>


<!-- most populer course end here  -->



<section class="section-padding">
  <div class="container" data-aos="zoom-in" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
    <div class="row">

      @foreach ($AbroadPracticehed as $data)
      <div class="consul-title">
        <h4 class="display-3 text-dark p-2">{{$data->heading}}</h4>
        <p class="text-dark pb-4" style="font-size: 18px; font-family:'Open Sans';">{{$data->title}}</p>
      </div>
      @endforeach

    
      <div class="col--12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3"    data-aos-offset="200">
        <div class="immi-country">
          <ul class="list-group list-group-light">
            <li class="list-group-item px-3 border-0  m-1 bg-success text-white" > {{$data->subtitle}}</li>
            @foreach ($AbroadPractice as $data)
            <li class="list-group-item px-3 border-0 bg-light  m-1 text-dark" > {{$data->country_name}}</li>
            @endforeach
          </ul>
        </div>
      </div>
   
      <!-- col end  -->
      <div class="col--12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3"    data-aos-offset="200">
        <div class="immi-country">
          <ul class="list-group list-group-light">
            <li class="list-group-item px-3 border-0  m-1 bg-success text-white" >{{$data->subtitle}} </li>
            @foreach ($AbroadPractice as $data)
            <li class="list-group-item px-3 border-0 bg-light m-1" ><a href="#">{{$data->practice_area}} </a> </li>

            @endforeach
          </ul>
        </div>
      </div>
      <!-- col end  -->
      <div class="col--12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3"    data-aos-offset="200">
        <div class="immi-world-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d54239321.456518546!2d-23.51853741506272!3d38.891787686713705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1660641904562!5m2!1sen!2sbd" width="600" height="520" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <!-- col end  -->
    </div>
  </div>
  </section>
  <!-- study abroad  end here  -->
<!-- most populer degress end here  -->




<section class="section-padding">
  <div class="container mt-5 mb-5" style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;"
  data-aos="zoom-out" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center"
  >
      <div class="row">
          <div class="col-lg-3"></div>
          @foreach ($AbroadFinancehed as  $data)
          <div class="col-lg-6 " data-aos-offset="200">
              <div class="populer-course">
              <h2 class="text-center p-2">{{$data->heading}}</h2>
              <p class="text-center pt-2 pb-4">{{$data->caption}}</p>
              </div>
          </div>
          @endforeach
          <div class="col-lg-3"></div>
          @foreach ($AbroadFinance as $data )
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4"    data-aos-offset="200">
              <div class="our-course text-center">
                  <img src="{{asset('uploads/'.$data->image)}}" alt="images here ">
                  <h3 class=" p-1 text-center">{{$data->title}} </h3>
                  <h6 class=" p-1 text-center">{{$data->suntitle}} </h6>
                  <p class="text-center justify-content-center">{{$data->info}}</p>
              </div>
          </div>
          @endforeach
  </div>
  </div>
</section>
<!-- most populer careers end here  -->
  <!-- our client say immigration  -->




  <div id="" >
  <div>
  <div class="bg-info" >
    <section  class="container mt-5"  data-aos="zoom-in" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
        <div class="row">
          <div class="col-12 col-sm-0 col-md-2 col-lg-2 col-xl-2 col-xxl-2 mt-5"></div>
          @foreach ($AbroadTestihed as $data) 
          <div class="col-12 col-sm-0 col-md-2 col-lg-8 col-xl-8 col-xxl-8 mt-5 " >
            <div class="immi-testimonial-title text-center">
              <h1 class="text-center pt-4 display-5 " style="color: #fff;">{{$data->heading}}</h1>
              <p class="text-center pt-4 text-white">{{$data->caption}}</p>
            </div>
          </div>
          @endforeach

          <div class="col-12 col-sm-0 col-md-2 col-lg-2 col-xl-2 col-xxl-2 mt-5"></div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 col-xxl-12 mt-5">
            <div class="owl-carousel imigration-testimonial owl-theme ">
              @foreach ($AbroadTesti as $data)
              <div class="card shadow-2-strong h-100 mt-5 mb-5 m-1">
                <div class="d-flex justify-content-center" style="margin-top: -43px">
                  <div class="p-1 bg-primary rounded-circle shadow-5-strong d-inline-block">
                    <img src="{{asset('uploads/'.$data->image)}}" alt="" style="border-radius:50%;height: 100px; width:100px;">
                  </div>
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{$data->title}}</h5>
                  <p class="card-title">{{$data->created_at}}</p>
                  <p class="card-text">{{$data->info}}</p>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
    </section>
  </div>
</div>
</div>
<!-- End your project here-->


<!-- study abroad start -->
@foreach ($AbroadOffers as $data)
  

<div id="" class=" bg-image" style=
"
background-image: url('{{asset('uploads/'.$data->bgimage)}}');
background-position: center;
background-attachment: scroll;
background-repeat: no-repeat;
background-size: cover;
">
<div class="mask" style="background-color: rgba(50, 68, 114,0.35)"></div>
<div>
  <div  class="" >
    <!---->
    <!---->
    <section  class="container pt-5"  data-aos="fade-right" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
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



@endsection


