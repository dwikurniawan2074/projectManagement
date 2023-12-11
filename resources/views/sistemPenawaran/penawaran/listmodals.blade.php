<div class="list-modals">

    {{-- modals data trafo --}}
    <form action="{{ route('sistemPenawaran.trafo.store') }}" class="parsley-examples" novalidate="" method="post"
          enctype="multipart/form-data" id="form-trafo">
        @csrf
        @method('POST')
        <div id="trafo-modals" class="modal fade" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true" style="overflow:hidden;">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            Data Trafo</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div id="input-trafo" class="modal-body">
                        <div class="row">

                            {{-- hidden input id penawaran --}}
                            <input type="hidden" name="id_penawaran" id="id_penawaran" value="{{$data}}">

                            {{-- form input merk trafo --}}
                            <div class="mb-3">
                                <label for="merk" class="form-label">Merk<span
                                        class="text-danger">*</span></label>a
                                <input type="text" name="merk" id="merk" parsley-trigger="change"
                                       class="form-control" placeholder="Masukkan Merk" required>
                            </div>

                            {{-- form input capacity --}}
                            <div class="mb-3">
                                <label for="capacity" class="form-label">Capacity<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="capacity" id="capacity" parsley-trigger="change"
                                       class="form-control" required="" placeholder="Masukkan Kapasitas">
                            </div>

                            {{-- form input nomor seri --}}
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="no-seri" class="form-label">No. Seri<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="no_seri" id="no_seri" parsley-trigger="change"
                                               class="form-control" required="" placeholder="Masukkan No-Seri">
                                    </div>
                                    <div class="col-6">
                                        <label for="tahun" class="form-label">Tahun<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="tahun" id="tahun" parsley-trigger="change"
                                               class="form-control" required="" placeholder="Masukkan Tanggal">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer pe-0">
                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-red waves-effect waves-light">
                                Save
                                changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    {{-- modals data layanan --}}
    <form action="" class="parsley-examples" novalidate="" method="" id="formLayanan"
          enctype="multipart/form-data">
        @csrf
        <div id="layanan-modals" class="modal fade" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true" style="overflow:hidden;">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            Data Layanan</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            {{-- hidden input id penawaran --}}
                            <input type="hidden" name="id_penawaran" id="id_penawaran" value="{{$data}}">


                            {{-- form select data trafo--}}
                            <div class="mb-3">
                                <label for="trafo" class="form-label">Trafo<span
                                        class="text-danger">*</span></label>
                                <select name="trafo" id="id_trafo" parsley-trigger="change" class="form-select">
                                    <option disabled selected="">Choose...</option>
                                    <option value="">-- none --</option>
                                    @foreach ($trafo as $trf)
                                        <option value="{{ $trf['id'] }}">{{ $trf['merk'] }} - {{$trf->no_seri}}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- form select nama layanan --}}
                            <div class="mb-3">
                                <label for="nama-layanan" class="form-label">Nama Layanan<span
                                        class="text-danger">*</span></label>
                                <select name="nama-layanan" id="nama-layanan" parsley-trigger="change"
                                        class="form-select" onchange="selectSub_layanan()">
                                    <option disabled selected="">Choose...</option>
                                    <option value="Maintenance_Trafo_Dry_Type">Maintenance Trafo Dry Type</option>
                                    <option value="Maintenance_Trafo_Oil_Type">Maintenance Trafo Oil Type</option>
                                    <option value="Oil_Test">Oil Test</option>
                                    <option value="Electrical_Test">Electrical Test</option>
                                </select>
                            </div>

                            {{-- form included sub layanan from layanan --}}
                            <div class="mb-3">
                                <label for="nama-subLayanan" class="form-label">Sub Layanan Included<span
                                        class="text-danger">*</span></label>
                                <select name="nama-subLayanan" id="nama-subLayanan" parsley-trigger="change"
                                        class="form-select">
                                    <option disabled selected="">Choose...</option>
                                </select>
                            </div>

                            <div class="row mb-3 pe-0">
                                <div class="col-lg-3">
                                    <label for="qty">Qty:</label>
                                    <input type="number" id="qty" name="qty[]" class="form-control" placeholder=" qty"
                                           autocomplete="off">
                                </div>
                                <div class="col-lg-3">
                                    <label for="dropdown">Satuan</label>
                                    <select id="satuan" name="satuan[]" class="form-select">
                                        <option value="liter" selected>Liter</option>
                                        <option value="pcs">Pcs</option>
                                        <option value="box">Box</option>
                                        <option value="unit">Unit</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 pe-0">
                                    <label for="harga">Harga:</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                        <input type="number" id="harga" name="harga[]" class="form-control"
                                               placeholder="Enter Price" autocomplete="off">
                                        <input type="hidden" name="id_subLayanan" id="id_subLayanan">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3 me-0">
                                <div class="col-9">
                                    <label for="sub-layanan" class="form-label">Sub Layanan Lain</label>
                                </div>
                                <div class="col-3 text-end pe-0">
                                    <button type="button" id="addSubLayanan"
                                            class="btn btn-danger btn-xs waves-effect waves-light rounded-pill">Add Sub
                                        Layanan
                                    </button>
                                </div>
                            </div>

                            <div class="row sub-layanan-list ms-auto">
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="description">Description:</label>
                                        <input type="text" id="descriptionSL" name="description[]" class="form-control"
                                               placeholder="Enter description" autocomplete="off">
                                        <input type="hidden" name="id_subLayananSL" id="id_subLayananSL">

                                    </div>
                                    <div class="col-lg-2">
                                        <label for="qty">Qty:</label>
                                        <input type="number" id="qtySL" name="qty[]" class="form-control"
                                               placeholder=" qty"
                                               autocomplete="off">
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="dropdown">Satuan</label>
                                        <select id="satuanSL" name="satuan[]" class="form-select">
                                            <option value="liter" selected>Liter</option>
                                            <option value="pcs">Pcs</option>
                                            <option value="box">Box</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="harga">Harga:</label>
                                        <input type="number" id="hargaSL" name="harga[]" class="form-control"
                                               placeholder="Enter Price" autocomplete="off">

                                    </div>
                                    <div class="col-1 d-flex align-items-end">
                                        <div class="input-group-append  align-items-end">
                                            <button class="btn  btn-danger removeRow" type="button"><i
                                                    class="fe-trash-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer pe-0">
                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-red waves-effect waves-light">
                                Save
                                changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    {{-- modals syarat ketentuan --}}
    <form action="{{ route('sistemPenawaran.syarat.store') }}" class="parsley-examples" novalidate="" method="post"
          enctype="multipart/form-data">
        @csrf
        <div id="syarat-modals" class="modal fade" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true" style="overflow:hidden;">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            Syarat dan Ketentuan</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            {{-- form generate read only penawaran name --}}
                            <div class="mb-3">
                                <label for="merk" class="form-label">Penawaran</label>
                                <input type="text" name="id_penawaran" id="id_penawaran" value="{{ $penawaran['id'] }}"
                                       hidden>
                                <input type="text" class="form-control" placeholder="{{ $penawaran['project_name'] }}"
                                       disabled readonly>
                            </div>

                            <label for="merk" class="form-label">Syarat dan Ketentuan</label>

                            <div class="syarat-ketentuan-list mb-1">
                                <div class="form-check mb-2 form-check-danger">
                                    <input class="form-check-input" type="checkbox" value="" id="check1" name="check1">
                                    <label class="form-check-label" for="check1">Harga belum termasuk PPN</label>
                                </div>
                                <div class="form-check mb-2 form-check-danger">
                                    <input class="form-check-input" type="checkbox" value="" id="check2" name="check2">
                                    <label class="form-check-label" for="check2">Harga tidak berlaku selama libur hari
                                        raya keagamaan dan libur nasional</label>
                                </div>
                                <div class="form-check mb-2 form-check-danger">
                                    <input class="form-check-input" type="checkbox" value="" id="check3" name="check3">
                                    <label class="form-check-label" for="check3">Harga belum termasuk PCR test bila
                                        diperlukan</label>
                                </div>
                                <div class="form-check mb-2 form-check-danger">
                                    <input class="form-check-input" type="checkbox" value="" id="check4" name="check4">
                                    <label class="form-check-label" for="check4">Harga belum termasuk penggantian
                                        material/sparepart trafo</label>
                                </div>
                                <div class="form-check mb-2 form-check-danger">
                                    <input class="form-check-input" type="checkbox" value="" id="check5" name="check5">
                                    <label class="form-check-label" for="check5">Harga belum termasuk alat bantu, alat
                                        berat dan helper jika diperlukan</label>
                                </div>
                                <div class="form-check mb-2 form-check-danger">
                                    <div class="row">
                                        <div class="col-8">
                                            <input class="form-check-input" type="checkbox" value="" id="check6">
                                            <label class="form-check-label" for="check6">Syarat Lain</label>
                                        </div>
                                        <div class="col-4 d-flex pe-4 justify-content-end">
                                            <button type="button" id="addSyarat" style="display: none;"
                                                    class="btn btn-danger btn-xs waves-effect waves-light rounded-pill">
                                                Add Syarat Lain
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="syarat-lain-list mb-2 ps-4">
                                <div id="syarat-lain-row" class="row my-1" style="display: none;">
                                    <div class="col-9 d-flex align-items-end">
                                        <input type="text" name="syaratLainInput[]" id="syaratLainInput"
                                               class="form-control">
                                    </div>
                                    <div class="col-3 d-flex">
                                        <button class="btn btn-danger removeSyarat" type="button"><i
                                                class="fe-trash-2"></i></button>
                                    </div>
                                    {{-- <label for="merk" class="form-label">Penawaran</label> --}}
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer pe-0">
                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-red waves-effect waves-light">
                                Save
                                changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>

