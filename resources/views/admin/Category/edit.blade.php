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
                            <form method="post" action="{{ route('category.update', $category->id) }}"
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
                                        src={{ asset('storage/uploads/category/' . $category->image) }} class="image"
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
