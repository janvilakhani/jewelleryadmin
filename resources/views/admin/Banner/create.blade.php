@extends('admin.main')
@section('content')
    {{-- <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Add Category</h1>
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body ">
                            <form method="post" action="{{ route('admin.banner.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input class="form-control form-control-lg @error('title') is-invalid @enderror"
                                        type="text" name="title" placeholder="Enter Title Name">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Sub Title</label>
                                    <input class="form-control form-control-lg @error('sub_title') is-invalid @enderror"
                                        type="text" name="sub_title" placeholder="Enter Sub Title Name">
                                    @error('sub_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Url</label>
                                    <input class="form-control form-control-lg @error('url') is-invalid @enderror"
                                        type="text" name="url" placeholder="Enter url Name">
                                    @error('url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Image</label>
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

                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Add Banner</h1>
                </div>

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
                    <form method="post" action="{{ route('admin.banner.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input class="form-control form-control-lg @error('title') is-invalid @enderror"
                                type="text" name="title" placeholder="Enter Title Name">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sub Title</label>
                            <input class="form-control form-control-lg @error('sub_title') is-invalid @enderror"
                                type="text" name="sub_title" placeholder="Enter Sub Title Name">
                            @error('sub_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Url</label>
                            <input class="form-control form-control-lg @error('url') is-invalid @enderror"
                                type="text" name="url" placeholder="Enter url Name">
                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
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
