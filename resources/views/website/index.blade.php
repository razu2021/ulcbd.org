@extends('layouts/master')
@section('content')

<!-- ============= MAIN CONTENT AREA START HERE  ========== -->
<section class="">
  <div id="">
    <div class="">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <div id="slider">
            <div class="owl-carousel main-carousel-index owl-theme main-slider">
              @foreach ($homeBanner as $data)
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
                        <button type="button ripple" class="btn btn-primary bg-success px-4 btn-lg "><a href="{{$data->button_url}}">w{{$data->slider_button}} </a></button>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              {{-- <div class="slider-item">
                <div class="slider-image">
                  <img src="image/bangladsh  cort.jpg" alt="laptop image" class="img-fluid"/>
                </div>
                <div class="overlay-about"></div>
                <div class="slider-text">s
                  <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                      <h1 class="display-1"> <span class="typed1"></span> </h1>
                    </div>
                  </div>
                </div>
                <div class="bottom-text p-2 m-0 ">
                  <h1 class="text-white "><span class="typed4 text-bg-success p-2"></span>Scholership Available up to 70%</h1>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic, architecto!</p>
                </div>
              </div> --}}
          </div>
        </div>
        <!--col end -->
      </div>
    </div>
  </div>
</section>
<!-- slider section end here  -->
  <!-- common section end -->

  <section>
    <div class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="about-title">
              <h1 class="text-center text-uppercase text-dark display-4 pt-4 pb-4">about us </h1>
            </div>
          </div>
          @foreach ($homeabouts as $data)
            
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6"  data-aos="fade-left" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
            <div class="about-image"  >
              <img src="{{asset('uploads/'.$data->about_image)}}" alt="about image " class="img-fluid">
            </div>
          </div>
          <!-- col end  -->
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6" data-aos="fade-right" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
              <div class="about-content "   >
                <h3 class="fw-bold text-muted">{{$data->title1}}</h3>
                <p class="text-muted">{{$data->info1}}</p>
                <h3 class="fw-bold text-muted">{{$data->title2}}</h3>
                <p class="text-muted">{{$data->info2}}</p>
                <h3 class="fw-bold text-muted">{{$data->title3}}</h3>
                <p class="text-muted">{{$data->info3}}</p>
                <br>
                <h1 class="text-muted">{{$data->name1}}</h1>
                <h5 class="text-muted">{{$data->designation1}}</h5>
                <button class="btn  btn-primary btn-block ripple mt-4"><a class="text-white text-uppercase" href="{{$data->button_url}}">{{$data->button}}</a></button>
              </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
</section>

<section class="section-padding">
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        @foreach ($homeabout2 as $data)
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6"  data-aos="fade-left" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
          <div class="about-content "   >
            <h3 class="fw-bold text-muted">{{$data->title1}}</h3>
            <p class="text-muted">{{$data->info1}}</p>
            <h3 class="fw-bold text-muted">{{$data->title2}}</h3>
            <p class="text-muted">{{$data->info2}}</p>
            <h3 class="fw-bold text-muted">{{$data->title3}}</h3>
            <p class="text-muted">{{$data->info3}}</p>
            <br>
            <h1 class="text-muted">{{$data->name1}}</h1>
            <h5 class="text-muted">{{$data->designation1}}</h5>
          </div>
        </div>
        <!-- col end  -->
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6" data-aos="fade-right" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
          <div class="about-image"  >
            <img src="{{asset('uploads/'.$data->about_image)}}" alt="about image " class="img-fluid">
          </div>
        </div>
        <!-- col end  -->
        @endforeach
      </div>
    </div>
  </div>
