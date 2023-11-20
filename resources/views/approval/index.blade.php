@extends('template.index')

{{-- headerscript section --}}
@section('headerScript')
    {{-- Data Table CSS --}}
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.6/r-2.5.0/sc-2.2.0/sp-2.2.0/sl-1.7.0/datatables.min.css" rel="stylesheet">

    <style>
        .btn-approval {
            background-color: #FF3E3E;
            color: white;
            font-size: 10px;
        }

        .btn-success {
            font-size: 10px;
        }
    </style>
@endsection

{{-- content section --}}
@section('content')

    {{-- halaman baru --}}
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row table-title mb-3">
                                    <div class="col-sm-8">

                                        <h4 class="mt-0">Data Operational</h4>
                                    </div>
                                </div>
                                <table id="dataTable" class="table table-striped dt-responsive table-responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th width="50">No</th>
                                        <th>SPK Number</th>
                                        <th>Project Label</th>
                                        <th>Created By</th>
                                        <th>Service Date</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row table-title mb-3">
                                    <div class="col-sm-8">

                                        <h4 class="mt-0">Approved</h4>
                                    </div>
                                </div>
                                <table id="approved" class="table table-striped dt-responsive table-responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th width="50">No</th>
                                        <th>SPK Number</th>
                                        <th>Project Label</th>
                                        <th>Created By</th>
                                        <th>Approved By</th>
                                        <th>Approved Date</th>
                                        <th>Service Date</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- container-fluid -->
            </div>
        </div>
    </div>

@endsection

{{-- pagescript section --}}
@section('pageScript')
    {{-- script js data table --}}
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.6/r-2.5.0/sc-2.2.0/sp-2.2.0/sl-1.7.0/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function () {
            $('#dataTable').DataTable({
                responsive: true,
                autoWidth: false,
                serverSide: true,
                processing: true,
                scrollX: true,
                ajax: "{{ route('operational.approval') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'spk_number', name: 'spk_number'},
                    {data: 'project.label', name: 'label'},
                    {data: 'created_by', name: 'created_by'},
                    {data: 'date', name: 'date'},
                    {data: 'action', name: 'action'},
                ]
            });
            $('#approved').DataTable({
                responsive: true,
                autoWidth: false,
                serverSide: true,
                processing: true,
                scrollX: true,
                ajax: "{{ route('operational.approved') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'spk_number', name: 'spk_number'},
                    {data: 'project.label', name: 'label'},
                    {data: 'created_by', name: 'created_by'},
                    {data: 'approved_by', name: 'approved_by'},
                    {data: 'approved_date', name: 'approved_date'},
                    {data: 'date', name: 'date'},
                    {data: 'action', name: 'action'},
                ]
            });
        });
    </script>
@endsection
