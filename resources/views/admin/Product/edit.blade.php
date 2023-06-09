@extends('admin.main')
@section('custom_css')
    <style>
        .image {
            height: 100px;
            width: 100px;
            margin-left: 10px;
            margin-bottom: 10px;
        }
    </style>
@endsection
@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <div id="kt_content_container" class="container-xxl">

            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack p-0">
                <!--begin::Page title-->
                <div class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">

                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Edit Category</h1>
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                {{-- <div class="d-flex align-items-center py-1">

                    <!--begin::Button-->
                    <a class="btn btn-primary" href="{{ route('admin.category.create') }}">Add Category</a>

                    <!--end::Button-->
                </div> --}}
                <!--end::Actions-->
            </div>
            <div class="row mt-5">
                <div class="col-sm">
                    <div class="alert alert-success" role="alert" id="alert-success" style="display:none">

                    </div>
                    @if (Session::has('success'))
                        <div class="alert alert-success" id="sessionmsg">
                            {{ Session::get('success') }}
                        </div>
                    @elseif(Session::has('warning'))
                        {{ Session::get('warning') }}
                    @endif

                </div>
            </div>
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header">

                    <div class="row w-100 mt-5">
                        <div class="col-lg-3">
                            {{-- <h5>Event List</h5> --}}
                        </div>

                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <form method="post" action="{{ route('admin.product.update', $res->id) }}"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Category name</label>

                            <select class="form-select mb-3 @error('category_id') is-invalid @enderror"
                                name="category_id">
                                <option selected value={{ $cate->id }}>{{ $cate->category_name }}
                                </option>

                                @foreach ($category as $re)
                                    <option value="{{ $re->id }}">{{ $re->category_name }}
                                    </option>
                                @endforeach
                            </select>

                            @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">SubCategory name</label>

                            <select class="form-select mb-3 @error('category_id') is-invalid @enderror"
                                name="subcategory_id">
                                <option selected value="{{ $subcat->id }}">{{ $subcat->subcat_name }}
                                </option>

                                @foreach ($subcategory as $sub)
                                    <option value="{{ $sub->id }}">{{ $sub->subcat_name }}
                                    </option>
                                @endforeach
                            </select>

                            @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input class="form-control form-control-lg @error('product_name') is-invalid @enderror"
                                type="text" name="product_name" placeholder="Enter Product Name"
                                value="{{ $res->product_name }}">
                            @error('product_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label> <img
                                src={{ asset('storage/uploads/subcategory/' . $res->image) }} class="image"
                                alt="">
                            <input class="form-control @error('images') is-invalid @enderror" name="images"
                                type="file" id="images">
                            @error('images')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="text-right mt-3">
                            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                        </div>
                    </form>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>

        </div>

    </div>
@endsection
