@extends('sistemPenawaran.template.index')

{{-- headerscript section --}}
@section('headerScript')
@endsection

{{-- content section --}}
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <div class="d-flex align-items-center ">
                <div class="col-xl-8 col-md-6 order-md-1 order-2 ">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe class="embed-responsive-item" src="{{asset('contoh.pdf')}}"  style="width: 100%; height: 100%;"></iframe>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 order-md-2 order-1">
                    <div class="card">
                        <div class="card-body">
                            <div class="project-box d-flex justify-content-between">
                                <div>
                                    <h4 class="mt-0"><a href="" class="text-dark">Project1</a></h4>
                                    <p class="text-muted font-13 mt-1">Customers</p>
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
                                                <p class="title-text">Price</p>
                                                <p class="details-text rupiah">10.000.000 Rp</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Status</p>
                                                <p class="details-text rupiah">Waiting To Approve
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
@endsection

{{-- pagescript section --}}
@section('pageScript')
@endsection