@extends('template.index')

{{-- headerscript section --}}
@section('headerScript')
    <style>
        .nav-link {
            color: black;
        }

        .nav-link:hover {
            color: red;
        }

        .nav-link.active {
            color: red !important;
            font-weight: 800;
        }

        .tables-card {
            margin-bottom: 0 !important;
        }

        .details-text {
            margin-bottom: 10px;
            font-weight: 800;
        }

        .title-text {
            margin-bottom: unset;
        }

        .card-nbm {
            margin-bottom: 0 !important;
        }

        .btn-addMaterial {
            border-radius: 10px;
            background-color: #FF3E3E;
            border: #FF3E3E;
            color: white;
        }

        #operational-data .row {
            --ct-gutter-x: 0rem !important;
        }
    </style>

    {{-- select2 css --}}
    <link href="{{ asset('templateAdmin/Admin/dist/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet"
          type="text/css"/>

    {{-- data table script --}}
    <link
        href="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css"/>
    <link
        href="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css"/>
    <link
        href="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css"/>
    <link
        href="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css"/>
@endsection

{{-- content section --}}
@section('content')
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="header-title mb-2">Sales Order Number</h4>

                                        <select class="form-select" id="sales-order"
                                                onchange="getOperationals(this.value)">
                                            <option selected value="">Pilih Sales Order Number</option>
                                            @foreach ($salesOrder as $item)
                                                <option value="{{ $item->id }}"
                                                        @isset($soNumber) @if ($soNumber==$item->so)
                                                            selected
                                                    @endif
                                                    @endisset>
                                                    {{ $item->so }}</option>
                                            @endforeach
                                        </select>

                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                            </div> <!-- end card-body-->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div>

                <div id="operational-data" class="row">
                    <div class="col-12">
                        <div class="card card-nbm">
                            <div class="card-body card-nbm">
                                <div id="operational-section" class="row">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <h4 class="header-title mb-2">Operational</h4>
                                            <select id="select-operational" class="form-select mb-2"
                                                    onchange="detailOperational(this.value, false)">
                                                @isset($spkNumber)
                                                    <option value="{{ $spkNumber_id }}"
                                                            selected>{{ $spkNumber }}</option>
                                                @else
                                                    <option selected value="">Silahkan Pilih SO</option>
                                                @endisset

                                            </select>
                                        </div> <!-- end col -->
                                    </div>

                                    <div class="row px-3">
                                        <div class="col-md-6">
                                            <th scope="row">
                                                <p class="title-text">SPK Number :</p>
                                                <p class="details-text" id="spk_number">-</p>
                                            </th>
                                            <th scope="row">
                                                <p class="title-text">Service Date :</p>
                                                <p class="details-text" id="date">-</p>
                                            </th>
                                            <th scope="row">
                                                <p class="title-text">Project Label :</p>
                                                <p class="details-text" id="label">-</p>
                                            </th>
                                            <th scope="row">
                                                <p class="title-text">Service Type :</p>
                                                <p class="details-text" id="type">-</p>
                                            </th>
                                            <th scope="row">
                                                <p class="title-text">File</p>
                                                <span id="bg-approved" class="details-text">
                                                    <a id="file">-</a>
                                                </span>
                                            </th>
                                        </div>
                                        <div class="col-md-6">
                                            <th scope="row">
                                                <p class="title-text">Description</p>
                                                <p class="" id="description">-</p>
                                            </th>
                                            <th scope="row">
                                                <p class="title-text">Approved by</p>
                                                <span id="bg-approved" class="details-text badge bg-danger">
                                                    <p class="mb-0 p-1" id="approved">-</p>
                                                </span>
                                            </th>
                                            <th scope="row">
                                                <p class="title-text">Transportation Mode</p>
                                                <p class="details-text" id="transport">-</p>
                                            </th>
                                            <th scope="row">
                                                <p class="title-text">Vehicle Number</p>
                                                <p class="details-text" id="vehicle">-</p>
                                            </th>
                                            <th scope="row">
                                                <p class="title-text">Created by</p>
                                                <p class="details-text" id="created">-</p>
                                            </th>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-nbm text-center">
                                                <div class="card-header bg-transparent border-bottom">
                                                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                                                        <li class="nav-item">
                                                            <button type="button" class="nav-link active show"
                                                                    href="#work"
                                                                    role="tab" data-bs-toggle="tab">Work Plan
                                                            </button>
                                                        </li>
                                                        <li class="nav-item">
                                                            <button type="button" class="nav-link" role="tab"
                                                                    href="#expenses" data-bs-toggle="tab">Operational
                                                                Expenses
                                                            </button>
                                                        </li>
                                                        <li class="nav-item">
                                                            <button type="button" class="nav-link" role="tab"
                                                                    href="#material" data-bs-toggle="tab">Material
                                                                Utilized
                                                            </button>
                                                        </li>
                                                        <li class="nav-item">
                                                            <button type="button" class="nav-link" role="tab"
                                                                    href="#technician" data-bs-toggle="tab"
                                                                    id="technician_list">Technician
                                                                List
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="card-body tab-content">
                                                    {{-- isi tab work plan --}}
                                                    <div role="tabpanel" class="tab-pane fade active show" id="work">
                                                        <div class="row text-start">
                                                            <div class="col-lg-12">
                                                                <div class="cards">
                                                                    <div class="card-body pt-0">
                                                                        <div class="row table-title mb-1">
                                                                            <div class="col-sm-8">
                                                                                <h4 class="mt-0 header-title"></h4>
                                                                            </div>
                                                                            <div class="col-sm-4 text-end">
                                                                                <button type="button"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#add-work-modal"
                                                                                        onclick="showAgendaForm()"
                                                                                        class="btn btn-save w-md waves-effect waves-light px-4 btn-addMaterial">
                                                                                    <i class="mdi mdi-plus"></i>Add
                                                                                    Work Plan
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="">
                                                                            <table
                                                                                class="table table-striped table-hover mb-0"
                                                                                id="table-agendas">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>#</th>
                                                                                    <th>Description</th>
                                                                                    <th>Due Date</th>
                                                                                    <th>Status</th>
                                                                                    <th class="text-center" width="140">
                                                                                        Actions
                                                                                    </th>
                                                                                </tr>
                                                                                </thead>

                                                                                <tbody>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- isi tab expenses --}}
                                                    <div role="tabpanel" class="tab-pane fade" id="expenses">
                                                        <div class="row text-start">
                                                            <div class="col-lg-12">
                                                                <div class="cards">
                                                                    <div class="card-body pt-0">
                                                                        <div class="row table-title mb-1">
                                                                            <div class="col-sm-8">
                                                                                <h4 class="mt-0 header-title"></h4>
                                                                            </div>
                                                                            <div class="col-sm-4 text-end">
                                                                                <button type="button"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#add-expenses-modal"
                                                                                        onclick="showExpenseForm()"
                                                                                        class="btn btn-save w-md waves-effect waves-light px-4 btn-addMaterial">
                                                                                    <i class="mdi mdi-plus"></i>Add
                                                                                    Expenses
                                                                                </button>
                                                                            </div>

                                                                        </div>
                                                                        <div id="datatable_wrapper"
                                                                             class="dataTables_wrapper dt-bootstrap5">
                                                                            <table
                                                                                class="table table-striped table-hover dt-responsive table-hover table-responsive nowrap dataTable no-footer dtr-inline"
                                                                                id="table-expenses">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>#</th>
                                                                                    <th>Expense Date</th>
                                                                                    <th>Expense Item</th>
                                                                                    <th>Amount</th>
                                                                                    <th class="text-center" width="140">
                                                                                        Actions
                                                                                    </th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- isi tab material utilized --}}
                                                    <div role="tabpanel" class="tab-pane fade" id="material">
                                                        <div class="row text-start">
                                                            <div class="col-lg-12">
                                                                <div class="cards">
                                                                    <div class="card-body pt-0">
                                                                        <div class="row table-title mb-1">
                                                                            <div class="col-sm-8">
                                                                                <h4 class="mt-0 header-title"></h4>
                                                                            </div>
                                                                            <div class="col-sm-4 text-end">
                                                                                <button type="button"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#add-material-modal"
                                                                                        onclick="showMaterialForm()"
                                                                                        class="btn btn-save w-md waves-effect waves-light px-4 btn-addMaterial">
                                                                                    <i class="mdi mdi-plus"></i>Add
                                                                                    Material
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="table-responsive">
                                                                            <table id="table-material"
                                                                                   class="table table table-striped table-hover mb-0">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>#</th>
                                                                                    <th>Memo Number</th>
                                                                                    <th>Delivery Order Number</th>
                                                                                    <th class="text-center" width="140">
                                                                                        Actions
                                                                                    </th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- isi tab technician --}}
                                                    <div role="tabpanel" class="tab-pane fade" id="technician">
                                                        <div class="row text-start">
                                                            <div class="col-lg-12">
                                                                <div class="cards">
                                                                    <div class="card-body pt-0">
                                                                        <div class="row table-title mb-1">
                                                                            <div class="col-sm-8">
                                                                                <h4 class="mt-0 header-title"></h4>
                                                                            </div>
                                                                            <div class="col-sm-4 text-end">
                                                                                <button type="button"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#add-technician-modal"
                                                                                        onclick="attachTeamForm()"
                                                                                        class="btn btn-save w-md waves-effect waves-light px-4 btn-addMaterial">
                                                                                    <i class="mdi mdi-plus"></i>Add
                                                                                    Technician
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="table-responsive">
                                                                            <table
                                                                                class="table table table-striped table-hover mb-0"
                                                                                id="table-technician">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>#</th>
                                                                                    <th>Name</th>
                                                                                    <th>Division</th>
                                                                                    <th class="text-center" width="140">
                                                                                        Actions
                                                                                    </th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    @include('operational.listModals')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end card-body-->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div>
            </div> <!-- content -->
        </div>
    </div>
