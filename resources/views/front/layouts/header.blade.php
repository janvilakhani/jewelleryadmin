<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- Bootstrap Hear -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!-- CSS Here -->
  <link rel="stylesheet" href="{{asset('front/assets/css/animate.min.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/css/slicknav.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/css/fontawsome.min.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/fonts/font/flaticon.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/css/meanmenu.min.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/css/owl.carousel.min.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/css/nice-select.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/css/barfiller.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/css/magnific-popup.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/css/odometer-theme-default.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/css/responsive.css')}}" />
  <title>Kankavati Gold</title>
  <link rel="icon" type="image/png" href="{{asset('front/assets/images/Icon_01.png')}}" />
</head>

<body>
  <!-- Header Start -->
  <!-- <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="preloader-circle"></div>
          <div class="preloader-img pere-text">
            <img src="assets/img/logo/loder.png" alt="" />
          </div>
        </div>
      </div>
    </div> -->
  <header>
    <div class="header-area all-mg">
      <div class="main-header header-sticky">
        <div class="container-fluid">
          <div class="menu-wrapper d-flex align-items-center justify-content-between">
            <div class="header-left d-flex align-items-center">
              <!-- Logo -->
              <div class="logo">
                <a href="index.html">
                  <img src="{{asset('front/assets/images/Logo.png')}}" alt="" /></a>
              </div>
              <!-- Main-menu -->
              <div class="main-menu d-none d-lg-block">
                <nav>
                  <ul id="navigation">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{route('front.about')}}">About</a></li>
                    <li><a href="{{route('front.contact')}}">Contact</a></li>
                  </ul>
                </nav>
              </div>
            </div>

            <div class="header-right1 d-flex align-items-center">
              <!-- Social -->
              <div class="header-social d-none d-md-block">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
              </div>
            </div>
            <!-- Mobile Menu -->
            <div class="col-12">
              <div class="mobile_menu d-block d-lg-none"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
