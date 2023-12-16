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
                                <form action="{{ route('sistemPenawaran.penawaran.update', $penawaran->id) }}"
                                    class="parsley-examples" novalidate="" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="project-name" class="form-label">Project Name<span
                                                    class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="project-name"
                                                    name="project_name" placeholder="Name" parsley-trigger="change" required=""
                                                    value="{{ $penawaran->project_name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="judul-pekerjaan" class="form-label">Judul Pekerjaan<span
                                                    class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="judul-pekerjaan"
                                                    name="judul_pekerjaan" placeholder="Judul" parsley-trigger="change" required=""
                                                    value="{{ $penawaran->judul_pekerjaan }}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email<span
                                                    class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="email" name="email"
                                                    placeholder="Email" value="{{ $penawaran->email }}" parsley-trigger="change" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="no-msg" class="form-label">CC<span
                                                    class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="cc" name="cc"
                                                    placeholder="CC" value="{{ $penawaran->cc }}" parsley-trigger="change" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="no-rfq" class="form-label">No.MSG<span
                                                    class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="no-msg" name="no_msg"
                                                    placeholder="MSG" value="{{ $penawaran->no_msg }}" parsley-trigger="change" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="no-rfq" class="form-label">No.RFQ<span
                                                    class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="no-ref" name="no_ref"
                                                    placeholder="RFQ" value="{{ $penawaran->no_ref }}" parsley-trigger="change" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="customer" class="form-label">Customer<span
                                                    class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="customer" name="attd"
                                                    placeholder="Customer" value="{{ $penawaran->attd }}" parsley-trigger="change" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="customer-contact" class="form-label">Customer Contact
                                                    Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="customer-contact"
                                                    name="customer_contact" placeholder="Customer Contact"
                                                    value="{{ $penawaran->customer_contact }}" parsley-trigger="change" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="no-hp" class="form-label">No.HP<span
                                                    class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="no-hp" name="tel_fax"
                                                    placeholder="No. HP" value="{{ $penawaran->tel_fax }}" parsley-trigger="change" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="tanggal-penawaran" class="form-label">Tanggal
                                                    Penawaran<span class="text-danger">*</span></label>
                                                <input type="date" class="form-control" id="tanggal-penawaran"
                                                    name="date" value="{{ $penawaran->date }}" parsley-trigger="change" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="delivery-time" class="form-label">Delivery
                                                    Time</label>
                                                <select class="form-select" name="jangka_waktu">
                                                    <option value="">--Pilih Delivery Time--</option>
                                                    <option value="15 Hari" @if($penawaran->jangka_waktu == '15 Hari') selected @endif>15 Hari</option>
                                                    <option value="30 Hari" @if($penawaran->jangka_waktu == '30 Hari') selected @endif>30 Hari</option>
                                                    <option value="45 Hari" @if($penawaran->jangka_waktu == '45 Hari') selected @endif>45 Hari</option>
                                                    <option value="60 Hari" @if($penawaran->jangka_waktu == '60 Hari') selected @endif>60 Hari</option>
                                                    <option value="75 Hari" @if($penawaran->jangka_waktu == '75 Hari') selected @endif>75 Hari</option>
                                                    {{-- <option value="1"
                                                        {{ $penawaran->jangka_waktu == 1 ? 'selected' : '' }}>
                                                        15 Hari</option>
                                                    <option value="2"
                                                        {{ $penawaran->jangka_waktu == 2 ? 'selected' : '' }}>
                                                        30 Hari</option>
                                                    <option value="3"
                                                        {{ $penawaran->jangka_waktu == 3 ? 'selected' : '' }}>
                                                        45 Hari</option> --}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="segmentasi-pasar" class="form-label">Segmentasi
                                                    Pasar</label>
                                                <select class="form-select" name="segmentasi_pasar">
                                                    <option value="" disabled>--Pilih Segmentasi--</option>
                                                    <option value="Pertambangan" @if($penawaran->segmentasi_pasar == 'Pertambangan') selected @endif>Pertambangan</option>
                                                    <option value="Pertanian" @if($penawaran->segmentasi_pasar == 'Pertanian') selected @endif>Pertanian</option>
                                                    <option value="Manufaktur" @if($penawaran->segmentasi_pasar == 'Manufaktur') selected @endif>Manufaktur</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="pelaksanaan-pekerjaan" class="form-label">Pelaksanaan
                                                    Pekerjaan<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="pelaksanaan-pekerjaan"
                                                    name="pelaksanaan_pekerjaan" placeholder="Pelaksanaan Pekerjaan"
                                                    value="{{ $penawaran->pelaksanaan_pekerjaan }}" parsley-trigger="change" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="syarat-pembayaran" class="form-label">Syarat
                                                    Pembayaran<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="syarat-pembayaran"
                                                    name="syarat_pembayaran" placeholder="Syarat Pembayaran"
                                                    value="{{ $penawaran->syarat_pembayaran }}" parsley-trigger="change" required="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="negara" class="form-label">Negara</label>
                                                    <select class="form-select" name="negara">
                                                        <option value="">--Pilih Negara--</option>
                                                        <option value="Malaysia" @if($penawaran->negara == 'Malaysia') selected @endif>Malaysia</option>
                                                        <option value="Singapura" @if($penawaran->negara == 'Singapura') selected @endif>Singapura</option>
                                                        <option value="Indonesia" @if($penawaran->negara == 'Indonesia') selected @endif>Indonesia</option>
                                                        <option value="Philipina" @if($penawaran->negara == 'Philipina') selected @endif>Philipina</option>
                                                        <option value="Thailand" @if($penawaran->negara == 'Thailand') selected @endif>Thailand</option>
                                                        <option value="Vietnam" @if($penawaran->negara == 'Vietnam') selected @endif>Vietnam</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="provinsi" class="form-label">Provinsi</label>
                                                    <select class="form-select" name="provinsi">
                                                        <option value="">--Pilih Provinsi--</option>
                                                        <option value="Aceh" @if($penawaran->provinsi == 'Aceh') selected @endif>Aceh</option>
                                                        <option value="Sumatera Utara" @if($penawaran->provinsi == 'Sumatera Utara') selected @endif>Sumatera Utara</option>
                                                        <option value="Sumatera Barat" @if($penawaran->provinsi == 'Sumatera Barat') selected @endif>Sumatera Barat</option>
                                                        <option value="Bengkulu" @if($penawaran->provinsi == 'Bengkulu') selected @endif>Bengkulu</option>
                                                        <option value="Riau" @if($penawaran->provinsi == 'Riau') selected @endif>Riau</option>
                                                        <option value="Jambi" @if($penawaran->provinsi == 'Jambi') selected @endif>Jambi</option>
                                                        <option value="Lampung" @if($penawaran->provinsi == 'Lampung') selected @endif>Lampung</option>
                                                        <option value="Bangka Belitung" @if($penawaran->provinsi == 'Bangka Belitung') selected @endif>Bangka Belitung</option>
                                                        <option value="DKI Jakarta" @if($penawaran->provinsi == 'DKI Jakarta') selected @endif>DKI Jakarta</option>
                                                        <option value="Jawa Barat" @if($penawaran->provinsi == 'Jawa Barat') selected @endif>Jawa Barat</option>
                                                        <option value="Jawa Tengah" @if($penawaran->provinsi == 'Jawa Tengah') selected @endif>Jawa Tengah</option>
                                                        <option value="Yogyakarta" @if($penawaran->provinsi == 'Yogyakarta') selected @endif>Yogyakarta</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="kota" class="form-label">Kabupaten/Kota</label>
                                                    <select class="form-select" name="kota">
                                                        <option value="">
                                                            --Pilih
                                                            Kota/Kabupaten--
                                                        </option>
                                                        <option value="Banda Aceh" @if($penawaran->provinsi == 'Banda Aceh') selected @endif>Banda Aceh</option>
                                                        <option value="Medan" @if($penawaran->provinsi == 'Medan') selected @endif>Medan</option>
                                                        <option value="Padang" @if($penawaran->provinsi == 'Padang') selected @endif>Padang</option>
                                                        <option value="Bengkulu" @if($penawaran->provinsi == 'Bengkulu') selected @endif>Bengkulu</option>
                                                        <option value="Riau" @if($penawaran->provinsi == 'Riau') selected @endif>Riau</option>
                                                        <option value="Jambi" @if($penawaran->provinsi == 'Jambi') selected @endif>Jambi</option>
                                                        <option value="Lampung" @if($penawaran->provinsi == 'Lampung') selected @endif>Lampung</option>
                                                        <option value="Pangkal Pinang" @if($penawaran->provinsi == 'Pangkal Pinang') selected @endif>Pangkal Pinang</option>
                                                        <option value="Jakarta" @if($penawaran->provinsi == 'Jakarta') selected @endif>Jakarta</option>
                                                        <option value="Bandung" @if($penawaran->provinsi == 'Bandung') selected @endif>Bandung</option>
                                                        <option value="Semarang" @if($penawaran->provinsi == 'Semarang') selected @endif>Semarang</option>
                                                        <option value="Yogyakarta" @if($penawaran->provinsi == 'Yogyakarta') selected @endif>Yogyakarta</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="">
                                                    <label for="alamat" class="form-label">Alamat<span 
                                                        class="text-danger">*</span></label>
                                                    <textarea rows="5" class="form-control" id="alamat" 
                                                    placeholder="Alamat" name="alamat" parsley-trigger="change" required="">{{ $penawaran->alamat }}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="text-end
                                                                mt-3">
                                            <a href="{{ route('sistemPenawaran.penawaran.detail', $penawaran->id) }}"
                                                class="btn btn-secondary waves-effect" id="cancelButton">Cancel</a>
                                            <button class="btn btn-red waves-effect waves-light px-4" type="submit"
                                                id="submitButton">Save</button>
                                        </div>
                                        <script>
                                            // Mengubah tautan "Cancel" saat tombol diklik
                                            document.getElementById('submitButton').addEventListener('click', function() {
                                                document.getElementById('cancelButton').href =
                                                    "{{ route('sistemPenawaran.penawaran.detail', $penawaran->id) }}";
                                            });
                                        </script>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
