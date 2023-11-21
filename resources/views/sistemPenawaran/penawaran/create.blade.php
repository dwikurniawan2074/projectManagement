@extends('sistemPenawaran.template.index')

@section('headerScript')
@endsection

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
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
                                            <select class="form-select">
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
                                            <select class="form-select">
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
                                            <input type="text" class="form-control" id="pelaksanaan-pekerjaan" name="pelaksanaan-pekerjaan" placeholder="Pelaksanaan Pekerjaan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="syarat-pembayaran" class="form-label">Syarat Pembayaran</label>
                                            <input type="text" class="form-control" id="syarat-pembayaran" name="syarat-pembayaran" placeholder="Syarat Pembayaran">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="negara" class="form-label">Negara</label>
                                            <select class="form-select">
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
                                            <select class="form-select">
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
                                            <select class="form-select">
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
                                            <textarea class="form-control" id="alamat" placeholder="Alamat"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end mt-3">
                                    <a href="{{ route('sistemPenawaran.penawaran.index') }}">
                                        <button type="button" class="btn btn-secondary waves-effect"
                                            onclick="">Cancel</button>
                                    </a>
                                    <button class="btn btn-red waves-effect waves-light px-4" type="button"
                                        onclick="directTemp()">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pageScript')
<script>
    function directTemp(){
        const target = "{{ route('sistemPenawaran.penawaran.detail') }}";
        console.log('susces');
        window.location.href = target;
    }
</script>
@endsection