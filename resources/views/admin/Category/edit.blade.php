@extends('admin.main')
@section('custom_css')
    <style>
        .image {
            height: 100px;
            width: 100px;
        }
    </style>
@endsection
@section('content')
    {{-- <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">UpdateCategory</h1>
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body ">
                            <form method="post" action="{{ route('admin.category.update', $category->id) }}"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Category Name</label>
                                    <input class="form-control form-control-lg @error('category_name') is-invalid @enderror"
                                        type="text" name="category_name" placeholder="Enter Category Name"
                                        value="{{ $category->category_name }}">
                                    @error('category_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Image</label><img
                                        src="{{ asset('storage/uploads/category/'. $category->image) }}" class="image"
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
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
                    <form method="post" action="{{ route('admin.category.update', $category->id) }}"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" style="margin-top:10px">Category Name</label>
                            <input class="form-control form-control-lg @error('category_name') is-invalid @enderror"
                                type="text" name="category_name" placeholder="Enter Category Name"
                                value="{{ $category->category_name }}">
                            @error('category_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label><img
                                src="{{ asset('storage/uploads/category/'. $category->image) }}" class="image"
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
                            <button type="submit" class="btn btn-lg btn-primary" style="margin-bottom:10px">Submit</button>
                        </div>
                    </form>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>

        </div>

    </div>
@endsection
