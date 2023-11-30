@extends('sistemPenawaran.template.index')

{{-- headerscript section --}}
@section('headerScript')
    <style>
        .btn-red {
            border-radius: 10px !important;
        }

        .modal-dialog {
            max-width: 900px;
        }
    </style>
@endsection

{{-- content section --}}
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row mb-2">

                    <!-- Button trigger modal -->
                    <div class="col-sm-7 mb-3">
                        <a href="{{ $createRoute }}" class="btn btn-red w-md waves-effect waves-light mb-3 px-3"r>
                            <i class="mdi mdi-plus" title="Menambahkan Penawaran"></i>Tambah Penawaran
                        </a>
                    </div>
                    <!-- Modal -->

                    <div class="col-sm-5 mb-3">
                        <form class="app-search" action="#">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Search..."
                                        id="top-search">
                                    <button class="btn input-group-text" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div><!-- end col-->

                    {{-- card --}}

                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <!-- Card 1 -->
                            <div class="card">
                                <div class="card-body project-box">
                                    <div class="badge bg-danger float-end mx-auto font-14 ">No.SGM</div>
                                    <h4 class="mt-0"><a href="" class="text-dark">New Admin Design</a></h4>
                                    <p class="text-muted font-13 mt-1">Customers</p>

                                    <p class="text-muted font-15">Tanggal Penawaran : 01/01/2023</p>
                                    <p class="text-muted font-15">Sales : Maulana</p>
                                    <a href="{{ route('sistemPenawaran.penawaran.detail') }}">
                                        <button type="button"
                                            class="btn btn-danger rounded float-end rounded-pill">Preview</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <!-- Card 2 -->
                            <div class="card">
                                <div class="card-body project-box">
                                    <div class="badge bg-danger float-end mx-auto font-14 ">No.SGM</div>
                                    <h4 class="mt-0"><a href="" class="text-dark">New Admin Design</a></h4>
                                    <p class="text-muted font-13 mt-1">Customers</p>

                                    <p class="text-muted font-15">Tanggal Penawaran : 01/01/2023</p>
                                    <p class="text-muted font-15">Sales : Maulana</p>
                                    <a href="{{ route('sistemPenawaran.penawaran.detail') }}">
                                        <button type="button"
                                            class="btn btn-danger rounded float-end rounded-pill">Preview</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <!-- Card 3 -->
                            <div class="card">
                                <div class="card-body project-box">
                                    <div class="badge bg-danger float-end mx-auto font-14 ">No.SGM</div>
                                    <h4 class="mt-0"><a href="" class="text-dark">New Admin Design</a></h4>
                                    <p class="text-muted font-13 mt-1">Customers</p>

                                    <p class="text-muted font-15">Tanggal Penawaran : 01/01/2023</p>
                                    <p class="text-muted font-15">Sales : Maulana</p>
                                    <a href="{{ route('sistemPenawaran.penawaran.detail') }}">
                                        <button type="button"
                                            class="btn btn-danger rounded float-end rounded-pill">Preview</button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- {{-- <div class="modal fade" id="tambah-penawaran-modal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title" id="exampleModalLongTitle">Tambah Penawaran</h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6 col-xl-4">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="customerNameLeft">Project Name </label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder=" Masukan NamaProject" aria-label="Username"
                                                        id="customerNameLeft">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-6 col-xl-4">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="customerNameRight">Judul Pekerjaan</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Judul Pekerjaan"
                                                        aria-label="Username" id="customerNameRight">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-6 col-xl-4">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="customerNameRight">No RFQ</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Masukan Nomor RFQ"
                                                        aria-label="Username" id="customerNameRight">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xl-6">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="customerNameLeft">Email</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Masukan Email"
                                                        aria-label="Username" id="customerNameLeft">
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-sm-6 col-xl-6">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="customerNameRight">MSG No</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Masukan No MSG"
                                                        aria-label="Username" id="customerNameRight">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xl-4">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="customerNameLeft">Customer</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="PT"
                                                        aria-label="Username" id="customerNameLeft">
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-sm-6 col-xl-4">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="customerNameRight">Cutomer Contact Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Masukan Nama Customer"
                                                        aria-label="Username" id="customerNameRight">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-6 col-xl-4">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="customerNameRight">No.HP</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="No.Handphone"
                                                        aria-label="Username" id="customerNameRight">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xl-4">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="customerNameLeft">Tanggal Penawaran</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Tanggal Penawaran" aria-label="Username"
                                                        id="customerNameLeft">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-6 col-xl-4">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="inputStateLeft">Delivery Time </label>
                                                <select id="inputStateLeft" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>15 Hari</option>
                                                    <option>31 Hari</option>
                                                    <option>45 Hari</option>
                                                    <option>60 Hari</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-6 col-xl-4">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="customerNameLeft">Segmentasi Pasar</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Tanggal Penawaran" aria-label="Username"
                                                        id="customerNameLeft">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xl-6">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="customerNameLeft">Pelaksanaan Pekerjaan</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Masukan Pelaksanaan Pekerjaan" aria-label="Username"
                                                        id="customerNameLeft">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-6 col-xl-6">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="customerNameLeft">Syarat Pembayaran</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Masukan Syarat Pembayaran" aria-label="Username"
                                                        id="customerNameLeft">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-sm-4">
                                            <form action="">
                                                <div class="mb-3">
                                                    <label for="inputStateLeft" class="form-label">Negara</label>
                                                    <select id="inputStateLeft" class="form-select">
                                                        <option selected>Choose...</option>
                                                        <option>Indonesia</option>
                                                        <option>Amerika</option>
                                                        <option>Sunda Empire</option>
                                                        <option>Bekasi</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    <div class="col-sm-4">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="inputStateCenter" class="form-label">Provinsi</label>
                                                <select id="inputStateCenter" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>Sumatera Utama</option>
                                                    <option>Sumatera Selatan</option>
                                                    <option>Sumatera Barat</option>
                                                    <option>Riau</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-4">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="inputStateRight" class="form-label">Kota</label>
                                                <select id="inputStateRight" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>Surya</option>
                                                    <option>Zahir</option>
                                                    <option>Beruntu</option>
                                                    <option>Ashari</option>
                                                    <option>Tambunan</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xl-12">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="customerNameLeft">Alamat</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Alamat "
                                                        aria-label="Username" id="customerNameLeft">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}} -->

                <!--  Modal content for the Large example -->
                <!-- <div class="modal fade" id="tambah-penawaran-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel">Tambah Penawaran</h4>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="project-name" class="form-label">Project Name</label>
                                                                        <input type="text" class="form-control" id="project-name" name="project-name" placeholder="Name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="judul-pekerjaan" class="form-label">Judul Pekerjaan</label>
                                                                        <input type="text" class="form-control" id="judul-pekerjaan" name="judul-pekerjaan" placeholder="Judul">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="no-rfq" class="form-label">No. RFQ</label>
                                                                        <input type="text" class="form-control" id="no-rfq" name="no-rfq" placeholder="RFQ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="email" class="form-label">Email</label>
                                                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="no-msg" class="form-label">MSG No.</label>
                                                                        <input type="text" class="form-control" id="no-msg" name="no-msg" placeholder="MSG">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="customer" class="form-label">Customer</label>
                                                                        <input type="text" class="form-control" id="customer" name="customer" placeholder="Customer">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="customer-contact" class="form-label">Customer Contact Name</label>
                                                                        <input type="text" class="form-control" id="customer-contact" name="customer-contact" placeholder="Customer Contact">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="no-hp" class="form-label">No. HP</label>
                                                                        <input type="text" class="form-control" id="no-hp" name="no-hp" placeholder="No. HP">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="tanggal-penawaran" class="form-label">Tanggal Penawaran</label>
                                                                        <input type="date" class="form-control" id="tanggal-penawaran" name="tanggal-penawaran">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="delivery time" class="form-label">Delivery Time</label>
                                                                        <select class="form-select" name="delivery_time">
                                                                            <option selected="">15 Hari</option>
                                                                            <option value="1">30 Hari</option>
                                                                            <option value="2">45 Hari</option>
                                                                            <option value="3">60 Hari</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="segmentasi-pasar" class="form-label">Segmentasi Pasar</label>
                                                                        <select class="form-select" name="segemntasi_pasar">
                                                                            <option selected="">BUMN</option>
                                                                            <option value="1">Pertambangan</option>
                                                                            <option value="2">Pertanian</option>
                                                                            <option value="3">Manufaktur</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="pelaksanaan-pekerjaan" class="form-label">Pelaksanaan Pekerjaan</label>
                                                                        <input type="text" class="form-control" id="pelaksanaan-pekerjaan" name="pelaksanaan_pekerjaan" placeholder="Pelaksanaan Pekerjaan">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="syarat-pembayaran" class="form-label">Syarat Pembayaran</label>
                                                                        <input type="text" class="form-control" id="syarat-pembayaran" name="syarat_pembayaran" placeholder="Syarat Pembayaran">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="negara" class="form-label">Negara</label>
                                                                        <select class="form-select" name="negara">
                                                                            <option selected="">Indonesia</option>
                                                                            <option value="1">Malaysia</option>
                                                                            <option value="2">Singapur</option>
                                                                            <option value="3">Philipina</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="provinsi" class="form-label">Provinsi</label>
                                                                        <select class="form-select" name="provinsi">
                                                                            <option selected="">Banten</option>
                                                                            <option value="1">DKI Jakarta</option>
                                                                            <option value="2">Jawa Barat</option>
                                                                            <option value="3">Yogyakarta</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="kota" class="form-label">Kabupaten/Kota</label>
                                                                        <select class="form-select" name="kabupaten_kota">
                                                                            <option selected="">Kota Tangerang</option>
                                                                            <option value="1">Tangerang Selatan</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="">
                                                                        <label for="alamat" class="form-label">Alamat</label>
                                                                        <textarea class="form-control" id="alamat" placeholder="Alamat" name="alamat"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-danger">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->

            </div>
        </div>
    </div>
@endsection

{{-- pagescript section --}}
@section('pageScript')
@endsection
