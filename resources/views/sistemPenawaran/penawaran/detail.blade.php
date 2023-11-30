@extends('sistemPenawaran.template.index')

@section('headerScript')
<style>
    .btn-red {
        border-radius: 5px !important;
        width: 150px;
    }

    button {
        border-radius: 5px !important;
    }

    .details-text {
        margin-bottom: unset;
    }

    .title-text {
        margin-bottom: unset;
        font-weight: 100;
    }

    #layanan-modals .modal-content {
        max-height: 700px; /* Adjust the height as needed */
        overflow-y: auto; /* Enable vertical scrolling */
        overflow-x: hidden;
    }

    .sub-layanan-item{
        border-bottom: 1px solid #DEE2E6 !important;
    }

    .dropdown-toggle{
        border: 1px solid #DEE2E6 !important;
    }
</style>
@endsection

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-8">

                    {{-- card table Trafo --}}
                    <div class="card">
                        <div class="card-body">
                            <div class="row table-title">
                                <div class="col-sm-8">
                                    <h4 class="mt-0 header-title">Trafo</h4>
                                </div>
                                <div class="col-sm-4 text-end">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#trafo-modals" 
                                    class="btn btn-red w-md waves-effect waves-light mb-3"><i class="mdi mdi-plus">
                                        </i>Add Trafo</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Merk</th>
                                            <th>Capacity</th>
                                            <th>No. Seri</th>
                                            <th>Tahun</th>
                                            <th class="text-center" width="160">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($trafo->isEmpty())
                                        <tr>
                                            <td colspan="6" align="center">Belum ada Trafo</td>
                                        </tr>
                                        @endif
                                        @php($index = 1)
                                        @foreach ($trafo as $trf)
                                        <tr>
                                            <td>{{ $index++ }}</td>
                                            <td>{{ $trf['merk'] }}</td>
                                            <td>{{ $trf['capacity'] }}</td>
                                            <td>{{ $trf['no_seri'] }}</td>
                                            <td>{{ $trf['tahun'] }}</td>
                                            <td>
                                                <div class="d-flex gap-1 justify-content-center">
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#trafo-modals"  value="{{ $trf['id'] }}"
                                                        class="btn btn-primary btn-xs waves-effect waves-light rounded-pill trafoEdit">edit</button>
                                                    <button type="button" value="{{ $trf['id'] }}"
                                                        class="btn btn-danger btn-xs waves-effect waves-light rounded-pill hapusTrafo">Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    {{-- card table Layanan --}}
                    <div class="card">
                        <div class="card-body">
                            <div class="row table-title">
                                <div class="col-sm-8">
                                    <h4 class="mt-0 header-title">Layanan</h4>
                                </div>
                                <div class="col-sm-4 text-end">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#layanan-modals"
                                    class="btn btn-red w-md waves-effect waves-light mb-3">
                                    <iclass="mdi mdi-plus"></iclass=>Add Layanan</button>
                                </div>
                            </div>
                            <div class="table-responsive" style="overflow-x: unset;">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Trafo</th>
                                            <th>Nama</th>
                                            <th>Sub Layanan</th>
                                            <th class="text-center" width="160">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- <tr>
                                            <td colspan="6" align="center">Belum ada payment</td>
                                        </tr> --}}
                                        <tr>
                                            <td>1</td>
                                            <td>TRX192832</td>
                                            <td>Maintenance</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Basic Maintenance <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-item sub-layanan-item" >Basic Maintenance</div>
                                                        <div class="dropdown-item sub-layanan-item" >Full Maintenance</div>
                                                        <div class="dropdown-item sub-layanan-item" >Additional Maintenance</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center" width="160">
                                                <div class="d-flex gap-1 justify-content-center">
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#layanan-modals"
                                                        class="btn btn-primary btn-xs waves-effect waves-light rounded-pill">edit</button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-xs waves-effect waves-light rounded-pill hapusLayanan">Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>TRX192832</td>
                                            <td>Maintenance</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Basic Maintenance <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-item sub-layanan-item" >Basic Maintenance</div>
                                                        <div class="dropdown-item sub-layanan-item" >Full Maintenance</div>
                                                        <div class="dropdown-item sub-layanan-item" >Additional Maintenance</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center" width="160">
                                                <div class="d-flex gap-1 justify-content-center">
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#layanan-modals"
                                                        class="btn btn-primary btn-xs waves-effect waves-light rounded-pill">edit</button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-xs waves-effect waves-light rounded-pill hapusLayanan">Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>TRX192832</td>
                                            <td>Maintenance</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Basic Maintenance <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-item sub-layanan-item" >Basic Maintenance</div>
                                                        <div class="dropdown-item sub-layanan-item" >Full Maintenance</div>
                                                        <div class="dropdown-item sub-layanan-item" >Additional Maintenance</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center" width="160">
                                                <div class="d-flex gap-1 justify-content-center">
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#layanan-modals"
                                                        class="btn btn-primary btn-xs waves-effect waves-light rounded-pill">edit</button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-xs waves-effect waves-light rounded-pill hapusLayanan">Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    {{-- card table Syarat Ketentuan --}}
                    <div class="card">
                        <div class="card-body">
                            <div class="row table-title">
                                <div class="col-sm-8">
                                    <h4 class="mt-0 header-title">Syarat Ketentuan</h4>
                                </div>
                                <div class="col-sm-4 text-end">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#syarat-modals"
                                    class="btn btn-red w-md waves-effect waves-light mb-3"><i
                                            class="mdi mdi-plus"></i>Add Syarat</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Description</th>
                                            <th class="text-center" width="160">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- <tr>
                                            <td colspan="6" align="center">Belum ada payment</td>
                                        </tr> --}}
                                        <tr>
                                            <td width="80">1</td>
                                            <td>Harga Belum Termasuk PPN</td>
                                            <td class="text-center" width="160">
                                                <div class="d-flex gap-1 justify-content-center">
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#syarat-modals"
                                                        class="btn btn-primary btn-xs waves-effect waves-light rounded-pill">edit</button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-xs waves-effect waves-light rounded-pill hapusSyarat">Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="80">2</td>
                                            <td>Harga Belum Termasuk PCR test bila diperlukan</td>
                                            <td class="text-center" width="160">
                                                <div class="d-flex gap-1 justify-content-center">
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#syarat-modals"
                                                        class="btn btn-primary btn-xs waves-effect waves-light rounded-pill">edit</button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-xs waves-effect waves-light rounded-pill hapusSyarat">Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="80">3</td>
                                            <td>Harga Belum Termasuk Alat Bantu, Alat Berat dan Helper</td>
                                            <td class="text-center" width="160">
                                                <div class="d-flex gap-1 justify-content-center">
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#syarat-modals"
                                                        class="btn btn-primary btn-xs waves-effect waves-light rounded-pill">edit</button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-xs waves-effect waves-light rounded-pill hapusSyarat">Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="80">4</td>
                                            <td>Harga Belum Termasuk PPN</td>
                                            <td class="text-center" width="160">
                                                <div class="d-flex gap-1 justify-content-center">
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#syarat-modals"
                                                        class="btn btn-primary btn-xs waves-effect waves-light rounded-pill">edit</button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-xs waves-effect waves-light rounded-pill hapusSyarat">Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <h4 class="mt-0 header-title">Trafindo Projects</h4>
                                    <p class="text-muted font-14 mb-0">
                                        PT Trafoindo Prima Perkasa
                                    </p>
                                    <p class="text-muted font-14 mb-3">
                                        Jl. Prabusiliwangi No.14
                                    </p>
                                </div>
                                <div class="col-5 text-end">
                                    <div class="btn-group btn-group-sm" style="float: none;">
                                            <button title="Edit Project" type="button"
                                                class="tabledit-edit-button btn btn-info waves-effect waves-light"
                                                >
                                                <span class="mdi mdi-printer"></span>
                                            </button>
                                    </div>
                                    <div class="btn-group btn-group-sm" style="float: none;">
                                        <a href="{{ route('sistemPenawaran.penawaran.create') }}">
                                            <button type="button" title="Edit Project" type="button"
                                                class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                                style="background-color: #3E8BFF; padding: 0.28rem 0.8rem;" onclick="{{ route('sistemPenawaran.penawaran.create') }}">
                                                <span class="mdi mdi-pencil"></span>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="btn-group btn-group-sm" style="float: none;">
                                        <button title="Delete Project" type="button"
                                            class="tabledit-edit-button hapusPenawaran btn btn-danger" value="">
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
                                                <p class="details-text">23/11/2023</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Nomor MSG</p>
                                                <p class="details-text">0000/CS-TPP/x/2023
                                                </p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Customer Contact Name</p>
                                                <p class="details-text">Andria Wijaya</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Email</p>
                                                <p class="details-text">andria.wijaya@gmailc.com</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">No. HP</p>
                                                <p class="details-text">088999665474</p>
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
                                                    <span class="badge bg-warning">Waiting</span>
                                                </p>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

                @include('sistemPenawaran.penawaran.listmodals')

            </div>
        </div>
    </div>
