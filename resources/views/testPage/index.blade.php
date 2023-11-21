@extends('template.index')

@section('headerScript')
@endsection

@section('content')

<div class="content-page">
    <div class="content">

        
        <div class="container-fluid">

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

                            <h4 class="header-title mt-0 mb-3">Multiple Statistics</h4>

                            <div id="website-stats" style="height: 320px;" class="flot-chart"></div>

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

                            <h4 class="header-title mt-0 mb-3">Realtime Statistics</h4>

                            <div id="flotRealTime" style="height: 320px;" class="flot-chart"></div>

                        </div>
                    </div>
                   
                </div><!-- end col-->
            </div>
            <!-- end row -->

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
            <!-- end row -->

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

                            <h4 class="header-title mt-0 mb-3">Bar chart</h4>

                            <div id="ordered-bars-chart" style="height: 320px;"></div>
                        </div>
                    </div>
                   
                </div><!-- end col-->

            </div>
            <!-- end row -->

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

                            <h4 class="header-title mt-0 mb-3">Combine Statistics</h4>

                            <div id="combine-chart">
                                <div id="combine-chart-container" class="flot-chart" style="height: 320px;">
                                </div>
                            </div>

                        </div>
                    </div>
                   
                </div><!-- end col-->

            </div>
            <!-- end row -->

        </div>
    </div>
</div>

@endsection

@section('pageScript')

<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/multiselect/js/jquery.multi-select.js') }}"></script>
<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('templateAdmin/Admin/dist/assets/js/pages/form-advanced.init.js') }}"></script>


<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>


<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>

<!--Morris Chart-->
<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/morris.js06/morris.min.js') }}"></script>
<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/raphael/raphael.min.js') }}"></script>

<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-charts/jquery.flot.js') }}"></script>
<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-charts/jquery.flot.time.js') }}"></script>
<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('assets/libs/flot-charts/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('assets/libs/flot-charts/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-charts/jquery.flot.selection.js') }}"></script>
<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-charts/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('assets/libs/flot-orderbars/js/jquery.flot.orderBars.js') }}"></script>
<script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-charts/jquery.flot.crosshair.js') }}"></script>

<!-- init js -->
<script src="{{ asset('templateAdmin/Admin/dist/assets/js/pages/flot.init.js') }}"></script>
    
<script>
    // Sample data (you can replace this with your own data)
    const data = [
        { column1: 'Value 1', column2: 'Value 2', column3: 'Value 3' },
        { column1: 'Value 4', column2: 'Value 5', column3: 'Value 6' },
        { column1: 'Value 7', column2: 'Value 8', column3: 'Value 9' },
    ];

    // Function to populate the table with data
    function populateTable() {
        const tableBody = document.querySelector('#dataTable tbody');

        data.forEach(item => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${item.column1}</td>
                <td>${item.column2}</td>
                <td>${item.column3}</td>
            `;
            tableBody.appendChild(row);
        });
    }

    // Call the populateTable function to create the table
    populateTable();

    $(document).ready(function(){
        $('#dataTable').DataTable({
            responsive: true,
            autoWidth: false
        });
    });
    

</script>
@endsection