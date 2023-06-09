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

                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Review List</h1>
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-1">

                <!--begin::Button-->
                <a class="btn btn-primary" href="{{ route('admin.review.create') }}">Add Review</a>

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
                                            <th>Description</th>
                                            <th>Name	</th>
                                            <th>star</th>
                                            <th>Image</th>
                                            <th width="100px">Action</th>

                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                                @foreach ($review as $data)
                                    <tr>
                                        <td>
                                            {{ $data->id }}
                                        </td>
                                        <td>
                                            {{ $data->name }}
                                        </td>
                                        <td>
                                            {{ $data->description }}
                                        </td>
                                        <td>
                                            {{ $data->star }}
                                        </td>
                                        <td>
                                            <img src={{ asset('storage/uploads/review/'.$data->image) }}
                                                class="image" width="80" height="80" alt="{{$data->image}}"/>

                                        </td>

                                        <td class="text-end">

                                            <a class="btn btn-primary"
                                                href="{{ route('admin.review.edit', $data->id) }}">

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
    <script type="text/javascript">
        $(function() {

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.review.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'

                    },
                    {
                        data: 'category_id',
                        name: 'category_name'
                    },
                    {
                        data: 'subcat_name',
                        name: 'SubCate Name'
                    },
                    {
                        data: 'image',
                        name: 'Image'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });

        });
    </script>
@endsection