@endsection

{{-- pagescript section --}}
@section('pageScript')

    {{-- script datatables load library js --}}
    <script
        src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script
        src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script
        src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script
        src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script
        src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script
        src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script
        src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script
        src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script
        src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script
        src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script
        src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>

    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.agendasForm').parsley();
            $('.expensesForm').parsley();
            //if form id is addAgenda and form is valid
            $('.agendasForm').on('submit', function (event) {
                event.preventDefault();
                if ($('.agendasForm').parsley().isValid()) {
                    if ($(this).attr('id') == 'addAgenda') {
                        addAgenda();
                    } else if ($(this).attr('id') == 'updateAgenda') {
                        updateAgenda($(this).attr('data-id'));
                    }
                }
            });

            $('.expensesForm').on('submit', function (event) {
                event.preventDefault();
                if ($('.expensesForm').parsley().isValid()) {
                    if ($(this).attr('id') == 'addExpense') {
                        addExpense();
                    } else if ($(this).attr('id') == 'updateExpense') {
                        updateExpense($(this).attr('data-id'));
                    }
                }
            });
            if ($('#select-operational').val() != "") {
                detailOperational($('#select-operational').val());
                getOperationals($('#sales-order').val(), $('#select-operational').val());
                console.log($('#select-operational').val());
            }

            $('.materialsForm').on('submit', function (event) {
                event.preventDefault();
                if ($('.materialsForm').parsley().isValid()) {
                    if ($(this).attr('id') == 'addMaterial') {
                        addMaterial();
                    } else if ($(this).attr('id') == 'updateMaterial') {
                        updateMaterial($(this).attr('data-id'));
                    }
                }
            });

        })
    </script>

    <script type="text/javascript">
        function getOperationals(salesOrder, operational) {
            if (salesOrder && salesOrder !== "") {
                $.ajax({
                    url: `{{ route('operational.get-operational', '') }}/${salesOrder}`,
                    type: "GET",
                    success: function (data) {
                        console.log(data);
                        const selectOperational = $("#select-operational");
                        selectOperational.empty();
                        selectOperational.append($('<option>', {
                            value: "",
                            text: "Pilih Operational",
                            selected: true
                        }));
                        data.forEach(function (value) {
                            const option = new Option(value.spk_number, value.id, operational == value
                                .id, operational == value.id);
                            selectOperational.append(option);
                        });
                    }
                });
            }
        }
    </script>

    <script type="text/javascript">
        function detailOperational(operational) {

            if (operational !== "" && operational != null) {
                console.log(operational);
                $.ajax({
                    url: "{{ route('operational.show', '') }}" + "/" + operational,
                    type: "GET",
                    success: async function (data) {
                        console.log(data);
                        await getExpenses(operational);
                        await getAgendas(operational);
                        await getMaterials(operational);

                        // Get the first operational in the array.
                        const operationalData = data[0];

                        // Get the project label.
                        const projectLabel = operationalData.project.label;
                        $('#spk_number').text(operationalData.spk_number);
                        $('#date').text(operationalData.date);
                        $('#label').text(projectLabel);
                        $('#type').text(operationalData.type);
                        if (operationalData.approver == null) {
                            $('#file').text('Belum diapprove');
                        } else {
                            $('#file').text('Download File').addClass('btn btn-primary');
                            $('#file').attr('href', "{{ route('operational.download', '') }}" + "/" + operational);
                        }
                        $('#description').text(operationalData.description);
                        $('#transport').text(operationalData.transportation_mode);
                        $('#vehicle').text(operationalData.vehicle_number);
                        $('#created').text(operationalData.creator.first_name + ' ' + operationalData.creator.last_name);
                        if (operationalData.approver == null) {
                            $('#approved').text('Belum di Approve');
                            //text become red button
                            // $('#approved').addClass('btn btn-danger disabled');

                        } else {
                            $('#approved').text(operationalData.approver.first_name + ' ' + operationalData.approver.last_name);
                            $('#bg-approved').removeClass('bg-danger');
                            $('#bg-approved').addClass('bg-success');
                        }
                        var i = 1;
                        //check if team is empty
                        if (operationalData.team.length == 0) {
                            $('#table-technician tbody').append(`
                                <tr>
                                    <td colspan="3" align="center">Belum ada Technician</td>
                                </tr>
                            `);
                        } else {
                            //empty table
                            $('#table-technician tbody').empty();
                            //looping team
                            for (const member of operationalData.team) {
                                console.log(member.first_name);
                                $('#table-technician tbody').append(`
                                <tr>
                                    <th scope="row">${i}</th>
                                    <td>${(member.first_name + member.last_name)}</td>
                                    <td>${member.division}</td>
                                    <td class="text-center"> <div class="btn-group btn-group-sm"
                                            style="float: none;">
                                            <button id="delete-button"
                                                title="Hapus Technician"
                                                type="button"
                                                onclick="deleteTeam('${operationalData.id}', '${member.id}')"
                                                class="tabledit-edit-button btn btn-danger">
                                                <span
                                                    class="mdi mdi-trash-can-outline"></span>
                                            </button>
                                        </div></td>
                                </tr>
                            `);
                                i++
                            }
                        }
                    }
                });

            } else {
                // Cancel the AJAX call.
                event.preventDefault();
            }
        }
    </script>

    <script type="text/javascript">
        function deleteTeam(operational, user_id) {
            // console.log(operational, user_id)
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this action!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#f34e4e',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Send an AJAX request to delete the user
                    $.ajax({
                        url: "{{ route('operational.detach-team', '') }}" + '/' + operational,
                        type: 'PATCH',
                        data: {
                            _token: "{{ csrf_token() }}",
                            user_id: user_id,
                        },
                        success: function () {
                            // Reload the table
                            detailOperational(operational)
                        },
                        error: function (xhr, textStatus, errorThrown) {
                            console.error(xhr.responseText);
                            // Handle errors here if needed.
                        }
                    });
                }
            });
        }
    </script>

    <script>
        $(document).ready(function () {
            $('#select-operational').select2({
                // placeholder: 'role',
                // dropdownParent: $('#con-close-modal'),
                multiple: false,
                dropdownAutoWidth: true,
                width: '100%',
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sales-order').select2({
                // placeholder: 'role',
                // dropdownParent: $('#con-close-modal'),
                multiple: false,
                dropdownAutoWidth: true,
                width: '100%',
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#select-technician').select2({
                // placeholder: 'role',
                // dropdownParent: $('#con-close-modal'),
                theme: 'default',
                multiple: false,
                dropdownAutoWidth: true,
                width: '100%',
                dropdownParent: $('#technician-parent'),
                formatNoMatches: function () {
                    return "Nothing found";
                },
            });
        });
    </script>

    <script type="text/javascript">
        function getExpenses(expense) {
            console.log(expense);
            // let operational = $('#select-operational').val();
            let table = $('#table-expenses').DataTable({
                autoWidth: false,
                processing: true,
                serverSide: true,
                responsive: true,
                scrollX: true,
                "bDestroy": true,
                ajax: "{{ route('operational.expense.index', '') }}" + "/" + expense,
                columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                },
                    {
                        data: 'date',
                        name: 'date'
                    },
                    {
                        data: 'item',
                        name: 'item'
                    },
                    {
                        data: 'amount',
                        name: 'amount'
                    },
                    {
                        data: 'id',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        render: function (data) {
                            return `
                                <div class="btn-group btn-group-sm"
                                style="float: none;">
                                <button type="button"
                                id="edit-expense-${data}"
                                data-bs-toggle="modal"
                                data-bs-target="#add-expenses-modal"
                                title="Edit Operational Expenses"
                                data-id="${data}"
                                class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                onclick="editExpense('${data}')"
                                style="background-color: #3E8BFF;">
                                <span
                                class="mdi mdi-pencil"></span>
                                </button>
                                </div>
                                <div class="btn-group btn-group-sm"
                                style="float: none;">
                                <button id="delete-button"
                                title="Hapus Operational Expenses"
                                type="button"
                                onclick="deleteExpense('${data}')"
                                class="tabledit-edit-button btn btn-danger">
                                <span
                                class="mdi mdi-trash-can-outline"></span>
                                </button>
                                </div>
                                `
                        }
                    }
                ]
            })
        }
    </script>

    <!-- Repopulate Expense Modal -->
    <script type="text/javascript">
        function editExpense(expense) {

            console.log(expense);

            let modal = $('#add-expenses-modal');
            const button = modal.find('#expenseButton');
            button.innerHTML = 'Save Changes';

            $('.expensesForm').parsley().reset()
            $('.expensesForm').attr('id', 'updateExpense')
            $('.expensesForm').attr('data-id', expense)

            let operational = $('#select-operational').val();
            let operationalText = $('#select-operational option:selected').text();
            console.log(operational)
            axios({
                method: 'GET',
                url: "{{ route('operational.expense.show', '') }}" + "/" + expense,
            })
                .then(function (response) {
                    console.log(response);
                    modal.find('#operational-label').text(operationalText);
                    modal.find('#expense-id').val(operational);
                    modal.find('#expense-date').val(response.data[0].date);
                    modal.find('#expense-item').val(response.data[0].item);
                    modal.find('#expense-amount').val(response.data[0].amount);
                    modal.find('#updateExpense').attr("data-id", response.data[0].id)
                })
                .catch(function (error) {
                    console.log(error);
                })
        }
    </script>

    <script type="text/javascript">
        function getMaterials(operational) {
            let table = $('#table-material').DataTable({
                "autoWidth": false,
                processing: true,
                serverSide: true,
                responsive: true,
                "bDestroy": true,
                ajax: "{{route('operational.material.index', '')}}" + "/" + operational,
                columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                },
                    {
                        data: 'memo',
                        name: 'memo',
                    },
                    {
                        data: 'do',
                        name: 'do',
                    },
                    {
                        data: 'id',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        render: function (data) {
                            return `
                                <div class="btn-group btn-group-sm"
                                style="float: none;">
                                <button type="button"
                                id="edit-material-${data}"
                                data-bs-toggle="modal"
                                data-bs-target="#add-material-modal"
                                title="Edit Operational Material"
                                data-id="${data}"
                                class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                onclick="editMaterial('${data}')"
                                style="background-color: #3E8BFF;">
                                <span
                                class="mdi mdi-pencil"></span>
                                </button>
                                </div>
                                <div class="btn-group btn-group-sm"
                                style="float: none;">
                                <button id="edit-material-${data}"
                                title="Hapus Operational Material"
                                type="button"
                                onclick="deleteMaterial('${data}')"
                                class="tabledit-edit-button btn btn-danger">
                                <span
                                class="mdi mdi-trash-can-outline"></span>
                                </button>
                                </div>
                                `
                        }
                    }
                ]
            })
        }
    </script>
    <!-- Update Expense -->
    <script type="text/javascript">
        function updateExpense(expense) {
            console.log(expense)
            let modal = $('#add-expenses-modal');
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this action!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, update it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    let date = modal.find('#expense-date').val()
                    let item = modal.find('#expense-item').val()
                    let amount = modal.find('#expense-amount').val()
                    axios({
                        method: 'PATCH',
                        url: "{{ route('operational.expense.update', '') }}" + "/" + expense,
                        data: {
                            _token: "{{ csrf_token() }}",
                            date: date,
                            amount: amount,
                            item: item,
                        },
                    }).then(function (response) {
                        console.log(response);
                        Swal.fire(
                            'Updated!',
                            'Your file has been updated.',
                            'success'
                        )
                        $('#table-expenses').DataTable().ajax.reload();
                        modal.modal('hide');
                    }).catch(function (error) {
                        console.log(error);
                        swal.fire("Error!", "Please try again", "error");
                    })
                }
            })
        }
    </script>

    <script type="text/javascript">
        function deleteExpense(expense) {
            swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this action!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#f34e4e',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    axios({
                        method: 'DELETE',
                        url: "{{ route('operational.expense.delete', '') }}" + "/" + expense,
                        data: {
                            _token: "{{ csrf_token() }}",
                        },
                    }).then(function (response) {
                        console.log(response);
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        $('#table-expenses').DataTable().ajax.reload();
                    }).catch(function (error) {
                        console.log(error);
                        swal.fire("Error!", "Please try again", "error");
                    })
                }
            })
        }
    </script>

    <script type="text/javascript">
        function showExpenseForm() {
            const modal = $('#add-expenses-modal');
            const button = modal.find('#expenseButton');

            $('.expensesForm').parsley().reset();
            $('.expensesForm').attr('id', 'addExpense');

            // Change the inner HTML of the button element.
            button.text('Add Expense');

            // Empty the form.
            modal.find('#expense-date').val('');
            modal.find('#expense-item').val('');
            modal.find('#expense-amount').val('');
        }
    </script>

    <script type="text/javascript">
        function addExpense() {
            let modal = $('#add-expenses-modal');
            let operational = $('#select-operational').val();
            let date = modal.find('#expense-date').val()
            let item = modal.find('#expense-item').val()
            let amount = modal.find('#expense-amount').val()
            if (operational == null || operational == "") {
                swal.fire("Error!", "Please select operational", "error");
                return;
            }
            axios({
                method: 'POST',
                url: "{{ route('operational.expense.store') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    operational_id: operational,
                    date: date,
                    amount: amount,
                    item: item,
                },
            }).then(function (response) {
                console.log(response);
                Swal.fire(
                    'Added!',
                    'Expense has been added.',
                    'success'
                )
                $('#table-expenses').DataTable().ajax.reload();
                modal.modal('hide');
            }).catch(function (error) {
                console.log(error);
                swal.fire("Error!", "Please try again", "error");
            })
        }
    </script>

    <script type="text/javascript">
        function attachTeamForm() {
            let operational = $('#select-operational').val();
            if (operational == null || operational == "") {
                swal.fire("Error!", "Please select operational", "error");
                return;
            }

            let data; // Define data variable in a broader scope

            $.ajax({
                url: "{{ route('users.getTechnician', '') }}" + "/" + operational,
                type: "GET",
                success: function (responseData) {
                    console.log(responseData);
                    data = responseData;
                    $('#select-technician').empty();
                    $('#select-technician').append(`<option selected value="">-- Pilih Technician --</option>`);
                    $.each(data, function (key, value) {
                        console.log(value.first_name);
                        let option = new Option(value.first_name, value.id, false, false)
                        $('#select-technician').append(option)
                    });
                }
            });

            $('#select-technician').on('change', function () {
                let selectedUserId = $(this).val();
                var selectedUser = data.find(user => user.id == selectedUserId);
                if (selectedUser) {
                    $('#division').val(selectedUser.division); // Set input value to selected user's division
                } else {
                    $('#division').val(''); // Clear input if no user is selected
                }
            });
        }
    </script>

    <script type="text/javascript">
        function attachTeam() {
            let selected = $('#select-technician option:selected').val();
            if (selected == null || selected == "") {
                swal.fire("Error!", "Please select technician", "error");
                return;
            }
            let operational = $('#select-operational').val();
            console.log(selected);
            axios({
                url: "{{ route('operational.attach-team', '') }}" + '/' + operational,
                method: 'PATCH',
                data: {
                    _token: "{{ csrf_token() }}",
                    user_id: selected,
                },
            }).then(function (response) {
                console.log(response);
                $('#add-technician-modal').modal('hide');
                Swal.fire(
                    'Added!',
                    'Technician has been added.',
                    'success'
                );
                detailOperational(operational)
            }).catch(function (error) {
                console.log(error);
                swal.fire("Error!", "Please try again", "error");
            });
        }
    </script>

    <script type="text/javascript">
        function getAgendas(operational) {
            let table = $('#table-agendas').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                "bDestroy": true,
                ajax: "{{ route('operational.agenda.index', '') }}" + "/" + operational,
                columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'due_date',
                        name: 'due_date'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'id',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        render: function (data) {
                            return `
                                <div class="btn-group btn-group-sm"
                                style="float: none;">
                                <button type="button"
                                id="edit-agenda-${data}"
                                data-bs-toggle="modal"
                                data-bs-target="#add-work-modal"
                                title="Edit Operational Expenses"
                                data-id="${data}"
                                class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                onclick="editAgenda('${data}')"
                                style="background-color: #3E8BFF;">
                                <span
                                class="mdi mdi-pencil"></span>
                                </button>
                                </div>
                                <div class="btn-group btn-group-sm"
                                style="float: none;">
                                <button id="delete-button"
                                title="Hapus Operational Expenses"
                                type="button"
                                onclick="deleteAgenda('${data}')"
                                class="tabledit-edit-button btn btn-danger">
                                <span
                                class="mdi mdi-trash-can-outline"></span>
                                </button>
                                </div>
                                `
                        }
                    }
                ]
            })
        }
    </script>

    <script type="text/javascript">
        function deleteAgenda(agenda) {
            swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this action!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#f34e4e',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    axios({
                        method: 'DELETE',
                        url: "{{ route('operational.agenda.delete', '') }}" + "/" + agenda,
                        data: {
                            _token: "{{ csrf_token() }}",
                        },
                    }).then(function (response) {
                        console.log(response);
                        Swal.fire(
                            'Deleted!',
                            'Your expense has been deleted.',
                            'success'
                        )
                        $('#table-agendas').DataTable().ajax.reload();
                    }).catch(function (error) {
                        console.log(error);
                        swal.fire("Error!", "Please try again", "error");
                    })
                }
            })

        }
    </script>

    <script type="text/javascript">
        function showAgendaForm() {
            const modal = $('#add-work-modal');

            const description = modal.find('#description');
            const dueDate = modal.find('#due_date');
            const status = modal.find('#progress');
            const button = modal.find('#agendaButton');

            $('.agendasForm').parsley().reset();
            $('.agendasForm').attr('id', 'addAgenda');

            button.text('Add Agenda')
            description.val('');
            dueDate.val('');
            status.val('Planned');

        }

        function addAgenda() {
            const modal = $('#add-work-modal');
            const description = modal.find('#description').val();
            const dueDate = modal.find('#due-date').val();
            let status = $('#progress').val();
            const operational = $('#select-operational').val();
            console.log(status)

            if (!operational) {
                swal.fire("Error!", "Please select operational", "error");
                return;
            }

            axios.post("{{ route('operational.agenda.store') }}", {
                _token: "{{ csrf_token() }}",
                operational_id: operational,
                due_date: dueDate,
                description: description,
                status: status
            })
                .then(function (response) {
                    Swal.fire('Added!', 'Agenda has been added.', 'success');
                    $('#table-agendas').DataTable().ajax.reload();
                    modal.modal('hide');
                })
                .catch(function (error) {
                    console.log(error)
                    swal.fire("Error!", "Please try again", "error");
                });
        }
    </script>

    <script type="text/javascript">
        const modal = $('#add-work-modal');

        function editAgenda(agenda) {
            const button = modal.find('#agendaButton');
            button.innerHTML = 'Save Changes'

            $('.agendasForm').parsley().reset();
            $('.agendasForm').attr('id', 'updateAgenda');
            $('.agendasForm').attr('data-id', agenda);
            axios({
                method: 'GET',
                url: "{{ route('operational.agenda.show', '') }}" + "/" + agenda,
            })
                .then(function (response) {
                    modal.find('#due-date').val(response.data[0].due_date);
                    console.log(response)
                    modal.find('#description').val(response.data[0].description);
                    modal.find('#progress').val(response.data[0].status);
                    modal.find('#updateAgenda').attr("data-id", response.data[0].id)
                })
                .catch(function (error) {
                    console.log(error);
                })
        }

        function updateAgenda(agenda) {
            swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this action!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, update it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    axios({
                        method: "PATCH",
                        url: "{{ route('operational.agenda.update', '') }}" + "/" + agenda,
                        data: {
                            _token: "{{ csrf_token() }}",
                            due_date: modal.find('#due-date').val(),
                            description: modal.find('#description').val(),
                            status: modal.find('#progress').val(),
                        }
                    })
                        .then(function (response) {
                            Swal.fire(
                                'Updated!',
                                'Agenda has been updated.',
                                'success'
                            )
                            $('#table-agendas').DataTable().ajax.reload();
                            modal.modal('hide');
                        })
                        .catch(function (error) {
                            console.log(error)
                            swal.fire("Error!", "Please try again", "error");
                        })
                }
            })
        }
    </script>

    <script type="text/javascript">

        function showMaterialForm() {
            const modal = $('#add-material-modal');
            const button = modal.find('#materialButton');

            $('.materialsForm').parsley().reset();
            $('.materialsForm').attr('id', 'addMaterial');

            button.text('Add Material')

            modal.find('#memo_number').val('');
            modal.find('#do_number').val('')
        }

        async function addMaterial() {
            const operational = $('#select-operational').val();
            const modal = $('#add-material-modal');
            if (!operational) {
                swal.fire("Error!", "Please select operational", "error");
                return;
            }

            let formData = new FormData();
            formData.append('operational_id', operational);
            formData.append('_token', '{{csrf_token()}}');
            formData.append('do', modal.find('#do_number').val());
            formData.append('memo', modal.find('#memo_number').val());

            try {
                const response = await axios.post("{{route('operational.material.store')}}", formData);
                Swal.fire('Added!', 'Material has been added.', 'success');
                $('#table-material').DataTable().ajax.reload();
                modal.modal('hide');
            } catch (error) {
                console.error(error);
                swal.fire("Error!", "Please try again", "error");
            }
        }

        async function updateMaterial(material) {
            const operational = $('#select-operational').val();
            const modal = $('#add-material-modal');
            const doValue = modal.find('#do_number').val();
            const memoValue = modal.find('#memo_number').val();
            console.log(material)
            console.log('doValue:', doValue);
            console.log('memoValue:', memoValue);
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this action!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, update it!',
                cancelButtonText: 'Cancel'
            }).then(async (result) => {
                if (result.isConfirmed) {
                    try {
                        const response = await axios.patch("{{route('operational.material.update', '')}}" + "/" + material, {
                            _token: "{{ csrf_token() }}",
                            do: doValue,
                            memo: memoValue,
                        });
                        Swal.fire(
                            'Updated!',
                            'Material has been updated.',
                            'success'
                        )
                        $('#table-material').DataTable().ajax.reload();
                        modal.modal('hide');
                        console.log(response)
                    } catch (error) {
                        console.error(error);
                    }
                }
            });
        }

        function editMaterial(material) {
            const modal = $('#add-material-modal');
            const button = modal.find('#materialButton');
            button.innerHTML = 'Save Changes'

            $('.materialsForm').parsley().reset();
            $('.materialsForm').attr('id', 'updateMaterial');
            $('.materialsForm').attr('data-id', material);
            axios({
                method: 'GET',
                url: "{{ route('operational.material.show', '') }}" + "/" + material,
            })
                .then(function (response) {
                    modal.find('#do_number').val(response.data.do);
                    modal.find('#memo_number').val(response.data.memo);
                    modal.find('#updateMaterial').attr("data-id", response.data.id)
                })
                .catch(function (error) {
                    console.log(error);
                })
        }

        async function deleteMaterial(material) {
            const operational = $('#select-operational').val();
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this action!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#f34e4e',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then(async (result) => {
                if (result.isConfirmed) {
                    try {
                        const response = await axios.delete("{{route('operational.material.delete', '')}}" + "/" + material, {
                            data: {
                                _token: "{{ csrf_token() }}",
                            }
                        });
                        //check if response is success
                        if (response.data.success) {
                            Swal.fire(
                                'Deleted!',
                                'Material has been deleted.',
                                'success'
                            )
                            $('#table-material').DataTable().ajax.reload();
                        }
                    } catch (error) {
                        console.error(error);
                    }
                }
            });
        }

    </script>

@endsection
