@extends('admin.main')
@section('custom_css')
    <style>
        .text-right {
            text-align: right;
        }

        .image {
            height: 100px;
            width: 100px;
        }
    </style>
@endsection
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <div id="kt_content_container" class="container-xxl">

            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack p-0">
                <!--begin::Page title-->
                <div class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">

                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Banner List</h1>
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-1">

                    <!--begin::Button-->
                    <a class="btn btn-primary" href="{{ route('admin.banner.create') }}">Add Banner</a>

                    <!--end::Button-->
                </div>
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

                <div class="card-body pt-0">
                    <div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                        <div class="table-responsive">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <th>No</th>
                                        <th>Banner Name</th>
                                        <th>Sub Title</th>
                                        <th>Url</th>
                                        <th>Image</th>
                                        <th width="100px">Action</th>

                                    </tr>
                                </thead>
                                <tbody class="fw-bold text-gray-600">
                                    @foreach ($banners as $data)
                                        <tr>
                                            <td>
                                                {{ $data->id }}
                                            </td>
                                            <td>
                                                {{ $data->title }}
                                            </td>
                                            <td>
                                                {{ $data->sub_title }}
                                            </td>
                                            <td>
                                                {{ $data->url }}
                                            </td>
                                            <td>
                                                <img src={{ asset('storage/uploads/banner/'.$data->image) }}
                                                    class="image" width="80" height="80" alt="{{$data->image}}"/>

                                            </td>

                                            <td class="text-end">

                                                <a class="btn btn-primary"
                                                    href="{{ route('admin.banner.edit', $data->id) }}">

                                                    <i class='fas fa-edit'></i>
                                                </a>

                                                {{-- <a href="{{ route('admin.category.delete', $data->id) }}"
                                                onclick="return confirm('Are you sure to delete?')"
                                                class=" px-3 btn btn-danger  btn-icon flex-shrink-0">
                                                <i class='far fa-trash-alt'></i></a> --}}

                                                {{-- <a href="#delModal"
                                                class="trigger-btn btn btn-primary btn-icon flex-shrink-0 "
                                                data-toggle="modal"> <i class='far fa-trash-alt'></i>
                                            </a> --}}
                                            </td>
                                            <!--end::Action=-->

                                        </tr>
                                    @endforeach
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>

        </div>

    </div>
@endsection
@section('custom_script')
@endsection
