@extends('sistemPenawaran.template.index')

{{-- headerscript section --}}
@section('headerScript')
    <!-- third party css -->
    <link href="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <!-- third party css end -->
@endsection


{{-- content section --}}
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">

                {{-- waiting list data --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 mb-3"><b>Waiting List</b></h4>
                                <table id="waiting-table" class="table table-striped table-hover dt-responsive table-responsive nowrap">
                                    <thead>
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>No.Penawaran</th>
                                            <th>Nama Customer</th>
                                            <th>Project</th>
                                            <th>Tanggal Penawaran</th>
                                            <th width="200">Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @for ($i = 1; $i <= 5; $i++)
                                            <tr class="text-center">
                                                <td>{{ $i }}</td>
                                                <td>0000/CS-TPP/X/2023</td>
                                                <td>PT ABC Tangerang </td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>
                                                    <div class="d-flex gap-1 justify-content-center">
                                                        <a href="{{route('sistemPenawaran.approval.preview')}}">
                                                        <button type="button"
                                                            class="btn btn-success btn-xs waves-effect waves-light rounded-pill">Preview</button></a>
                                                        <button type="button"
                                                            class="btn btn-primary btn-xs waves-effect waves-light rounded-pill">Edit</button>
                                                        <button type="button"
                                                            class="btn btn-danger btn-xs waves-effect waves-light rounded-pill">Delete</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Approved Data --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 mb-3"><b>Approved List</b></h4>
                                <table id="approved-table" class="table table-striped table-hover dt-responsive table-responsive nowrap">
                                    <thead>
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>No.Penawaran</th>
                                            <th>Nama Customer</th>
                                            <th>Project</th>
                                            <th>Tanggal Penawaran</th>
                                            <th width="200">Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @for ($i = 1; $i <= 5; $i++)
                                            <tr class="text-center">
                                                <td>{{ $i }}</td>
                                                <td>0000/CS-TPP/X/2023</td>
                                                <td>PT ABC Tangerang </td>
                                                <td>Project 1</td>
                                                <td>2011/04/25</td>
                                                <td>
                                                    <div class="d-flex gap-1 justify-content-center">
                                                        <a href="{{route('sistemPenawaran.approval.preview')}}">
                                                        <button type="button"
                                                            class="btn btn-success btn-xs waves-effect waves-light rounded-pill">Preview</button></a>
                                                        <button type="button"
                                                            class="btn btn-primary btn-xs waves-effect waves-light rounded-pill">Edit</button>
                                                        <button type="button"
                                                            class="btn btn-danger btn-xs waves-effect waves-light rounded-pill">Delete</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Rejected Data --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 mb-3"><b>Rejected List</b></h4>
                                <table id="rejected-table" class="table table-striped table-hover dt-responsive table-responsive nowrap">
                                    <thead>
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>No.Penawaran</th>
                                            <th>Nama Customer</th>
                                            <th>Project</th>
                                            <th>Tanggal Penawaran</th>
                                            <th width="200">Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @for ($i = 1; $i <= 5; $i++)
                                            <tr class="text-center">
                                                <td>{{ $i }}</td>
                                                <td>0000/CS-TPP/X/2023</td>
                                                <td>PT ABC Tangerang</td>
                                                <td>Project 1</td>
                                                <td>2011/04/25</td>
                                                <td>
                                                    <div class="d-flex gap-1 justify-content-center">
                                                        <a href="{{route('sistemPenawaran.approval.preview')}}">
                                                        <button type="button"
                                                            class="btn btn-success btn-xs waves-effect waves-light rounded-pill">Preview</button></a>
                                                        <button type="button"
                                                            class="btn btn-primary btn-xs waves-effect waves-light rounded-pill">Edit</button>
                                                        <button type="button"
                                                            class="btn btn-danger btn-xs waves-effect waves-light rounded-pill">Delete</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- pagescript section --}}
@section('pageScript')
    <!-- third party js -->
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}">
    </script>
    <script
        src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
    </script>
    <script
        src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}">
    </script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}">
    </script>
    <script
        src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}">
    </script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}">
    </script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}">
    </script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}">
    </script>
    <script
        src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}">
    </script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-select/js/dataTables.select.min.js') }}">
    </script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <!-- third party js ends -->

    <script>
        $(document).ready(function() {
            $("#waiting-table").DataTable({
                // responsive: true;
                autoWidth: false,
                processing: true,
                responsive: false,

            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#approved-table").DataTable({
                // responsive: true;
                autoWidth: false,
                processing: true,
                responsive: false,

            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#rejected-table").DataTable({
                // responsive: true;
                autoWidth: false,
                processing: true,
                responsive: false,

            });
        });
    </script>
@endsection
