@extends('front.main')
@section('content')
<div class="contact ptb-100">
    <div class="container">
      <!-- Details Start -->
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="contact-us">
            <h1>Contact Us</h1>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem odio, temporibus alias illum repellat
              blanditiis voluptates minima adipisci itaque odit deleniti molestias similique sed libero? Provident
              velit
              ut tenetur nemo?
            </p>
          </div>
          <div class="contact-ape">
            <div class="row align-items-center my-4">
              <div class="col-lg-1 col-md-1 col-sm-1">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="col-lg-11 col-md-11 col-sm-11">
                <b>Address</b>
                <p class="ape">123, VAracha Road ,Surat </p>
              </div>
            </div>
            <div class="row align-items-center my-4">
              <div class="col-lg-1 col-md-1 col-sm-1">
                <i class="fa-solid fa-phone"></i>
              </div>
              <div class="col-lg-11 col-md-11 col-sm-11">
                <b>Phone</b>
                <p class="ape">+91 78945 61230</p>
              </div>
            </div>
            <div class="row align-items-center my-4">
              <div class="col-lg-1 col-md-1 col-sm-1">
                <i class="fa-solid fa-envelope"></i>
              </div>
              <div class="col-lg-11 col-md-11 col-sm-11">
                <b>Email</b>
                <p class="ape">Rushabh@yopmail.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img src="{{asset('front/assets/images/Category/1.png')}}" alt="">
        </div>
      </div>
      <!-- Details End -->
    </div>
  </div>
@endsection
