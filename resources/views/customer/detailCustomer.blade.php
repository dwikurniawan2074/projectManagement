@extends('template.index')

{{-- headerscript section --}}
@section('headerScript')
@endsection

{{-- content section --}}
@section('content')
    <div class="content-page">
        <div class="content">


            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8">

                        {{-- card table Customer Contacts --}}
                        <div class="card">
                            <div class="card-body">
                                <div class="row table-title">
                                    <div class="col-sm-8">
                                        <h4 class="mt-0 header-title">Customer Contacts</h4>
                                    </div>
                                    <div class="col-sm-4 text-end">
                                        <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#customer-contact-modal"
                                            class="btn btn-red w-md waves-effect waves-light mb-3"><i
                                                class="mdi mdi-plus" title="Menambahkan Customer Contact"></i>Add Customer
                                            Contact</button>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table id="dataTable" class="table mb-0" data-id="{{ $id }}">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th class="text-center" width="100">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="4" align="center">Belum ada data customer contact</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Edit Customer Contact -->
                        <div class="modal fade" id="editCustomerContactModal" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true" style="overflow: hidden;">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Customer Contact</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form id="editCustomerContact" action="{{ route('customerContact.update', '') }}"
                                        method="POST" enctype="multipart/form-data" class="parsley-examples"
                                        novalidate="">
                                        @csrf
                                        @method('GET')
                                        <div class="modal-body">
                                            <input type="hidden" name="customer_id" id="customer_id">
                                            <div class="mb-3">
                                                <label for="customer_name" class="form-label">Name<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="name" class="form-control" id="customer_name"
                                                    parsley-trigger="change" required="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="customer_phone" class="form-label">Phone<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="phone" class="form-control"
                                                    id="customer_phone" parsley-trigger="change" required="">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-save waves-effect waves-light">Save
                                                changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <!-- Modal Edit Customer Contact -->
                        <div class="modal fade" id="editCustomerContactModal" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true" style="overflow: hidden;">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Customer Contact</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form id="editCustomerContact" action="{{ route('customerContact.update', '') }}"
                                        method="POST" enctype="multipart/form-data" class="parsley-examples"
                                        novalidate="">
                                        @csrf
                                        @method('GET')
                                        <div class="modal-body">
                                            <input type="hidden" name="customer_id" id="customer_id">
                                            <div class="mb-3">
                                                <label for="customer_name" class="form-label">Name<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="name" class="form-control"
                                                    id="customer_name" parsley-trigger="change" required="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="customer_phone" class="form-label">Phone<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="phone" class="form-control"
                                                    id="customer_phone" parsley-trigger="change" required="">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-save waves-effect waves-light">Save
                                                changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        {{-- card table Related Projects --}}
                        <div class="card">
                            <div class="card-body">
                                <div class="row table-title">
                                    <div class="col-12">
                                        <h4 class="mt-0 header-title">Related Projects</h4>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>SO Number</th>
                                                <th>Project Name</th>
                                                <th>Location</th>
                                                <th class="text-center" width="100">Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="5" align="center">Belum ada
                                                    project</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- card table customer data detail --}}
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="mt-0 header-title"></h4>
                                    </div>
                                </div>


                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <h4 class="mb-3">{{ $customer['companyName'] }}</h4>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <p class="title-text">Customer Contacts Total</p>
                                                    <p class="details-text">23</p>
                                                    <p class="title-text">Customer Contacts
                                                        Total</p>
                                                    <p class="details-text"></p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p class="title-text">Related Projects Total</p>
                                                    <p class="details-text">10</p>
                                                </th>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- modals operational expenses --}}
                    <form class="expensesForm" data-parsley-validate>
                        <div id="customer-contact-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                            style="overflow:hidden;">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">
                                            Customer Contacts Data</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="row">
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3 text-start">
                                                    <label for="field-1" class="form-label">Name<span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="name" placeholder="Name"
                                                        name="expense-item" parsley-trigger="change" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3 text-start">
                                                    <label for="field-2 " class="form-label">Phone Number<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="phone"
                                                        placeholder="Phone Number" name="expense-amount" parsley-trigger="change" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect"
                                                data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" class="btn btn-save waves-effect waves-light"
                                                id="expenseButton">
                                                Save
                                                changes
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal -->
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

{{-- pagescript section --}}
@section('pageScript')
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.6/r-2.5.0/sc-2.2.0/sp-2.2.0/sl-1.7.0/datatables.min.css"
        rel="stylesheet">
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.6/r-2.5.0/sc-2.2.0/sp-2.2.0/sl-1.7.0/datatables.min.js">
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            let id = $('#dataTable').data("id");
            console.log(id);
            var table = $('#dataTable').DataTable({
                autoWidth: false,
                processing: true,
                responsive: true,
                serverSide: true,
                scrollX: true,
                ajax: "{{ route('customerContact.index', '') }}" + '/' + id,
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'id',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, full, meta) {
                            console.log(full);
                            return `
                            <div class="btn-group btn-group-sm" style="float: none;">
                                <button type="button" class="tabledit-edit-button editCustomerContact btn btn-primary waves-effect waves-light"
                                value="${full.id}"
                                data-bs-toggle="modal" data-bs-target="#customer-contact-modal"
                                title="Edit Customer Contact" style="padding: 0.25rem 0.8rem;">
                                    <span class="mdi mdi-pencil"></span>
                            </div>
                            <div class="btn-group btn-group-sm" style="float: none;">
                                <button type="button" value="${full.id}" class="tabledit-edit-button deleteCustomerContact btn btn-danger waves-effect waves-light" id="sa-warning" style="padding: 0.25rem 0.8rem;" title="Hapus Customer Contact"')">
                                    <span class="mdi mdi-trash-can-outline"></span>
                                </button>
                            </div>`;
                        }
                    },
                ]
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '.deleteCustomerContact', function() {
                var id = $(this).val();
                Swal.fire({
                    title: "Anda yakin ingin menghapus?",
                    text: "Data tidak bisa dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#f34e4e',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Cancel',
                    backrop: 'static',
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Silahkan isi logika nya
                        $.ajax({
                            url: "{{ route('customerContact.destroy', '') }}/" + id,
                            type: 'DELETE',
                            data: {
                                _token: "{{ csrf_token() }}",
                            },
                            success: function(response) {
                                try {
                                    if (response.message) {
                                        Swal.fire({
                                            title: "Sukses!",
                                            text: response.message,
                                            icon: 'success',
                                            confirmButtonText: 'OK',
                                            backrop: 'static',
                                            allowOutsideClick: false
                                        }).then((hasil) => {
                                            if (hasil.isConfirmed) {
                                                window.location.reload();
                                            }
                                        });
                                    } else {
                                        console.error('Terjadi kesalahan: ' + response
                                            .error
                                        ); // Tampilkan pesan kesalahan jika ada
                                    }
                                } catch (error) {
                                    console.error(
                                        'Terjadi kesalahan saat mengolah respons: ' +
                                        error);
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error(
                                    'Terjadi kesalahan saat menghapus data: ' +
                                    error);
                            }
                        });
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $(document).on('click', '.editCustomerContact', function() {
                var id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "{{ route('customerContact.show', '') }}" + "/" + id,
                    dataType: "json",
                    success: function(response) {
                        $("#customer_id").val(response.id);
                        $("#name").val(response.name)
                        $("#phone").val(response.phone);
                        console.log(response)
                    },
                    error: function(response) {
                        alert("Error: " + response.statusText);
                    }
                });
            });
        });
    </script>
@endsection
