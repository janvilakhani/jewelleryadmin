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
            <h1 class="h3 d-inline align-middle">Add SubCategory</h1>
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body ">
                            <form method="post" action="{{ route('subcategory.update', $res->id) }}"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Category name</label>

                                    <select class="form-select mb-3 @error('category_id') is-invalid @enderror"
                                        name="category_id">
                                        <option selected value="{{ $cate->id }}"> {{ $cate->category_name }}
                                        </option>

                                        @foreach ($result as $re)
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
                                    <label class="form-label">Sub-Category Name</label>
                                    <input class="form-control form-control-lg @error('subcat_name') is-invalid @enderror"
                                        type="text" name="subcat_name" placeholder="Enter Category Name"
                                        value="{{ $res->subcat_name }}">
                                    @error('subcat_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Image:-</label>
                                    <img src={{ asset('storage/uploads/subcategory/' . $res->image) }} class="image"
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
