@extends('sistemPenawaran.template.index')

@section('headerScript')
    {{-- flatepckr date time css --}}
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('sistemPenawaran.penawaran.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="project-name" class="form-label">Project Name</label>
                                                <input type="text" class="form-control" id="project-name"
                                                    name="project_name" placeholder="Name">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="judul-pekerjaan" class="form-label">Judul Pekerjaan</label>
                                                <input type="text" class="form-control" id="judul-pekerjaan"
                                                    name="judul_pekerjaan" placeholder="Judul">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="email" name="email"
                                                    placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="no-msg" class="form-label">CC</label>
                                                <input type="text" class="form-control" id="cc" name="cc"
                                                    placeholder="CC">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="no-rfq" class="form-label">MSG.</label>
                                                <input type="text" class="form-control" id="no-msg" name="no_msg"
                                                    placeholder="MSG">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="no-rfq" class="form-label">No. RFQ</label>
                                                <input type="text" class="form-control" id="no-ref" name="no_ref"
                                                    placeholder="RFQ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="customer" class="form-label">Customer</label>
                                                <input type="text" class="form-control" id="customer" name="attd"
                                                    placeholder="Customer">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="customer-contact" class="form-label">Customer Contact
                                                    Name</label>
                                                <input type="text" class="form-control" id="customer-contact"
                                                    name="customer_contact" placeholder="Customer Contact">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="no-hp" class="form-label">No. HP</label>
                                                <input type="text" class="form-control" id="no-hp" name="tel_fax"
                                                    placeholder="No. HP">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="tanggal-penawaran" class="form-label">Tanggal
                                                    Penawaran</label>
                                                <input type="date" class="form-control" id="tanggal-penawaran"
                                                    name="date">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="delivery-time" class="form-label">Delivery Time</label>
                                                <select class="form-select" name="jangka_waktu">
                                                    <option value="">--Pilih Delivery Time--</option>
                                                    <option value="1">15 Hari</option>
                                                    <option value="2">30 Hari</option>
                                                    <option value="3">45 Hari</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="segmentasi-pasar" class="form-label">Segmentasi Pasar</label>
                                                <select class="form-select" name="segmentasi_pasar">
                                                    <option value="">--Pilih Segmentasi--</option>
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
                                                <label for="pelaksanaan-pekerjaan" class="form-label">Pelaksanaan
                                                    Pekerjaan</label>
                                                <input type="text" class="form-control" id="pelaksanaan-pekerjaan"
                                                    name="pelaksanaan_pekerjaan" placeholder="Pelaksanaan Pekerjaan">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="syarat-pembayaran" class="form-label">Syarat
                                                    Pembayaran</label>
                                                <input type="text" class="form-control" id="syarat-pembayaran"
                                                    name="syarat_pembayaran" placeholder="Syarat Pembayaran">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="negara" class="form-label">Negara</label>
                                                    <select class="form-select" name="negara">
                                                        <option value="">--Pilih Negara--</option>
                                                        <option value="1">Malaysia</option>
                                                        <option value="2">Singapura</option>
                                                        <option value="3">Indonesia</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="provinsi" class="form-label">Provinsi</label>
                                                    <select class="form-select" name="provinsi">
                                                        <option value="">--Pilih Provinsi--</option>
                                                        <option value="DKI Jakarta">DKI Jakarta</option>
                                                        <option value="Banten">Banten</option>
                                                        <option value="Yogyakarta">Yogyakarta</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="kota" class="form-label">Kabupaten/Kota</label>
                                                    <select class="form-select" name="kota">
                                                        <option value="">--Pilih Kota/Kabupaten--</option>
                                                        <option value="Tangerang">Kota Tangerang</option>
                                                        <option value="Tangerang Selatan">Tangerang Selatan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="">
                                                    <label for="alamat" class="form-label">Alamat</label>
                                                    <textarea rows="5" class="form-control" id="alamat" placeholder="Alamat" name="alamat"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <button type="submit">knt</button> --}}
                                        <div class="text-end mt-3">
                                            <a href="{{ route('sistemPenawaran.penawaran.index') }}"
                                                class="btn btn-secondary waves-effect">Cancel</a>
                                            <button class="btn btn-red waves-effect waves-light px-4" type="submit"
                                                id="submitButton">Save</button>
                                        </div>
                                </form>
                                {{-- <button type="button" onclick="test()">Ping</button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('pageScript')
        <script>
            function directTemp(id) {
                const target = "{{ route('sistemPenawaran.penawaran.detail', ':id') }}";
                target = target.replace(':id', id);
                console.log('success');
                window.location.href = target;
            }
        </script>
    @endsection
