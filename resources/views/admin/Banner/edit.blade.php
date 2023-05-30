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
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">UpdateCategory</h1>
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body ">
                            <form method="post" action="{{ route('admin.banner.update', $banner->id) }}"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input class="form-control form-control-lg @error('title') is-invalid @enderror"
                                        type="text" name="title" placeholder="Enter Title Name"
                                        value="{{ $banner->title }}">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Sub Title</label>
                                    <input class="form-control form-control-lg @error('sub_title') is-invalid @enderror"
                                        type="text" name="sub_title" placeholder="Enter Sub Title Name"
                                        value="{{ $banner->sub_title }}">
                                    @error('sub_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Url</label>
                                    <input class="form-control form-control-lg @error('url') is-invalid @enderror"
                                        type="text" name="url" placeholder="Enter Url"
                                        value="{{ $banner->title }}">
                                    @error('url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Image</label><img
                                        src={{ asset('storage/uploads/banner/' . $banner->image) }} class="image"
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
    </div>
@endsection