</div>

@endsection

@section('pageScript')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#check6').on('click', function() {
            if ($(this).is(':checked')) {
                $('#syarat-lain-row').show();
                $('#addSyarat').show();
            } else {
                $('#syarat-lain-row').hide();
                $('#addSyarat').hide();
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#addSubLayanan').on('click', function() {
            // Clone the existing row
            var newRow = $('.sub-layanan-list .row.mb-3').first().clone();

            // Clear input values in the cloned row if needed
            newRow.find('input, select').val('');

            // Append the cloned row to the list
            $('.sub-layanan-list').append(newRow);
        });

        // Remove sub layanan row
        $(document).on('click', '.removeRow', function() {
            var rowCount = $('.sub-layanan-list .row.mb-3').length;
            if (rowCount > 1) {
                $(this).closest('.row.mb-3').remove();
            }
        });


        // Handle modal close event
        $('#layanan-modals').on('hidden.bs.modal', function() {
            var rowCount = $('.sub-layanan-list .row.mb-3').length;
            if (rowCount === 0) {
                // If no rows are left, add a default row
                var newRow = $('.sub-layanan-list .row.mb-3').first().clone();
                $('.sub-layanan-list').append(newRow);
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#check6').on('change', function() {
            if ($(this).is(':checked')) {
                $('#addSyarat').show(); // Show the "Add Syarat" button if checkbox is checked
            } else {
                $('#addSyarat').hide(); // Hide the button if checkbox is unchecked
            }
        });

        $('#addSyarat').on('click', function() {
            var newSyaratRow = $('#syarat-lain-row').clone().removeAttr('id').show();
            $('.syarat-lain-list').append(newSyaratRow);
        });

        $(document).on('click', '.removeSyarat', function() {
            var rowCount = $('.syarat-lain-list .row').length;
            if (rowCount > 1) {
                $(this).closest('.row').remove();
            }
        });
    });
