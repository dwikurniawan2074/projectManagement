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
                                    <h4 class="mt-0 header-title">PT Polytama Propindo</h4>
                                    <p class="text-muted font-14 mb-0">
                                        PT Polytama Propindo
                                    </p>
                                    <p class="text-muted font-14 mb-3">
                                        KALIMANTAN PABRIK 6
                                    </p>
                                </div>
                                <div class="col-5 text-end">
                                    <div class="btn-group btn-group-sm" style="float: none;">
                                        <button title="Edit Project" type="button"
                                                class="tabledit-edit-button btn btn-info waves-effect waves-light">
                                            <span class="mdi mdi-printer"></span>
                                        </button>
                                    </div>
                                    <div class="btn-group btn-group-sm" style="float: none;">
                                        <form
                                            action=""
                                            method="POST">
                                            @csrf
                                            @method('GET')
                                            <button type="submit" title="Edit Project"
                                                    class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                                    style="background-color: #3E8BFF; padding: 0.28rem 0.8rem;">
                                                <span class="mdi mdi-pencil"></span>
                                            </button>
                                        </form>

                                    </div>
                                    <div class="btn-group btn-group-sm" style="float: none;">
                                        <form
                                            action=""
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button title="Delete Project" type="submit"
                                                    class="tabledit-hapus-button btn btn-danger" value="">
                                                <span class="mdi mdi-trash-can-outline"></span>
                                            </button>
                                        </form>
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
                                            <p class="details-text">2023-12-08</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <p class="title-text">Nomor MSG</p>
                                            <p class="details-text">1521/CS–TPP/IX/2023
                                            </p>
                                        </th>
                                    </tr>
                                    {{-- <tr>
                                        <th scope="row">
                                            <p class="title-text">Customer Contact Name</p>
                                            <p class="details-text">{{ $penawaran->customer }}</p>
                                        </th>
                                    </tr> --}}
                                    <tr>
                                        <th scope="row">
                                            <p class="title-text">Email</p>
                                            <p class="details-text">polytama@gmail.com</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <p class="title-text">No. HP</p>
                                            <p class="details-text">08215568989</p>
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
            </div>
        </div>
    </div>
</div>
</div>
@endsection

{{-- pagescript section --}}
@section('pageScript')
@endsection