</section>
      <!-- About Layout End Here -->
      <section class="section-padding" style="background:#e9e9e9;">
        <div class="container mt-5 mb-5" style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
            <div class="row">
                <div class="col-lg-3"></div>
              @foreach ($homeservicehed as $data)
                <div class="col-lg-6 ">
                    <div class="populer-course"  data-aos="zoom-in"  data-aos-offset="200"   data-aos-easing="ease-in-out" data-aos-once="true" >
                        <h2 class="text-center p-2 display-3 ">{{$data->service_heading}}</h2>
                    <p class="text-center pt-2 pb-4 ">{{$data->service_caption}}</p>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-3"></div>
                @foreach ($homeservice as $data)
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="our-course text-center"  data-aos="flip-right"  data-aos-offset="200"   data-aos-easing="ease-in-out" data-aos-once="true" >
                        <img src="{{asset('uploads/'.$data->service_image)}}" alt="images here " class="img-fluid">
                        <h3 class=" p-1 text-center">{{$data->service_title}} </h3>
                        <h6 class=" p-1 text-center">{{$data->service_subtitle}} </h6>
                        <p class="text-center justify-content-center"> {{$data->service_info}}</p>
                      <button class="btn btn-success m-3"><a href="{{$data->button_url}}">{{$data->service_button}}</a></button>
                      </div>
                </div>
                @endforeach
        </div>
        </div>
    </section>
    <!-- service section end here   -->
   <!--Main Navigation-->
   <header class="section-padding mt-4"  >
    <style>
      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }
      .navbar .nav-link {
        color: #fff !important;
      }
    </style>
    <!-- Background image -->
    @foreach ($Abouthistory as $data)
    <div id="intro" class="bg-image  shadow-1-strong" style="height: 300px; width: 100%;">
      
        <img class="h-100" src="{{asset('uploads/'.$data->image)}}" />
    
      <div class="mask"     style="
      background: linear-gradient(
        45deg,
        rgba(29, 236, 197, 0.7),
        rgba(91, 14, 214, 0.7) 100%
      );
    ">
        <div class="container d-flex align-items-center justify-content-center text-center h-100" data-aos="zoom-in" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
          <div class="text-white ">
            <h1 class="mb-3 text-white">{{$data->heading}}</h1>
            <h3 class="mb-3 text-white">{{$data->title}}</h3>
            <h6 class="mb-3 text-white">{{$data->subtitle}}</h6>
            <p class="text-white">{{$data->caption}}</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </header>
  <!--Main Navigation-->


  <section  class="container pt-5">
    <section class="mb-10">
      <style>
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
        @foreach ($companyfounded as $data)
        <div class="card mb-3"  data-aos="zoom-out" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
          <div class="row g-0 d-flex align-items-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-cl-6 col-xxl-6 d-lg-flex">
              <img src="{{asset('uploads/'.$data->image)}}" alt="Trendy Pants and Shoes" class="" style="height: 300px;">
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
              <div class="card-body px-4 py-5 px-md-5">
                <h2 class="fw-bold" autocompleted="">
                  <h3 class="title-medium-dark size-xl" style="font-family: Roboto, sans-serif; line-height: 1.5; color: rgb(51, 51, 51); margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 24px; text-transform: capitalize;">{{$data->title}}</h3>
                </h2>
                <p class="text-uppercase text-danger fw-bold mb-4">
                  <i class="fas fa-fire me-2" ></i>
                  <span>{{$data->subtitle}}</span>
                </p>
                <p class="text-muted mb-4">{{$data->caption}}</p>
                <p class="mb-0"></p>
              </div>
            </div>
            @endforeach
          <!-- col end  -->
          <div class="col-12">
            <div class="slider-years">
              <div class="client-logos">
                <div class="logo-outer">
                    <ul id="logo-slider">
                      <li><section>2001</section></li>
                        <li>2002</li>
                        <li>2003</li>
                        <li>2004</li>
                        <li>2005</li>
                        <li>2006</li>
                        <li>2007</li>
                        <li>2008</li>
                        <li>2009</li>
                        <li>2010</li>                  
                        <li>2011</li>                  
                        <li>2012</li>                  
                        <li>2013</li>                  
                        <li>2014</li>                  
                        <li>2015</li>                  
                    </ul>
                </div>
            </div>       
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
<!-- company foundded area end here  -->
<div class="section-padding " style="background:#282E3F">
  <div class="container">
    <div class="row">
      @foreach ($whychoosehed as $data)
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        <div class="why-choose-us text-center p-4 " >
          <h1 class="text-white p-3"> <span style="color: rgb(240, 140, 9);">{{$data->choose_heading}}</h1>
          <p class="text-white text-center p-3">{{$data->choose_caption}}</p>
        </div>
      </div>
      @endforeach
      @foreach ($whychoose as $data)
      <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
        <div class="why-choose mt-4">
          <div class="card  " style="background-color:#ffffff;">
            <div class="card-header"> <span style="color: rgb(240, 140, 9); font-size: 30px; font-weight: bolder;">{{$data->news_count}} </span>  {{$data->news_title}}</div>
            <div class="card-body">
              <p class="card-text">
                {{$data->choose_info}}
              </p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
