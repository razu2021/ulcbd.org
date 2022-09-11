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
              @foreach ($Legalbanner as $data)                
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
              <!--   slider item end -->
            </div>
          </div>
        </div>
        <!--                    col end -->
      </div>
    </div>
  </div>
</section>


  
  <!-- slider area end here  -->
<!-- slider section end here  -->
<div id="" class="">
    <div style="display: none;"></div>
    <div>
      <div  class="" >
        @foreach ($LegalAbout as $data)

        <section  class="container pt-5">
          <section class="">
            <h2 class="fw-bold mb-5 text-center display-4" >About  Law </span> </h2>
            <div class="row gx-lg-5 align-items-center mb-5 flex-lg-row-reverse">
              <div class="col-md-6 mb-4 mb-md-0">
                <div class="bg-image hover-overlay ripple shadow-4-strong rounded-4 mb-4" data-mdb-ripple-color="light">
                    <img src="{{asset('uploads/'.$data->about_image)}}" alt="about" class="img-responsive m-auto mymove">
                </div>
              </div>
              <div class="col-md-6 mb-4 mb-md-0">
                <span class="about-sub-title">{{$data->title1}}</span>
                <h1 class="title-bold-dark mb-40">{{$data->title2}}</h1>
                <h1 class="title-bold-dark mb-40">{{$data->name1}}</h1>
                <p class="text-muted">{{$data->info1}}</p>
                <p class="text-muted">{{$data->info1}}</p>
                <button type="button" class="btn btn-primary m-4 pl-4 pr-4"><a class="text-light" href="{{$data->button_url}}">{{$data->button}}</a> </button>
              </div>
            </div>

          </section>
        </section>
        @endforeach

      </div>
    </div>
  </div>
<!-- about section end here  -->


<!-- our services start  -->
<section class="section-padding">
  <div class="container mt-5 mb-5">
      <div class="row">
          <div class="col-lg-3"></div>          
       @foreach($Legalserviceheder as $data)
          <div class="col-lg-6 ">
              <div class="populer-course">
                  <h2 class="text-center p-2">{{$data->heading}}</h2>
              <p class="text-center pt-2 pb-4">{{$data->caption}}</p>
              </div>
          </div>        
       @endforeach
          <div class="col-lg-3"></div>
          @foreach ($Legalservice as $data)
          <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
              <div class="our-course text-center">
                  <img src="{{asset('uploads/'.$data->image)}}" alt="images here ">
                  <h3 class=" p-1 text-center">{{$data->subtitle}} </h3>
                  <p class="text-center justify-content-center"> {{$data->info}}</p>
                  <button type="button ripple " class="btn btn-success m-2"><a href="{{$data->button_url}}">{{$data->button_url}}</a></button>
              </div>
          </div>
          @endforeach
  </div>
</section>
<!-- most populer careers end here  -->
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



  <section class="section-padding">
    <div class="container">
      <div class="row">
        @foreach ($Legalpracticehed as $data)
        <div class="consul-title text-center">
          <h4 class="display-5 text-dark p-2">{{$data->heading}}</h4>
          <p class="text-dark pb-4 text-center" style="font-size: 18px; font-family:'Open Sans'">{{$data->title}}<p>
        </div>
        @endforeach
        @foreach ($Legalpractice as $data)
        <div class="col--12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
          <div class="practice-area">
            <ul class="list-group list-group-light">
              @foreach ($Legalpractice as $data)
              <li class="list-group-item px-3 border-0  m-1  text-white" ><span  style="font-size:30px; "><i class="fa-solid fa-registered"></i></span> {{$data->practice_name}}</li>
              @endforeach
            </ul>
          </div>
        </div>
        @endforeach
        <div class="col--12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
          <div class="practice-area">
            <ul class="list-group list-group-light">
              @foreach ($Legalpractice as $data) 
              <li class="list-group-item px-3 border-0  m-1  text-white" ><span  style="font-size:30px; "><i class="fa-solid fa-registered"></i></span> {{$data->practice_subject}} </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="col--12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
          <div class="practice-area">
            <ul class="list-group list-group-light">
              <li>{{$data->subtitle}}</li>
              @foreach ($Legalpractice as $data) 
              <li class="list-group-item px-3 border-0  m-1  text-white" ><span  style="font-size:30px; "><i class="fa-solid fa-registered"></i></span>{{$data->practice_area}}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
    </section>
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





<section class="section-padding bg-light">
  <div class="container">
      <div class="row">
          <div class="col-lg-3"></div>
        @foreach ( $Attorenyhed as $data)
          <div class="col-lg-6 ">
              <div class="populer-course">
                  <h2 class="text-center p-2">{{$data->heading}}</h2>
              <p class="text-center pt-2 pb-4">{{$data->caption}}</p>
              </div>
          </div>
          @endforeach

          <div class="col-lg-3"></div>
          <div class="col-12 m-3">
              <div class="most-populer-course-slider">
                  <div class="owl-carousel most-populer-course-sliders ">


                    @foreach ($Attoreny as $data)
                      <div class="our-course text-center m-2">
                          <img src="{{asset('uploads/'.$data->image)}}" alt="images here ">
                          <h3 class=" p-1 text-center">{{$data->name}} </h3>
                          <h6 class="">{{$data->designation}}</h6>
                          <p class="text-center justify-content-center"> {{$data->info}}</p>
                          <!-- social  -->
                          <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                            <div class="container-fluid ">
                              <ul class="navbar-nav ">
                                <!-- Icons -->
                                <li class="nav-item me-3 me-lg-0 ">
                                  <a class="nav-link"  href="{{$data->facebook_url}}"> <span class="#" style="color: #4267B2; font-size:20px;"><i class="fa-brands fa-facebook"></i></span></a>
                                </li>
                                <li class="nav-item me-3 me-lg-0 ">
                                  <a class="nav-link" href="{{$data->twitter_url}}"><span class="#" style="color: #00acee; font-size:20px"><i class="fa-brands fa-square-twitter"></i></span></a>
                                </li>
                                <li class="nav-item me-3 me-lg-0 ">
                                  <a class="nav-link"  href="{{$data->linkedin_url}}"> <span class="#" style="color: #0072b1; font-size:20px"><i class="fa-brands fa-linkedin"></i></span></a>
                                </li>
                              </ul>
                            </div>
                          </nav>
                      </div>
                      @endforeach
                      </div>
                    </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- most populer course end here  -->
@endsection


