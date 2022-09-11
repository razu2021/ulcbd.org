@extends('layouts/master')
@section('content')

<!-- Carousel wrapper -->
<div id="" class="">
  <div>
    <div  class="">
      <section  class="overflow-hidden pt-0">
        <section class="mb-2 overflow-hidden">
          @foreach ($blogbanner as $data )
          @endforeach
          <div class="px-4 py-5 px-md-5 text-center bg-image ripple" style="background-image: url('{{asset('uploads/'.$data->slider_image)}}'); height: 400px; background-size: cover; background-position: 50% 50%;">
            <div class="mask" style="background-color: rgba(8, 8, 8, 0.80)">
              <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-lg-10">
                    <div class="text-white pb-5">
                      <h4 class=" px-5 display-5 fw-bold ls-tight text-white">
                         {{$data->slider_title}}
                      </h4>
                      <h1 class="px-5 display-2 fw-bold ls-tight text-white">
                         {{$data->slider_heading}}
                      </h1>
                      <a class="btn btn-primary btn-lg btn-rounded py-2 px-5 mb-2 mb-md-0 me-md-2 mt-2" href="{{url('/'.$data->button_url)}}" role="button"  >{{$data->slider_button}}</a>
                    </div>
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
<!-- banner end here  -->

<section class="section-padding">
  <div class="container">
      <div class="row">
          <div class="blog-post">
              <div id="" class="">
                  <div>
                    <div  class="" style="position: relative;">
                      <section  class="container ">
                        <section class="mb-2">
                          <style>
                            @media (min-width: 992px) {
                              .cascading-right {
                                margin-right: -50px;
                              }
                              .rotate-lg-6 {
                                transform: rotate(6deg);
                              }
                            }
                          </style>
                          @foreach ($blogabout as $data) 
                          <div class="container">
                            <div class="row g-0 align-items-center">
                              <div class="col-lg-6  mb-lg-0">
                                <div class="card cascading-right" style=" background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px); z-index: 1; ">
                                  <div class="card-body  shadow-5">
                                    <h2 class="fw-bold">
                                      <span class="text-primary">{{$data->title}} </span>
                                    </h2>
                                    <p class="fw-bold">{{$data->subtitle}} </p>
                                    <p class="text-muted mb-4">{{$data->caption}}</p>
                                    <p class="text-muted">{{$data->info}}</p>
                                    <ul class="list-unstyled d-flex justify-content-center justify-content-md-start mb-0">
                                      <li>
                                        <i class="fas fa-star fa-sm text-primary"></i>
                                      </li>
                                      <li>
                                        <i class="fas fa-star fa-sm text-primary"></i>
                                      </li>
                                      <li>
                                        <i class="fas fa-star fa-sm text-primary"></i>
                                      </li>
                                      <li>
                                        <i class="fas fa-star fa-sm text-primary"></i>
                                      </li>
                                      <li>
                                        <i class="fas fa-star fa-sm text-primary"></i>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6  mb-lg-0">
                                <img src="{{asset('uploads/'.$data->image)}}" class="w-100 rounded-4 shadow-4 rotate-lg-6 img-fluid" alt="profile">
                              </div>
                            </div>
                          </div>
                          @endforeach
                        </section>
                      </section>
                    </div>
                  </div>
                </div>
          </div>
      </div>
  </div>
</section>
<section>
  <div class="container">
      <div class="row">
        <h1>blog</h1>
        @foreach ($updateblog as $data)
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-2">
              <div class="single-blog-area">
                  <div class="card blog1 m-3 p-2">
                      <div class="bg-image hover-overlay ripple" >
                        <img src="{{asset('uploads/'.$data->image)}}" class="img-fluid"/>
                        <a href="#!">
                        </a>
                      </div>
                      <div class="card-body blog-con text-center">
                          <span>{{$data->created_at->format('d-m-y')}}</span>
                        <h5 class="card-title">{{$data->title}}</h5>
                        <p class="card-text">{{$data->caption}}</p>
                        <a href="{{url('/'.$data->button_url)}}" class="btn btn-primary">{{$data->button}} </a>
                      </div>
                    </div>
              </div>
          </div>
          @endforeach  
      </div>
  </div>
