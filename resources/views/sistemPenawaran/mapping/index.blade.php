@extends('sistemPenawaran.template.index')


{{-- headerscript section --}}
@section('headerScript')
<!-- third party css -->
    <link href="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- leaflet css -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <!-- leaflet css -->

    <!-- page styling -->
    <style>
        #map {
            height: 410px;
        }

        #leaflet-container {
            padding: 0.8rem 0.8rem;
        }

        .card,
        #map {
            border-radius: 10px;
        }

        .details-text {
            margin-bottom: unset;
        }

        .title-text {
            margin-bottom: unset;
            font-weight: 100;
        }

        @media screen and (max-width: 768px) {
            .container-fluid>.row {
                display: flex;
                flex-direction: column;
            }

            .right-column {
                width: 100%;
                order: 1;
            }

            .left-column {
                width: 100%;
                order: 2;
            }
        }
    </style>
    <!-- page styling -->
@endsection


{{-- content section --}}
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-8 left-column">
                    <div class="card">
                        <div id="leaflet-container" class="card-body">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
                <div class="col-4 right-column">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <h4 class="mt-0" style="padding-left: 10px;">Data Persebaran Penawaran</h4>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Total Provinsi</p>
                                                <p class="details-text">23</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Total Kabupaten/Kota</p>
                                                <p class="details-text">56</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Total Customer</p>
                                                <p class="details-text">132</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Total Projects</p>
                                                <p class="details-text">256</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Daerah Penawaran Terbanyak</p>
                                                <p class="details-text">Tangerang-Banten</p>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 mb-4 ">Data Penawaran-Penawaran</h4>
                                <table id="datatable"
                                    class="table table-striped table-hover dt-responsive table-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No. Penawaran</th>
                                            <th>Nama Customer</th>
                                            <th>Customer Contact</th>
                                            <th>Project</th>
                                            <th>Lokasi</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach($penawaran as $pnw) 
                                            <tr>
                                                <td>1</td>
                                                <td>{{ $pnw['no_msg'] }}</td>
                                                <td>{{ $pnw['customer_contact'] }}</td>
                                                <td>{{ $pnw['tel_fax'] }}</td>
                                                <td>{{ $pnw['project_name'] }}</td>
                                                <td>{{ $pnw['provinsi'] }}-{{ $pnw['kota'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            
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
<!-- third party js -->
<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}">
</script>
<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}">
</script>
<script
    src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
</script>
<script
    src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}">
</script>
<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}">
</script>
<script
    src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}">
</script>
<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}">
</script>
<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}">
</script>
<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}">
</script>
<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}">
</script>
<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-select/js/dataTables.select.min.js') }}">
</script>
<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<!-- third party js ends -->

<!-- leaflet.js script -->
<script>
    var map = L.map('map').setView([-1.2547961090826119, 121.03191075374599], 4);
        
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

</script>
<!-- leaflet.js script -->

<!-- table script -->
<script>
    $(document).ready(function () {
            $("#datatable").DataTable({
                // responsive: true;
                autoWidth: false,
                processing: true,
                responsive: false,

            });
        });
</script>
<!-- table script -->
@endsection