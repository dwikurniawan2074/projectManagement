@extends('sistemPenawaran.template.index')

{{-- headerscript section --}}
@section('headerScript')
<style>
    .custom-button {
        width: 110px;
        /* Atur lebar sesuai keinginan Anda */
    }

    /* Gaya default tombol */
    .btn {
        margin-right: 1px;
        /* Jarak default antara tombol */
    }

    .details-text {
            margin-bottom: unset;
        }

        .title-text {
            margin-bottom: unset;
            font-weight: 100;
        }

    /* Gaya tambahan saat mode responsif */
    @media (max-width: 767px) {
        .btn {
            margin-bottom: 10px;
            /* Tambahkan jarak pada mode responsif */
            margin-right: 0;
            /* Hapus jarak di samping */
            display: block;
            /* Set tombol sebagai blok untuk tata letak vertikal */
        }
    }
</style>
@endsection

{{-- content section --}}
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 order-md-1 order-2">
                    <div class="card">
                        <div class="card-body" style="padding: 0.7rem;">
                            <div class="embed-responsive embed-responsive-16by9">
                                {{-- @dd($penawaran->id) --}}
                                <iframe class="embed-responsive-item" src="{{ route('sistemPenawaran.penawaran.document', ['id' => $penawaran->id] ) }}" 
                                    style="width:100%; height:700px; border-radius: 5px;" sandbox="allow-same-origin allow-scripts"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 order-md-2 order-1">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <h4 class="mt-0 header-title">{{ $penawaran->project_name }}</h4>
                                    <p class="text-muted font-14 mb-0">
                                        {{ $penawaran->attd }}
                                    </p>
                                    <p class="text-muted font-14 mb-3">
                                        {{ $penawaran->alamat }}
                                    </p>
                                </div>
                                <div class="col-5 text-end">
                                    <div class="btn-group btn-group-sm" style="float: none;">
                                        <div class="btn-group btn-group-sm" style="float: none;">
                                            <a
                                                href="{{ route('sistemPenawaran.penawaran.document', ['id' => $penawaran->id]) }}">
                                                <button title="Preview Penawaran" type="button"
                                                    style="padding: 0.28rem 0.8rem;"
                                                    class="tabledit-edit-button btn btn-info waves-effect waves-light">
                                                    <span class="mdi mdi-printer"></span>
                                                </button>
                                            </a>
                                        </div>
                                        <form
                                            action="{{ route('sistemPenawaran.penawaran.edit', ['id' => $penawaran->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('GET')
                                            <a href="">
                                                <button type="submit" title="Edit Penawaran"
                                                        class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                                        style="background-color: #3E8BFF; padding: 0.28rem 0.8rem;">
                                                    <span class="mdi mdi-pencil"></span>
                                                </button>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="btn-group btn-group-sm" style="float: none;">
                                        <button title="Delete Penawaran" type="submit" style="padding: 0.28rem 0.8rem;"
                                                class="tabledit-edit-button btn btn-danger hapusPenawaran" value="{{ $penawaran->id }}">
                                            <span class="mdi mdi-trash-can-outline"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            <p class="title-text">Tanggal Penawaran</p>
                                            <p class="details-text">{{ $penawaran->date }}</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <p class="title-text">Nomor MSG</p>
                                            <p class="details-text">{{ $penawaran->no_msg }}
                                            </p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <p class="title-text">Email</p>
                                            <p class="details-text">{{ $penawaran->email }}</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <p class="title-text">No. HP</p>
                                            <p class="details-text">{{ $penawaran->tel_fax }}</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <p class="title-text">Total</p>
                                            <p class="details-text">Rp. 150.000.000</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <p class="title-text">Status</p>
                                            <p class="details-text">
                                                @if ($penawaran->status == 'waiting')
                                                    <span class="badge bg-warning">Waiting</span>
                                                @elseif ($penawaran->status == 'approved')
                                                    <span class="badge bg-success">Approved</span>
                                                @elseif ($penawaran->status == 'rejected')
                                                    <span class="badge bg-danger">Rejected</span>
                                                @endif
                                            </p>
                                        </th>
                                    </tr>
                                    @if ($penawaran->status != 'approved')
                                        @if ($penawaran->status == 'rejected')

                                            <tr>
                                                <th scope="row" class="text-center">
                                                    <div class="btn-group btn-group-sm me-3" style="float: none;">
                                                        <button title="Approve Penawaran" type="submit" style="padding: 0.28rem 0.8rem;"
                                                                class="tabledit-edit-button btn btn-danger" 
                                                                data-bs-toggle="modal" data-bs-target="#notes-modal">
                                                            <span class="mdi mdi-notes"></span>
                                                            See Rejected Notes
                                                        </button>
                                                    </div>
                                                </th>
                                            </tr>
                                        @else
                                            <tr>
                                                <th scope="row" class="text-center">
                                                    <div class="btn-group btn-group-sm me-3" style="float: none;">
                                                        <button title="Approve Penawaran" type="submit" style="padding: 0.28rem 0.8rem;"
                                                                class="tabledit-edit-button btn btn-success approvePenawaran" value="{{ $penawaran->id }}">
                                                            Approve
                                                            <span class="mdi mdi-check-all"></span>
                                                        </button>
                                                    </div>
                                                    <div class="btn-group btn-group-sm" style="float: none;">
                                                        <button title="Reject Penawaran" type="submit" style="padding: 0.28rem 0.8rem;"
                                                                class="tabledit-edit-button btn btn-danger rejectPenawaran" value="{{ $penawaran->id }}">
                                                            Reject
                                                            <span class="mdi mdi-close-thick"></span>
                                                        </button>
                                                    </div>
                                                </th>
                                            </tr>
                                        @endif
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- modals rejected notes --}}
                <form class="expensesForm" data-parsley-validate>
                    <div id="notes-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                        style="overflow:hidden;">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">
                                        Rejected Notes</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="row">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3 text-start">
                                                <label for="field-1" class="form-label">Note<span class="text-danger">*</span>
                                                </label>
                                                @if ($penawaran->status == 'rejected') 
                                                    <textarea class="form-control" name="notes" id="notes" cols="30" rows="5" readonly disabled>{{ $penawaran->note }}</textarea>
                                                @else
                                                    <textarea class="form-control" name="notes" id="notes" cols="30" rows="5"></textarea>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        @if ($penawaran->status != 'rejected')
                                            <button type="submit" class="btn btn-danger waves-effect waves-light" id="expenseButton">
                                                Send
                                            </button>
                                        @endif
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
</div>
@endsection