</script>

{{-- function hapus penawaran--}}
<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '.hapusPenawaran', function() {
            var id = $(this).val();

            // Display a confirmation dialog
            Swal.fire({
                title: "Anda yakin?",
                text: "Data tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#f34e4e',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel',
                backrop: 'static',
                allowOutsideClick: false
            }).then((result) => {
                // silahkan tulis logika nya disini xixixixi
            });
        });
    });
</script>

{{-- function hapus trafo--}}
<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '.hapusTrafo', function() {
            var id = $(this).val();

            // Display a confirmation dialog
            Swal.fire({
                title: "Anda yakin?",
                text: "Data tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#f34e4e',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel',
                backdrop: 'static',
                allowOutsideClick: false
            }).then((result) => {
                // silahkan tulis logika nya disini xixixixi
                if (result.isConfirmed) {
                        // Silahkan isi logika nya sendiri xixixi
                        $.ajax({
                            url: "{{ route('sistemPenawaran.trafo.destroy', '') }}" + '/' + id,
                            type: 'DELETE',
                            data: {
                                _token: "{{ csrf_token() }}",
                            },
                            success: function(response) {
                                console.log('success');
                                try {
                                    if (response.message) {
                                        Swal.fire({
                                            title: "Sukses!",
                                            text: response.message,
                                            icon: 'success',
                                            confirmButtonText: 'OK'
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

{{-- function hapus layanan--}}
<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '.hapusLayanan', function() {
            var id = $(this).val();

            // Display a confirmation dialog
            Swal.fire({
                title: "Anda yakin?",
                text: "Data tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#f34e4e',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel',
                // backrop: 'static',
                allowOutsideClick: false
            }).then((result) => {
                // silahkan tulis logika nya disini xixixixi
            });
        });
    });
</script>

{{-- function hapus layanan--}}
<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '.hapusSyarat', function() {
            var id = $(this).val();

            // Display a confirmation dialog
            Swal.fire({
                title: "Anda yakin?",
                text: "Data tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#f34e4e',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel',
                backrop: 'static',
                allowOutsideClick: false
            }).then((result) => {
                // silahkan tulis logika nya disini xixixixi
            });
        });
    });
</script>

{{-- Trafo edit --}}
<script>
    $(document).ready(function() {
        $(document).on('click', '.trafoEdit', function() {
            var id = $(this).val(); // Menggunakan data-id yang baru
            $.ajax({
                type: "GET",
                url: "{{ route('sistemPenawaran.trafo.show', '') }}" + "/" + id,
                dataType: "json",
                success: function(response) {
                    $("#id_penawaran").val(response.id);
                    $("#merk").val(response.merk);
                    $("#capacity").val(response.capacity);
                    $("#no_seri").val(response.no_seri);
                    $("#tahun").val(response.tahun);
                },
                error: function(response) {
                    alert("Error: " + response.statusText);
                }
            });
        });

        // Delete value on customer contact modal when its closed
        $('#trafo-modals').on('hidden.bs.modal', function (e) {
                $("#id_penawaran").val('');
                $("#merk").val('');
                $("#capacity").val('');
                $("#no_seri").val('');
                $("#tahun").val('');
            });
    });
</script>
@endsection