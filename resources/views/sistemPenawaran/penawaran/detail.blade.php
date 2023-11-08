@extends('sistemPenawaran.template.index')

{{-- header script section --}}
@section('headerScript')
@endsection

{{-- contenct section --}}
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 col-md-6 order-md-1 order-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="project-box d-flex justify-content-between">
                                    <div>
                                        <h4 class="ms-0">Trafo</h4>
                                    </div>
                                    <div class="ml-auto">
                                        <!-- Button trigger modal -->
                                        <button type="button" style="width: 145px; height: 35px"
                                            class="btn btn-danger rounded mt-2 ms-2" data-toggle="modal"
                                            data-target="#exampleModalLong">
                                            <i class="mdi mdi-plus" title="Untuk menambahkan project"></i>Add Trafo
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-centered mb-0" id="inline-editable">
                                        <thead>
                                            <tr class="text-center">
                                                <th>#</th>
                                                <th>Merk</th>
                                                <th>Capacity</th>
                                                <th>No.Seri</th>
                                                <th>Tahun</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td>1</td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>
                                                    <div class="d-flex gap-1 justify-content-center">
                                                        <button type="button"
                                                            class="btn btn-primary btn-xs waves-effect waves-light rounded-pill">Update</button>
                                                        <button type="button"
                                                            class="btn btn-danger btn-xs waves-effect waves-light rounded-pill">Delete</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end .table-responsive-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="project-box d-flex justify-content-between">
                                    <div>
                                        <h4 class="ms-0">Layanan</h4>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="ml-auto">
                                            <button type="button" style="width: 145px; height: 35px"
                                                class="btn btn-danger rounded mt-2 ms-2" data-bs-toggle="modal"
                                                data-bs-target="#layanan">
                                                <i class="mdi mdi-plus" title="Untuk menambahkan project"></i>Add Layanan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-centered mb-0" id="inline-editable">
                                        <thead>
                                            <tr class="text-center">
                                                <th>#</th>
                                                <th>Trafo</th>
                                                <th>Nama</th>
                                                <th>Sub layanan </th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td>1</td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>
                                                    <div>
                                                        <form action="">
                                                            <div>
                                                                <select id="inputStateLeft" class="form-select">
                                                                    <option selected>Sub Layanan 1</option>
                                                                    <option>BDV Test</option>
                                                                    <option>Turn Test Ratio</option>
                                                                    <option>Proteksi Check</option>
                                                                    <option>Torsi Check</option>
                                                                </select>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-1 justify-content-center">
                                                        <button type="button"
                                                            class="btn btn-primary btn-xs waves-effect waves-light rounded-pill">Update</button>
                                                        <button type="button"
                                                            class="btn btn-danger btn-xs waves-effect waves-light rounded-pill">Delete</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div> <!-- end .table-responsive-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="project-box d-flex justify-content-between">
                                    <div>
                                        <h4 class="ms-0">Syarat Ketentuan</h4>
                                    </div>
                                    <div class="ml-auto">
                                        <button type="button" style="width: 145px; height: 35px"
                                            class="btn btn-danger rounded mt-2 ms-2" data-toggle="modal"
                                            data-target="#syarat">
                                            <i class="mdi mdi-plus" title="Untuk menambahkan project"></i>Add layanan
                                        </button>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-centered mb-0" id="inline-editable">
                                        <thead>
                                            <tr class="text-center">
                                                <th>#</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td>1</td>
                                                <td>Tiger </td>
                                                <td>
                                                    <div class="d-flex gap-1 justify-content-center">
                                                        <button type="button"
                                                            class="btn btn-primary btn-xs waves-effect waves-light rounded-pill">Update</button>
                                                        <button type="button"
                                                            class="btn btn-danger btn-xs waves-effect waves-light rounded-pill">Delete</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end .table-responsive-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                    <div class="col-xl-4 col-md-6 order-md-2 order-1">
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
                    {{-- modal Trafo --}}
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Add Trafo</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-xl-12">
                                            <form action="">
                                                <div class="mb-3">
                                                    <label for="customerNameLeft">Merk</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Masukan Jenis Trafo" aria-label="Username"
                                                            id="customerNameLeft">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xl-12">
                                            <form action="">
                                                <div class="mb-3">
                                                    <label for="customerNameLeft">Capacity</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Masukan kapasitas Trafo" aria-label="Username"
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
                                                    <label for="customerNameLeft">Merk</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Masukan Jenis Trafo" aria-label="Username"
                                                            id="customerNameLeft">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-6 col-xl-6">
                                            <form action="">
                                                <div class="">
                                                    <label for="inputStateLeft">ppp</label>
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
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- modal Layanan --}}
                    <div class="modal fade " id="layanan" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Layanan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-xl-12">
                                            <form action="">
                                                <div class="mb-3">
                                                    <label for="inputStateLeft">Trafo</label>
                                                    <select id="inputStateLeft" class="form-select">
                                                        <option selected>Choose...</option>
                                                        <option>#####</option>
                                                        <option>XXXXX</option>
                                                        <option>AAAAA</option>
                                                        <option>BBBBB</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 col-xl-12">
                                            <form action="">
                                                <div class="mb-3">
                                                    <label for="inputStateLeft">Nama Layanan</label>
                                                    <select id="inputStateLeft" class="form-select">
                                                        <option selected>Choose...</option>
                                                        <option>#####</option>
                                                        <option>XXXXX</option>
                                                        <option>AAAAA</option>
                                                        <option>BBBBB</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="sub pelayanan">Sub Layanan</label>
                                    </div>
                                    <div class="row">
                                        <form method="post">
                                            <div id="inputFormRow" class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="description">Description:</label>
                                                    <input type="text" id="description" name="description[]"
                                                        class="form-control" placeholder="Enter description"
                                                        autocomplete="off">
                                                </div>
                                                <div class="col-lg-2">
                                                    <label for="qty">Qty:</label>
                                                    <input type="text" id="qty" name="qty[]"
                                                        class="form-control" placeholder=" qty" autocomplete="off">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label for="dropdown">Dropdown:</label>
                                                    <select id="dropdown" name="dropdown[]" class="form-select">
                                                        <option value="Option 1">Option 1</option>
                                                        <option value="Option 2">Option 2</option>
                                                        <option value="Option 3">Option 3</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label for="harga">Harga:</label>
                                                    <input type="text" id="description" name="description[]"
                                                        class="form-control" placeholder="Enter Price"
                                                        autocomplete="off">

                                                </div>
                                                <div class="col-1">
                                                    - <div class="input-group-append  align-items-end">
                                                        <button class="btn  btn-danger removeRow" type="button"><i
                                                                class="fe-trash-2"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="newRow"></div>
                                    <button id="addRow" type="button" class="btn btn-info">Add Row</button>
                                </div>
                                <div class="modal-footer gap-1">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- modal Syarat dan Ketentuan --}}
                    <div class="modal fade" id="syarat" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="exampleModalLongTitle">Add Layanan</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 col-xl-12">
                                            <form action="">
                                                <div class="mb-3">
                                                    <label for="customerNameLeft">Penawaran</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Masukan Penawaran" aria-label="Username"
                                                            id="customerNameLeft">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <label for="syarat">Syarat dan Ketentuan</label>
                                    </div>
                                    <div class="row ms-2">

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Harga belum termasuk PPN
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Harga tidak berlakuselamar libur hari raya keagamaan dan libur nasional
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Harga belum termasuk PCR test bila diperlukan
                                            </label>

                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Harga belum termasuk penggantian material/sparepart trafo
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Harga belum termasuk alat bantu, alat berat dan helper jika diperlukan
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div id="inputFormsyarat">
                                                        <div class="input-group mb-2">
                                                            <input class="form-check-input " type="checkbox"
                                                                value="" id="flexCheckChecked" checked>
                                                            <input type="text" name="title[]"
                                                                class="form-control m-input  ms-1"
                                                                placeholder="Masukan Syarat" autocomplete="off">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-danger removeRow" type="button"><i
                                                                        class="fe-trash"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id="newsyarat"></div>
                                                    <button id="addsyarat" type="button" class="btn btn-info">Add
                                                        Row</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        // add row
        $("#addRow").click(function() {
            var html = '<div id="inputFormRow" class="row mb-3">';
            html += '<div class="col-lg-3">';
            html += '<label for="description">Description:</label>';
            html += '<input type="text" name="description[]" class="form-control" placeholder="Enter description" autocomplete="off">';
            html += '</div>';
            html += '<div class="col-lg-2">';
            html += '<label for="qty">Qty:</label>';
            html += '<input type="text" name="qty[]" class="form-control" placeholder="Qty" autocomplete="off">';
            html += '</div>';
            html += '<div class="col-lg-3">';
            html += '<label for="dropdown">Dropdown:</label>';
            html += '<select name="dropdown[]" class="form-select">';
            html += '<option value="Option 1">Option 1</option>';
            html += '<option value="Option 2">Option 2</option>';
            html += '<option value="Option 3">Option 3</option>';
            html += '</select>';
            html += '</div>';
            html += '<div class="col-lg-3">';
            html += '<label for="price">Harga:</label>';
            html += '<input type="text" name="price[]" class="form-control" placeholder="Enter Price" autocomplete="off">';
            html += '</div>';
            html += '<div class="col-1 d-flex align-items-end">';
            html += '<button class="btn btn-danger removeRow" type="button"><i class="fe-trash-2"></i></button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '.removeRow', function() {
            $(this).closest('#inputFormRow').remove();
        });
    </script>

<script type="text/javascript">
    // add row
    $("#addsyarat").click(function() {
        var html = '<div class="input-group mb-2">';
        html += '<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>';
        html += '<input type="text" name="title[]" class="form-control m-input ms-1" placeholder="Enter title" autocomplete="off">';
        html += '<div class="input-group-append">';
        html += '<button class="btn btn-danger removeRow" type="button"><i class="fe-trash"></i></button>';
        html += '</div>';
        html += '</div>';

        $('#newsyarat').append(html);
    });

    // remove row
    $(document).on('click', '.removeRow', function() {
        $(this).closest('.input-group').remove();
    });
</script>
@endsection

{{-- page script section --}}
@section('pageScript')
@endsection