{{-- pagescript section --}}
@section('pageScript')

{{-- function reject penawaran --}}
<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click', '.rejectPenawaran', function () {
            var id = $(this).val();

            // Display a confirmation dialog
            Swal.fire({
                title: "Anda yakin",
                text: "Ingin reject penawaran ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#f34e4e',
                confirmButtonText: 'Ya, Reject!',
                cancelButtonText: 'Cancel',
                backrop: 'static',
                allowOutsideClick: false
            }).then((result) => {
                if (result.isConfirmed) {
                    // Show the "Rejected Notes" modal
                    Swal.fire({
                    title: 'Rejected Notes',
                    input: 'textarea',
                    inputLabel: 'Alasan Penolakan',
                    inputPlaceholder: 'Masukkan alasan penolakan...',
                    inputAttributes: {
                        'aria-label': 'Masukkan alasan penolakan'
                    },
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Reject',
                    cancelButtonText: 'Cancel',
                    preConfirm: (notes) => {
                        // Set the status attribute to 'rejected' and store notes
                        $.ajax({
                            url: "{{ route('sistemPenawaran.penawaran.updateStatus', '') }}" + '/' + id,
                            type: 'PUT', // Use PUT method for update
                            data: {
                                _token: "{{ csrf_token() }}",
                                status: 'rejected',
                                notes: notes // Send the rejected notes
                            },
                            success: function (response) {
                                try {
                                    if (response.message) {
                                        Swal.fire({
                                            title: "Sukses!",
                                            text: response.message,
                                            icon: 'success',
                                            confirmButtonText: 'OK'
                                        }).then((hasil) => {
                                            if (hasil.isConfirmed) {
                                                window.location.href = "{{ route('sistemPenawaran.approval.index') }}";
                                            }
                                        });
                                    } else {
                                        console.error('Terjadi kesalahan: ' + response.error);
                                    }
                                } catch (error) {
                                    console.error('Terjadi kesalahan saat mengolah respons: ' + error);
                                }
                            },
                            error: function (xhr, status, error) {
                                console.error('Terjadi kesalahan saat mengirim data: ' + error);
                            }
                        });
                    }
                });
                }
            });
        });
    });
</script>

{{-- function approve penawaran --}}
<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click', '.approvePenawaran', function () {
            var id = $(this).val();

            // Display a confirmation dialog
            Swal.fire({
                title: "Anda yakin",
                text: "Ingin approve penawaran ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#f34e4e',
                confirmButtonText: 'Ya, Approve!',
                cancelButtonText: 'Cancel',
                backrop: 'static',
                allowOutsideClick: false
            }).then((result) => {
                if (result.isConfirmed) {
                    // Update status to 'approved' via AJAX
                    $.ajax({
                        url: "{{ route('sistemPenawaran.penawaran.updateStatus', '') }}" + '/' + id,
                        type: 'POST', // Use PUT method for update
                        data: {
                            _token: "{{ csrf_token() }}",
                            _method: 'PUT', // Set the method to PUT
                            status: 'approved'
                        },
                        success: function (response) {
                            try {
                                if (response.message) {
                                    Swal.fire({
                                        title: "Sukses!",
                                        text: response.message,
                                        icon: 'success',
                                        confirmButtonText: 'OK'
                                    }).then((hasil) => {
                                        if (hasil.isConfirmed) {
                                            window.location.href = "{{ route('sistemPenawaran.approval.index') }}";
                                        }
                                    });
                                } else {
                                    console.error('Terjadi kesalahan: ' + response.error);
                                }
                            } catch (error) {
                                console.error('Terjadi kesalahan saat mengolah respons: ' + error);
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error('Terjadi kesalahan saat mengirim data: ' + error);
                        }
                    });
                }
            });
        });
    });

</script>
@endsection