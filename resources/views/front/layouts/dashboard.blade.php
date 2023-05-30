@extends('front.main')
@section('content')
<!-- Hero Session Start  -->
<div class="main-banner main-banner-bg">
    <div class="container-fluid">
      <div class="row align-items-center mt-5">
        <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="banner-text-area mt-5">
            <h6 class="mt-5">WELCOME TO ANWA!</h6>
            <div class="wow fadeInDown" data-wow-duration="3s" data-wow-delay=".2s">
              <h1 class="ani1">
                Looking For Deep Cleaning For Your Home
              </h1>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
              Phasellus hendrerit. nibh nec urna. In nisi neque, aliquet vel,
              dapibus id dolor sit amet.
            </p>
            <a class="default-button" href="category.html"><span>Our Services</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero Session End -->

  <!-- New Arrival Start -->
  <div class="new-arrival all-mg">
    <div class="container-fluid">
      <!-- Section tittle -->
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-10">
          <div class="section-tittle mb-20 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
            <h2>New Arrival</h2>
          </div>
        </div>
      </div>

      <div class="popular-items pt-50">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="single-popular-items text-center wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay=".1s">
                    <div class="popular-img">
                      <img src="{{asset('front/assets/images/Home/new arival/german-silver-pearl-earrings-500x500.webp')}}" alt="" />
                      <div class="img-cap">
                        <span>Glasses</span>
                      </div>
                      <div class="favorit-items">
                        <a href="category.html" class="btn2">Shop Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="single-popular-items text-center wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay=".1s">
                    <div class="popular-img">
                      <img src="{{asset('front/assets/images/Home/new arival/pexels-dima-valkov-3266700.jpg')}}" alt="" />
                      <div class="img-cap">
                        <span>Glasses</span>
                      </div>
                      <div class="favorit-items">
                        <a href="category.html" class="btn2">Shop Now</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="single-popular-items text-center wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay=".4s">
                    <div class="popular-img">
                      <img src="{{asset('front/assets/images/Home/new arival/n1.png')}}" alt="" />
                      <div class="img-cap">
                        <span>Jackets</span>
                      </div>
                      <div class="favorit-items">
                        <a href="category.html" class="btn2">Shop Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="single-popular-items text-center wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay=".6s">
                    <div class="popular-img">
                      <img src="{{asset('front/assets/images/Home/new arival/il_fullxfull.2200656932_k090.jpg')}}" alt="" />
                      <div class="img-cap">
                        <span>Clothes</span>
                      </div>
                      <div class="favorit-items">
                        <a href="category.html" class="btn2">Shop Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 text-center">
              <div class="">
                <video autoplay style="width: 100%;" muted loop>
                  <source src="{{asset('front/assets/images/Home/vidyo/video.mp4')}}" type="video/mp4" />
                </video>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- New Arrival End -->

  <!--Collection Start -->
  <section class="Nn collection section-bg2 section-padding30 section-over1 ml-15 mr-15"
    style="background: url({{asset('front/assets/images/Home/banner/banner2.png')}})">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9">
          <div class="single-question text-center">
            <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">collection houses our
              first-ever</h2>
            <a href="category.html" class="btn2 class=" wow fadeInUp" data-wow-duration="2s"
              data-wow-delay=".4s">About
              Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Collection End -->

  <!-- Portfolio Start -->
  <div class="portfolio shape-bg ptb-100">
    <div class="container">
      <div class="default-section-title">
        <h6>OUR PORTFOLIO</h6>
        <h3>We Provide Best Service</h3>
      </div>
      <div class="section-content">
        <div class="portfolio-slider-area owl-carousel">
          <div class="portfolio-card">
            <img src="{{asset('front/assets/images/Home/silder/d1.png')}}" alt="image">
            <div class="portfolio-text">
              <p>Office Cleaning</p>
              <h4><a href="service-details.html">Commercial Office</a></h4>
            </div>
          </div>
          <div class="portfolio-card">
            <img src="{{asset('front/assets/images/Home/silder/k1.png')}}" alt="image">
            <div class="portfolio-text">
              <p>Industrial Cleaning</p>
              <h4><a href="service-details.html">Manufacturing Floor</a></h4>
            </div>
          </div>
          <div class="portfolio-card">
            <img src="{{asset('front/assets/images/Home/silder/n1.png')}}" alt="image">
            <div class="portfolio-text">
              <p>Garage Cleaning</p>
              <h4><a href="service-details.html">Home Garage</a></h4>
            </div>
          </div>
          <div class="portfolio-card">
            <img src="{{asset('front/assets/images/Home/silder/r1.png')}}" alt="image">
            <div class="portfolio-text">
              <p>Room Cleaning</p>
              <h4><a href="service-details.html">Floor Cleaning</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio End -->

  <!-- Popular Locations Start 01-->
  <div class="popular-back-img">
    <div class="popular-product pt-50 all-mg">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-7 col-sm-12 py-4" style="padding-left: 0px;">
            <div class="single-product mb-50">
              <div class="location-img" style="box-shadow: rgba(255, 255, 255, 0.7) 0px 0px 50px 0px;">
                <img src="{{asset('front/assets/images/Home/pop/14.jpg')}}" alt="" class="">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-7 col-sm-12 py-4 d-flex align-items-center">
            <div class="single-product mb-50 d-flex justify-content-center position-relative w-100">
              <div class="align-content-center align-items-center">
                <div class="location-img text-center">
                  <h1>Lorem, ipsum dolor.</h1>
                  <a href="category.html" class="btn2 mt-3">Read More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-7 col-sm-12 py-4" style="padding-right: 0px;">
            <div class="single-product mb-50">
              <div class="location-img" style="box-shadow: rgba(255, 255, 255, 0.7) 0px 0px 50px 0px;">
                <img src="{{asset('front/assets/images/Home/pop/15.jpg')}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Popular Locations End -->

  <!-- Teem Start -->
  <div class="team bg-f9faff ptb-100">
    <div class="container">
      <div class="default-section-title default-section-title-middle">
        <h6>OUR TEAM</h6>
        <h3>Our Leadership Team</h3>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="team-card">
              <img src="{{asset('front/assets/images/Home/silder/k1.png')}}" alt="image">
              <div class="team-text-area">
                <h4>Sophia Arther</h4>
                <p>Financial Officer</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="team-card">
              <img src="{{asset('front/assets/images/Home/silder/n1.png')}}" alt="image">
              <div class="team-text-area">
                <h4>Michel Gery</h4>
                <p>Customer Officer</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="team-card">
              <img src="{{asset('front/assets/images/Home/silder/r1.png')}}" alt="image">
              <div class="team-text-area">
                <h4>Pery Henry</h4>
                <p>Financial Officer</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="team-card">
              <img src="{{asset('front/assets/images/Home/silder/d1.png')}}" alt="image">
              <div class="team-text-area">
                <h4>Milton Hence</h4>
                <p>Staff Officer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Teem End -->

  <!-- Silder Start -->
  <div class="Slider ptb-100">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="slider-card">
            <div class="card ptb-70">
              <div class="card-body">
                <div class="row justify-content-center">
                  <div class="col-lg-12 d-flex justify-content-center">
                    <img src="{{asset('front/assets/images/Category/1.png')}}" alt="">
                  </div>
                  <div class="col-lg-12">
                    <h1>Rushabh Nada</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla nobis rerum iure hic
                      consectetur. Eveniet, fuga eos earum amet ullam optio magni unde officia quis fugiat vero
                      repudiandae vel possimus!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-card">
            <div class="card ptb-70">
              <div class="card-body">
                <div class="row justify-content-center">
                  <div class="col-lg-12 d-flex justify-content-center">
                    <img src="{{asset('front/assets/images/Category/1.png')}}" alt="">
                  </div>
                  <div class="col-lg-12">
                    <h1>Rushabh Nada</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla nobis rerum iure hic
                      consectetur. Eveniet, fuga eos earum amet ullam optio magni unde officia quis fugiat vero
                      repudiandae vel possimus!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-card">
            <div class="card ptb-70">
              <div class="card-body">
                <div class="row justify-content-center">
                  <div class="col-lg-12 d-flex justify-content-center">
                    <img src="{{asset('front/assets/images/Category/1.png')}}" alt="">
                  </div>
                  <div class="col-lg-12">
                    <h1>Rushabh Nada</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla nobis rerum iure hic
                      consectetur. Eveniet, fuga eos earum amet ullam optio magni unde officia quis fugiat vero
                      repudiandae vel possimus!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>




      </div>
      <!-- <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div> -->
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!-- Silder End -->

@endsection
