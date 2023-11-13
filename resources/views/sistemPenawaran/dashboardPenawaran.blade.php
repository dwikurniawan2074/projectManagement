@extends('sistemPenawaran.template.index')

{{-- headerscript section --}}
@section('headerScript')
@endsection

{{-- content section --}}
@section('content')

<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h3>Total Sales</h3>
                            <p>Test Deskripsi</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h3>Total Order</h3>
                            <p>Test Deskripsi</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h3>Approved Tender</h3>
                            <p>Test Deskripsi</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h3>Rejected Tender</h3>
                            <p>Test Deskripsi</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Monthly Acquisition</h4>

                            <div id="ordered-bars-chart" style="height: 320px;"></div>
                        </div>
                    </div>
                   
                </div><!-- end col-->

            </div>


            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Donut Pie</h4>

                            <div id="donut-chart">
                                <div id="donut-chart-container" class="flot-chart" style="height: 260px;">
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div><!-- end col-->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Pie Chart</h4>

                            <div id="pie-chart">
                                <div id="pie-chart-container" class="flot-chart" style="height: 260px;">
                                </div>
                            </div>

                        </div>
                    </div>
                   
                </div><!-- end col-->
            </div>
        </div>
    </div>
</div>
@endsection

{{-- pagescript section --}}
@section('pageScript')
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-charts/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-charts/jquery.flot.selection.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-charts/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-charts/jquery.flot.crosshair.js') }}"></script>

    <!-- init js -->
    <script src="{{ asset('templateAdmin/Admin/dist/assets/js/pages/flot.init.js') }}"></script>
@endsection