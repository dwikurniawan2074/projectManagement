@extends('sistemPenawaran.template.index')

@section('content')
<style>
    .custom-button {
  width: 110px; /* Atur lebar sesuai keinginan Anda */
}
</style>
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 order-md-1 order-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ asset('contoh.pdf') }}"
                                        style="width: 100%; height:869px;"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 order-md-2 order-1">
                        <div class="card">
                            <div class="card-body">
                                <div class="project-box d-flex justify-content-between">
                                    <div>
                                        <h4 class="mt-0"><a href="" class="text-dark">Project1</a></h4>
                                        <p class="text-muted font-13 mt-1">Customers</p>
                                    </div>
                                    <div class="ml-auto">
                                        <button type="button"
                                            class="btn btn-blue btn-xs waves-effect waves-light">Edit</button>
                                        <button type="button"
                                            class="btn btn-success btn-xs waves-effect waves-light">Print</button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <p class="title-text">Nomor RFQ</p>
                                                    <p class="details-text">256-001</p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p class="title-text">Nomor MSG</p>
                                                    <p class="details-text">0000/CS-TPP/x/2023</p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p class="title-text">Customer Contact Name</p>
                                                    <p class="details-text">Andre Taulany</p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p class="title-text">Email</p>
                                                    <p class="details-text">Andre123@gmail.com
                                                    </p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p class="title-text">Nomor Handphone</p>
                                                    <p class="details-text">153252532
                                                    </p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p class="title-text">Tanggal Penawaran</p>
                                                    <p class="details-text formatTanggal">00/00/00
                                                    </p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p class="title-text">Lokasi</p>
                                                    <p class="details-text formatTanggal">Provinsi-Kota
                                                    </p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p class="title-text">Alamat</p>
                                                    <p class="details-text rupiah">Jalan-Jalan Rp</p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p class="title-text">Price</p>
                                                    <p class="details-text rupiah">12.000.000 Rp
                                                    </p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="d-flex justify-content-center gap-5">

                                                        <button type="button"
                                                            class="btn btn-success rounded float-end rounded-pill custom-button">Approve <i class="fa-solid fa-check"></i></button>
                                                        <button type="button"
                                                            class="btn btn-danger rounded float-end rounded-pill custom-button">Reject <i class="fa-solid fa-xmark"></i></button>

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
@endsection
