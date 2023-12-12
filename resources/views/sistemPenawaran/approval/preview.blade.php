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
                                <iframe class="embed-responsive-item" src="{{ asset('contoh.pdf') }}" style="width:100%; height:700px; border-radius: 5px;"></iframe>
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
                                                <span class="badge bg-warning">Waiting</span>
                                            </p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center">
                                            <div class="btn-group btn-group-sm me-3" style="float: none;">
                                                <button title="Approve Penawaran" type="submit" style="padding: 0.28rem 0.8rem;"
                                                        class="tabledit-edit-button btn btn-success hapusPenawaran" >
                                                    Approve
                                                    <span class="mdi mdi-check-all"></span>
                                                </button>
                                            </div>
                                            <div class="btn-group btn-group-sm" style="float: none;">
                                                <button title="Reject Penawaran" type="submit" style="padding: 0.28rem 0.8rem;"
                                                        class="tabledit-edit-button btn btn-danger hapusPenawaran" >
                                                    Reject
                                                    <span class="mdi mdi-close-thick"></span>
                                                </button>
                                            </div>
                                        </th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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

{{-- function hapus penawaran --}}
<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click', '.hapusPenawaran', function () {
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
                if (result.isConfirmed) {
                    // Silahkan isi logika nya sendiri xixixi
                    $.ajax({
                        url: "{{ route('sistemPenawaran.penawaran.destroy', '') }}" + '/' + id,
                        type: 'DELETE',
                        data: {
                            _token: "{{ csrf_token() }}",
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
                                            window.location.href =
                                                "{{ route('sistemPenawaran.penawaran.index') }}";
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
                        error: function (xhr, status, error) {
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
@endsection