<!-- choose section end here  -->
<!-- our client say  -->
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



<section >
  <div>
    <div class="" >
      <section  class="container pt-5" data-aos="zoom-out" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
        <section class="mb-10 text-center">
          <h2 class="fw-bold mb-10">
            <span>Meet the</span>
            <u class="text-primary">team</u>
          </h2>
          <div class="row ">
            @foreach ($teammember as $data)
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
              <div class="card shadow-2-strong h-100">
                <div class="d-flex justify-content-center" style="margin-top: -75px ; padding:20px 120px">
                  <img src="{{asset('uploads/'.$data->image)}}" class="rounded-circle shadow-5-strong" alt="" style="width: 150px; height: 150px;">
                </div>
                <div class="card-body text-center">
                  <h5 class="fw-bold text-center">{{$data->name}}</h5>
                  <p class="text-muted text-center">{{$data->designation}}</p>
                  <ul class="list-unstyled mb-0">
                    <a href="{{$data->facebook_url}}" class="px-1" >
                      <i class="fab fa-facebook" ></i>
                    </a>
                    <a href="{{$data->twitter_url}}" class="px-1" >
                      <i class="fab fa-twitter" ></i>
                    </a>
                    <a href="{{$data->linkedin_url}}" class="px-1" >
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </section>
      </section>
      <!---->
    </div>
  </div>
</section>
<!-- about section our team area end her  -->

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
<!-- study abroad end here this  -->


<section class="section-padding" data-aos="zoom-out" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center" >
  <div class="container">
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        @foreach ( $AboutourAgencyshed as $data)
            <div class="populer-course">
                <h2 class="text-center p-2">{{$data->heading}}</h2>
            <p class="text-center pt-2 pb-4">{{$data->caption}}</p>
            </div>
        </div>
        @endforeach
      <div class="col-lg-3"></div>
        <div class="col-12">
          <div class="owl-carousel ourabout-client-slider m-2">
            @foreach ($AboutourAgencys as $data)
            <div class="all-team-members ">
              <img src="{{asset('uploads/'.$data->image)}}" alt="profile" class="img-fluid">
              <div class="team-info">
                  <h1>{{$data->name}}</h1>
                  <h6>{{$data->designation}}</h6>
                  <p>{{$data->info}}</p>
                  <div class="teams-social">
                    <ul>
                      <a href="{{$data->facebook_url}}">
                        <button type="button" class="btn btn-white btn-floating mx-1">
                          <i class="fab fa-facebook-f"></i>
                        </button>
                      </a>
                      <a href="{{$data->twitter_url}}">
                        <button type="button" class="btn btn-white btn-floating mx-1">
                          <i class="fab fa-twitter"></i>
                        </button>
                      </a>
                      <a href="{{$data->linkedin_url}}">
                        <button type="button" class="btn btn-white btn-floating mx-1">
                          <i class="fab fa-linkedin"></i>
                        </button>
                      </a>
                      <a href="{{$data->instagram_url}}">
                      <button type="button" class="btn btn-white btn-floating mx-1">
                        <i class="fab fa-instagram"></i>
                      </button>
                      </a>
                    </ul>
                  </div>
              </div>
          </div>
          @endforeach
          <!-- slider end herer -->
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- tem end  -->