</section>



<div id="" class=" section-padding " style="background: #2B3044;">
  <div>
    <div  class="" >
      <section  class="container pt-4" style="padding:20px 2px ;box-shadow: rgba(255, 255, 255, 0.25) 0px 50px 100px -20px, rgba(255, 255, 255, 0.13) 0px 30px 60px -30px, rgba(255, 255, 255, 0.35) 0px -2px 6px 0px inset;">
        <section class=" text-center">
          @foreach ($recenthead as $data)
          <h2 class="fw-bold mb-7 text-center text-white display-4">{{$data->heading}}</h2>
          @endforeach
          <div class="row gx-lg-5">
            @foreach ($recent as $data)
            <div class="col-lg-4 col-md-12 mb-6 mb-lg-0">
              <div class="card shadow-2-strong">
                <div class="bg-image hover-overlay ripple shadow-4-strong rounded mx-3" data-mdb-ripple-color="light" style="margin-top: -15px">
                  <img src="{{asset('uploads/'.$data->image)}}" class="img-fluid" alt="photo"  >
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{$data->subtitle}}</h5>
                  <p class="card-text">{{$data->caption}}</p>
                  <a href="{{url('/'.$data->button_url)}}" class="btn   btn-primary btn-rounded"  >{{$data->button}}</a>
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

<div id="" class="">
  <div>
    <div  class="" >
      <section  class="container pt-3" >
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
          @foreach ($letestpro as $data)
          <div class="card mb-3">
            <div class="row g-0 d-flex align-items-center">
              <div class="col-md-4 d-none d-md-flex">
                <img src="{{asset('uploads/'.$data->image)}}" alt="Trendy Pants and Shoes" class="w-100 rounded-t-5 rounded-tr-md-0 rounded-bl-md-5"  >
              </div>
              <div class="col-md-8">
                <div class="card-body py-5 px-md-5">
                  <h2 class="fw-bold mb-4">
                    <span class="text-danger me-2">{{$data->title}}</span>
                    <span>{{$data->subtitle}}</span>
                  </h2>
                  <p class="text-muted mb-4">{{$data->info}}</p>
                  <a class="btn btn-outline-success btn-rounded btn-lg" href="{{$data->button_url}}" role="button">{{$data->button}}</a>
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

