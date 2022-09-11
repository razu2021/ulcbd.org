
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
              @foreach ($AboutBanner as $data)
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




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
          @foreach ($aboutabout as $data)
            
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
          @foreach ($aboutabout2 as $data)
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
    <!-- Background image -->
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


<!-- our client say  -->
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
            @foreach ($AboutTeams as $data)
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

<section class="py-4"  style="background: #2B3044">
  <div class="container p-4">
      <div class="row">
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
<!-- our count end here  -->



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

<section  class="container pt-5" data-aos="zoom-out" data-aos-offset="200"  data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"  data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
  <section class="">
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
      @foreach ($aboutmore as $data)
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

  </section>
</section>

@endsection




 