<div id="" style="
    background-image: url('image/banner7.jpg');
    background-position: center;
    background-attachment: scroll;
    background-repeat: no-repeat;
    background-size: cover;">

      <section  class="container mt-5">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-5">
              <div class="immi-testimonial-title text-center ">
                @foreach ($hometesthed as $data)
                <h1 class="text-center pt-4 display-5 text-bold" style="color: #fff;">{{$data->heading}}</h1>
                <p class="text-center pt-4 text-white">{{$data->title}}</p>
              </div>
              @endforeach

            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-5" >
              <div class="owl-carousel imigration-testimonial">

                @foreach ($hometest as $data)
                <div class="card shadow-2-strong h-100 mt-5 mb-5 m-1">
                  <div class="d-flex justify-content-center" style="margin-top: -43px">
                    <div class="p-1 bg-primary rounded-circle shadow-5-strong d-inline-block">
                      <img src="{{asset('uploads/'.$data->image)}}" alt="" style="border-radius:50%;height: 100px; width:100px;">
                    </div>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">{{$data->name}}</h5>
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

<!-- study abroad end here this  -->
<section class="section-padding" data-aos="zoom-out" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        @foreach ( $Attorenyhed as $data)
            <div class="populer-course">
              <h2 class="text-center p-2">{{$data->heading}}</h2>
            <p class="text-center pt-2 pb-4">{{$data->caption}}</p>
            </div>
        </div>
        @endforeach
      <div class="col-lg-3"></div>
        <div class="col-12">
          <div class="owl-carousel ourabout-client-slider m-2">
            @foreach ($Attoreny as $data)
            <div class="all-team-members ">
              <img src="{{asset('uploads/'.$data->image)}}" alt="profile" class="img-fluid">
              <div class="team-info">
                  <h1>{{$data->name}}</h1>
                  <h6>{{$data->designation}}</h6>
                  <p>{{$data->info}}</p>
                  <div class="teams-social">
                    <ul>
                      <a href="{{$data->facebook_url}}">
                        <button type="button" class="btn btn-white btn-floating mx-1">
                          <i class="fab fa-facebook-f"></i>
                        </button>
                      </a>
                      <a href="{{$data->twitter_url}}">
                        <button type="button" class="btn btn-white btn-floating mx-1">
                          <i class="fab fa-twitter"></i>
                        </button>
                      </a>
                      <a href="{{$data->linkedin_url}}">
                        <button type="button" class="btn btn-white btn-floating mx-1">
                          <i class="fab fa-linkedin"></i>
                        </button>
                      </a>
                      <a href="{{$data->instagram_url}}">
                      <button type="button" class="btn btn-white btn-floating mx-1">
                        <i class="fab fa-instagram"></i>
                      </button>
                      </a>
                    </ul>
                  </div>
              </div>
          </div>
          @endforeach
        </div>
        </div>
      </div>
    </div>
</section>



<!-- our sugested country start  -->
<div id="" class="">
      <section  class="container pt-3" >
      <div class="col-12 col-md-6 offset-md-3 text-center pt-3 pb-3">
        @foreach ($OurChossehed as $data)
        <div class="your-choose jumbotron jumbotron-fluid">
          <h1 class="text-center text-dark display-5">{{$data->heading}}</h1>
          <p class="text-center text-dark">{{$data->caption}}</p>
        </div>
        @endforeach

      </div>
        <section class=" text-center text-md-start">
          <style>
            .rounded-t-5 {
              border-top-left-radius: 0.5rem;
              border-top-right-radius: 0.5rem;
            }

            @media (min-width: 768px) {
              .rounded-tr-md-0 {
                border-top-right-radius: 0;
              }

              .rounded-bl-md-5 {
                border-bottom-left-radius: 0.5rem;
              }
            }
          </style>
          @foreach ($OurChosse as $data)
            
          <div class="card mb-3"  data-aos="flip-down"  data-aos-offset="200"   data-aos-easing="ease-in-out" data-aos-once="true">
            <div class="row g-0 d-flex align-items-center">
              <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">
                <img src="{{asset('uploads/'.$data->image)}}" alt="university image" class="w-100 rounded-t-5 rounded-tr-md-0 rounded-bl-md-5"  >
              </div>
              <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                <div class="card-body py-5 px-md-5">
                  <h2 class="fw-bold mb-4">
                    <span class="text-danger me-2">"{{$data->title}}"</span>
                  </h2>
                  <h6 class="fw-bold mb-4">
                    <span class="text-danger me-2">"{{$data->subtitle}}"</span>
                  </h6>
                  <p class="text-muted mb-4">{{$data->info}}</p>
                  <a class="text-success" href="{{$data->button_url}}">{{$data->button}}</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </section>
      </section>