<div id="" class="">
  <div>
    <div  class="" style="position: relative;">
      <section  class="container pt-5">
        <section class="mb-10 position-relative">
          <style>
            @media (min-width: 768px) {
              #cta-img-nml-50 {
                margin-left: 50px;
              }
            }
          </style>
          @foreach ($upcomingevent as $data) 
          <div class="row gx-0">
            <div class="col-md-5 mb-4 mb-md-0">
              <div class="d-flex py-md-5">
                <img src="{{asset('uploads/'.$data->image)}}" class="w-100 rounded-5 shadow-3-strong" id="cta-img-nml-50" style="z-index: 10" alt="image" >
              </div>
            </div>
            <div class="col-md-7 mb-4 mb-md-0">
              <div class="bg-primary h-100 rounded-6 p-4 ps-md-5 text-white d-flex align-items-center">
                <div class="ps-md-5">
                  <h2 class="fw-bold mb-4">{{$data->title}}</h2>
                  <h5 class="fw-bold mb-4">{{$data->subtitle}}</h5>
                  <p class="mb-4">{{$data->caption}}</p>
                  <p class="mb-4">{{$data->info}}</p>
                  <button type="button" class="btn btn-white  btn-outline-white btn-rounded btn-lg" ><a class="text-danger" href="{{$data->button_url}}">{{$data->button}}</a><button>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </section>
      </section>
    </div>
  <!-- end -->












    <div  class="" style="position: relative;">
      <div id="" class=" section-padding " style="background: #2B3044;">
          <div>
            <div  class="" >

              <section  class="container pt-4">
                <section class=" text-center">
                  <h2 class="fw-bold mb-7 text-center text-white display-4">Projects we are proud of</h2>
                  <div class="row gx-lg-5">
                    @foreach ($ourbigproject as $data) 
                    <div class="col-lg-4 col-md-12 mb-6 mb-lg-0">
                      <div class="card shadow-2-strong">
                        <div class="bg-image hover-overlay ripple shadow-4-strong rounded mx-3" data-mdb-ripple-color="light" style="margin-top: -15px">
                          <img src="{{asset('uploads/'.$data->image)}}" class="img-fluid" alt=""  >
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">{{$data->title}}</h4>
                          <h6 class="card-title">{{$data->subtitle}}</h6>
                          <p class="card-text">{{$data->info}}</p>
                          <p class="card-text">{{$data->caption}}</p>
                          <a href="{{$data->button_url}}" class="btn   btn-primary btn-rounded"  >{{$data->button}}</a>
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
        </div>
      <!-- blog 2 end  -->

      <section  class="container pt-5">
        <section class="mb-10">
          <h2 class="fw-bold mb-5 text-center">Frequently asked questions</h2>
          <div class="row">
            @foreach ($freeaskqsn as $data)
            <div class="col-lg-4 col-md-12 mb-5">
              <p class="fw-bold">{{$data->title}}</p>
              <p class="text-muted">{{$data->caption}}</p>
              <br>
              <p class="fw-bold">{{$data->subtitle}}</p>
              <p class="text-muted">{{$data->info}}</p>
            </div>
            @endforeach
          </div>
        </section>
      </section>
      <!---->
    </div>
  </div>
</div>










<!-- our clients review start -->
<div class="container">
<div class="row">
  <div class="clients-review text-center ">
      <h3 class="text-center text-capitalize pt-4 pb-4">Our Clients Review</h3>
  </div>
  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
    <section class="border-bottom mb-3">
      <p class="text-center"><strong>Comments</strong></p>
      <div class="row mb-4">
        <div class="col-2">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(24).jpg"
            class="img-fluid shadow-1-strong rounded-5" alt="" />
        </div>

        <div class="col-10">
          <p class="mb-2"><strong>Marta Dolores</strong></p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
            inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
            Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
          </p>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-2">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(25).jpg"
            class="img-fluid shadow-1-strong rounded-5" alt="" />
        </div>
        <div class="col-10">
          <p class="mb-2"><strong>Valeria Groove</strong></p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
            inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
            Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
          </p>
        </div>
      </div>
      <!-- Comment -->
      <div class="row mb-4">
        <div class="col-2">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg"
            class="img-fluid shadow-1-strong rounded-5" alt="" />
        </div>
        <div class="col-10">
          <p class="mb-2"><strong>Antonia Velez</strong></p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
            inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
            Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
          </p>
        </div>
      </div>
    </section>
  </div>
  <!-- col end  -->
  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
    <section class="border-bottom mb-3">
      <p class="text-center"><strong>Comments</strong></p>
      <div class="row mb-4">
        <div class="col-2">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(24).jpg"
            class="img-fluid shadow-1-strong rounded-5" alt="" />
        </div>

        <div class="col-10">
          <p class="mb-2"><strong>Marta Dolores</strong></p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
            inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
            Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
          </p>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-2">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(25).jpg"
            class="img-fluid shadow-1-strong rounded-5" alt="" />
        </div>
        <div class="col-10">
          <p class="mb-2"><strong>Valeria Groove</strong></p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
            inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
            Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
          </p>
        </div>
      </div>
      <!-- Comment -->
      <div class="row mb-4">
        <div class="col-2">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg"
            class="img-fluid shadow-1-strong rounded-5" alt="" />
        </div>
        <div class="col-10">
          <p class="mb-2"><strong>Antonia Velez</strong></p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
            inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
            Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
          </p>
        </div>
      </div>
    </section>
  </div>
  <!-- col end  -->
</div>
<!--Grid row-->
</div>
<!-- our clients review end -->


@endsection


