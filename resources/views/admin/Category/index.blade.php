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

                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Category List</h1>
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-1">

                <!--begin::Button-->
                <a class="btn btn-primary" href="{{ route('admin.category.create') }}">Add Category</a>

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
                <div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">


                                    <th>No</th>
                                    <th>Category Name</th>
                                    <th>Image</th>

                                    <th width="100px">Action</th>

                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                                @foreach ($data as $data)
                                    <tr>
                                        <!--begin::Name=-->
                                        <td>
                                            <a href="#"
                                                class="text-gray-800 text-hover-primary mb-1">{{ $data->id }}</a>
                                        </td>
                                        <!--end::Name=-->
                                        <!--begin::Email=-->
                                        <td>
                                            <a href="#"
                                                class="text-gray-600 text-hover-primary mb-1">{{ $data->category_name }}</a>
                                        </td>

                                        <td>
                                            <a href="#"
                                                class="text-gray-600 text-hover-primary mb-1"></a>{{ $data->image }}
                                                 <img src={{asset('storage/uploads/category/',$data->image)}} class="image"/>

                                        </td>
                                        <!--end::Payment method=-->
                                        <!--begin::Date=-->

                                        <!--end::Date=-->
                                        <!--begin::Action=-->
                                        <td class="text-end">

                                            <!--begin::Menu item-->

                                            {{-- <a class="btn btn-primary btn-icon flex-shrink-0 editevent"
                                                data-bs-toggle="modal" data-bs-target="#editevent"
                                                data-id={{ $data->id }} onclick="editData('{{ $data }}')"> --}}
                                    <a class="btn btn-primary" href="{{ route('admin.category.edit',$data->id) }}">

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
