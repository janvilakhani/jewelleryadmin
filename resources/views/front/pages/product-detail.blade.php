@extends('front.main')
@section('content')


<div class="category-product pt-70">
    <div class="container">
      <h1>
        Products
      </h1>
    </div>
  </div>
  <!-- Card-1 Start -->

  @foreach ($data as $data )
  <div class="category-product mtb-100">
    <div class="container">
      <div class="card">
        <div class="card-body">
          <div class="row align-items-center card-body-row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="single-product">
                <div class="location-img-left">
                  <div class="location-img">
                    <img src="{{ asset('storage/uploads/product/'.$data->image) }}" alt="" class="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="category-product">
                <div class="categorye-w-left">
                  <div class="category-load">
                    <h1>{{$data->product_name}}</h1>
                    <p>{{$data->product_description}}</p>
                    <a href="https://api.whatsapp.com/send?phone=9099080109" target="_blank" class="btn2">Inguiry Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  {{-- <div class="category-product mtb-100">
    <div class="container">
      <div class="card">
        <div class="card-body">
          <div class="row align-items-center card-body-row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="single-product">
                <div class="location-img-left">
                  <div class="location-img">
                    <img src="assets/images/Category/1-3.png" alt="" class="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="category-product">
                <div class="categorye-w-left">
                  <div class="category-load">
                    <h1>Rushabh Nada</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum ipsum, pariatur dicta omnis
                      illum consectetur repudiandae ab soluta expedita vitae et possimus corporis aliquid sint
                      perspiciatis esse repellendus impedit? Facilis velit eaque repellat blanditiis deleniti.</p>
                    <a href="shop.html" class="btn2">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- Card-1 End -->
  <!-- Card-2 Start -->
  {{-- <div class="category-product mtb-100">
    <div class="container">
      <div class="card">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="category-product">
                <div class="categorye-w-right">
                  <div class="category-load">
                    <h1>Rushabh Nada</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum ipsum, pariatur dicta omnis
                      illum consectetur repudiandae ab soluta expedita vitae et possimus corporis aliquid sint
                      perspiciatis esse repellendus impedit? Facilis velit eaque repellat blanditiis deleniti.</p>
                    <a href="shop.html" class="btn2">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="single-product">
                <div class="location-img-right">
                  <div class="location-img">
                    <img src="assets/images/Category/2-2.png" alt="" class="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Card-2 End -->
  <!-- Card-3 Start -->
  <div class="category-product mtb-100">
    <div class="container">
      <div class="card">
        <div class="card-body">
          <div class="row align-items-center card-body-row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="single-product">
                <div class="location-img-left">
                  <div class="location-img">
                    <img src="assets/images/Category/3-1.png" alt="" class="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="category-product">
                <div class="categorye-w-left">
                  <div class="category-load">
                    <h1>Rushabh Nada</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum ipsum, pariatur dicta omnis
                      illum consectetur repudiandae ab soluta expedita vitae et possimus corporis aliquid sint
                      perspiciatis esse repellendus impedit? Facilis velit eaque repellat blanditiis deleniti.</p>
                    <a href="shop.html" class="btn2">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
@endsection