</div>

  <!-- asked your qusion  end -->
  <div style="background:#2B3044">
        <section  class="container pt-5" >
          <section class="mb-10">
            <h2 class="fw-bold mb-5 text-center" style="font-size: 30px;color: #fff;">QUESTIONS & ANSWER  </h2>
            <div class="row gx-lg-5 align-items-center mb-5">
              <div class="col-12 col-sm-12  col-md-12 col-lg-6 c0l-xl-6 col-xxl-6"  data-aos="flip-down"  data-aos-offset="200"  data-aos-delay="120"  data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="false"  data-aos-once="true" >
              <div class="your-qusion 4 bg-white p-4 mb-4">
                

                <form method="post" enctype="multipart/form-data" action="{{url('dashboard/website/OurClientsQuesion/insert')}}">
                  @csrf
                  <!-- Name input -->
                  <div class="form-outline mb-4 bg-white">
                    <input type="text" id="form4Example1" name="name" class="form-control" >
                  
                    <label class="form-label " for="form4Example1" style="margin-left: 0px;">Name</label>
                    <div class="form-notch">
                      <div class="form-notch-leading" style="width: 9px;"></div>
                      <div class="form-notch-middle" style="width: 42.4px;"></div>
                      <div class="form-notch-trailing"></div>
                    </div>
                  </div>
                  <!-- Name phone -->
                  <div class="form-outline mb-4">
                    <input type="tel" id="form4Example1" class="form-control" name="phone">
                   
                    <label class="form-label" for="form4Example1" style="margin-left: 0px;">phone</label>
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
                  <!-- Email subject -->
                  <div class="form-outline mb-4 ">
                    <input type="text" id="form4Example2" class="form-control" name="subject" >

                    <label class="form-label" for="form4Example2" style="margin-left: 0px;">Writte  a subject </label>
                    <div class="form-notch">
                      <div class="form-notch-leading" style="width: 9px;"></div>
                      <div class="form-notch-middle" style="width: 88.8px;"></div>
                      <div class="form-notch-trailing"></div>
                    </div>
                  </div>
                  <!-- Message input -->
                  <div class="form-outline mb-4">
                    <textarea class="form-control" id="form4Example3" rows="4" name="client_quesion" ></textarea>
                   
                    <label class="form-label" for="form4Example3" style="margin-left: 0px;">Message</label>
                    <div class="form-notch">
                      <div class="form-notch-leading" style="width: 9px;"></div>
                      <div class="form-notch-middle" style="width: 60px;"></div>
                      <div class="form-notch-trailing"></div>
                    </div>
                  </div>
                  <!-- Submit button -->
                  <button type="submit" class="btn   btn-primary btn-block mb-4" >submit</button>
                </form>



              </div>
              </div>
              <!-- form end  -->
              <div class="col-12 col-sm-12  col-md-12 col-lg-6 c0l-xl-6 col-xxl-6"  data-aos="flip-down"  data-aos-offset="200"  data-aos-delay="120"  data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="false"  data-aos-once="true" >
                <section  class="section-padding  " style="
                background-image: url('image/banner7.jpg');
                background-position: center;
                background-attachment: scroll;
                background-repeat: no-repeat;
                background-size: cover;">
                  <div class="container">
                    <div class="row">
                      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="more-service-title text-center">
                          <h3 class="text-center text-uppercase pb-3  " style="color:rgb(35, 34, 36);font-weight: bolder;">QUESTIONS & ANSWER</h3>
                        </div>
                        <hr class="hr hr-blurry" />
                      </div>
                      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" >
                          <div class="more-services " style="border-radius: 40px;">
                            <div class="accordion accordion-flush" id="accordionFlushExample" >

                              @foreach ($Clientsqsn as $data)   
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <span class="ac-heading">{{$data->client_quesion}}</span>
                                  </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body"><p class="ac-info"><a href="#" style="color: rgb(39, 52, 233);">{{$data->name}} </a> {{$data->ansqwer}}</p></div>
                                </div>
                              </div>
                              @endforeach
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </section>
        </section>
      </div>


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
@endsection