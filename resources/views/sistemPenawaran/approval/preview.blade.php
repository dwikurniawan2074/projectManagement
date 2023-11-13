@extends('sistemPenawaran.template.index')

{{-- headerscript section --}}
{{-- content section --}}
@section('content')
<style>
    .custom-button {
  width: 110px; /* Atur lebar sesuai keinginan Anda */
}
    /* Gaya default tombol */
    .btn {
        margin-right: 10px; /* Jarak default antara tombol */
    }

    /* Gaya tambahan saat mode responsif */
    @media (max-width: 767px) {
        .btn {
            margin-bottom: 10px; /* Tambahkan jarak pada mode responsif */
            margin-right: 0; /* Hapus jarak di samping */
            display: block; /* Set tombol sebagai blok untuk tata letak vertikal */
        }
    }

</style>    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 order-md-1 order-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ asset('contoh.pdf') }}"
                                        style="width:100%; height:700px;"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 order-md-2 order-1">
                        <div class="card">
                            <div class="card-body">
                                <div class="project-box d-flex justify-content-between">
                                    <div>
                                        <h4 class="mt-0"><a href="" class="text-dark ">PT.Apapun</a></h4>
                                        <p class="text-muted font-13 mb-1 mt-2">Penawaran1</p>
                                        <p class="text-muted font-13 mt-1">Jalan-Jalan ketangerang </p>
                                    </div>
                                    <div class="ml-auto">
                                        <button type="button" class="btn btn-blue btn-xs waves-effect waves-light">Edit
                                        </button>
                                        <button type="button" class="btn btn-success btn-xs waves-effect waves-light">Print
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <p class="title-text">Nomor MSG</p>
                                                    <p class="details-text">0000/CS-TPP/x/2023</p>
                                                </th>
                                                <th scope="row">
                                                    <p class="title-text">Tanggal Penawaran</p>
                                                    <p class="details-text formatTanggal">00/00/00
                                                    </p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="2">
                                                    <p class="title-text">Customer Contaact Name</p>
                                                    <p class="details-text">Partogi P Simatupang</p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="2">
                                                    <p class="title-text">Email</p>
                                                    <p class="details-text">Ogi@gmail.com</p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="2">
                                                    <p class="title-text">No.Hp</p>
                                                    <p class="details-text">1234556
                                                    </p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="2">
                                                    <p class="title-text">Rupiah</p>
                                                    <p class="details-text">Rp.14.000.000
                                                    </p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="2">
                                                    <p class="title-text mb-1">Status</p>
                                                    <p class="details-text font-20 "><span class="badge bg-warning" >Waiting</span></td>
                                                    </p>
                                                </th>
                                            </tr>
                                            <th colspan="3" class="text-center">
                                                <button type="button" class="btn btn-success width-lg waves-effect waves-light rounded-pill"><i class="mdi mdi-check-all"></i>Approve</button>
                                                <button type="button" class="btn btn-danger width-lg waves-effect waves-light rounded-pill"><i class="mdi mdi-close-circle-outline"></i>Approve</button>
                                            </th>
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
