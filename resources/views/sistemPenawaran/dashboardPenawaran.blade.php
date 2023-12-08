@extends('sistemPenawaran.template.index')

{{-- headerscript section --}}
@section('headerScript')
    <style>
        .col-3 > .card{
            background-size: cover;
        }

        .col-3 > .card > .card-body > p:first-child{
            margin-bottom: 0px;
            font-weight: 600;
        }
        
        .first-card{
            background-image: url('{{ asset('images/yellow-bgx.png') }}');
        }
        
        .second-card{
            background-image: url('{{ asset('images/blue-bg.png') }}');
        }

        .third-card{
            background-image: url('{{ asset('images/green-bg.png') }}');
        }
        
        .fourth-card{
            background-image: url('{{ asset('images/red-bg.png') }}');
        }

        .col-3 > .card > .card-body > p, 
        .col-3 > .card > .card-body > h3{
            color: white;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .presentase{
            background-color: white;
            border-radius: 10px;
            /* color: #FBBC05; */
            font-weight: 900;
            width: fit-content;
            padding: 1px 8px;
        }

        @media screen and (max-width: 1000px) {
            .dashboard-card > .col-3 {
                flex-shrink: 0;
                width: 50%;
                max-width: 50%;
            }
        }
    </style>
@endsection

{{-- content section --}}
@section('content')

    <div class="content-page">
        <div class="content">
            <div class="container-fluid">

                <div class="row dashboard-card">
                    <div class="col-3">
                        <div class="card first-card">
                            <div class="card-body">
                                <p>Total Sales</p>
                                <h3>Rp. 180.982.900</h3>
                                <p class="presentase text-warning text-center">+12,6%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card second-card">
                            <div class="card-body">
                                <p>Total Order</p>
                                <h3>387</h3>
                                <p class="presentase text-info text-center">+12,6%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card third-card">
                            <div class="card-body">
                                <p>Approved Tender</p>
                                <h3>198</h3>
                                <p class="presentase text-success text-center">+12,6%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card fourth-card">
                            <div class="card-body">
                                <p>Rejected Tender</p>
                                <h3>174</h3>
                                <p class="presentase text-danger text-center">+12,6%</p>
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

                                <h4 class="header-title mt-0 mb-3">Sales Overview</h4>

                                <div style="height: 300px;">
                                    <canvas id="myChart"></canvas>
                                </div>
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

                                <h4 class="header-title mt-0 mb-3">Sales Status</h4>

                                <div id="donut-chart">
                                    <canvas id="doughnutChart" style="height: 260px;">
                                    </canvas>
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

                                <h4 class="header-title mt-0 mb-3">Market Segmentation</h4>

                                <div id="pie-chart">
                                    <canvas id="pieChart" style="height: 260px;">
                                    </canvas>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- init js -->
    <script src="{{ asset('templateAdmin/Admin/dist/assets/js/pages/flot.init.js') }}"></script>

    <script>
        const myChart = document.getElementById('myChart');
        
        new Chart(myChart, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Sales Total For a Month',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the context of the canvas element
            var ctx = document.getElementById('doughnutChart').getContext('2d');
        
            // Provide data for the chart
            const data = {
                labels: [
                    'Rejected',
                    'Approved',
                    'Unknown'
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: [300, 50, 100],
                    backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(90, 237, 107)',
                    'rgb(255, 205, 86)'
                    ],
                    hoverOffset: 4
                }]
            };
    
            // Set options for the chart
            var options = {
            // Add your customization options here
                responsive: true,
                maintainAspectRatio: false,
            };
        
            // Create the doughnut chart
            var doughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: options
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Your chart creation code here
            var ctx = document.getElementById('pieChart').getContext('2d');

            // Provide data for the chart
            const data = {
                labels: [
                    'BUMN',
                    'Pertambangan',
                    'IT'
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: [300, 50, 100],
                    backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                    ],
                    hoverOffset: 4
                }]
            };

            // Set options for the chart
            var options = {
            // Add your customization options here
                responsive: true,
                maintainAspectRatio: false,
            };

            // Create the doughnut chart
            var pieChart = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: options
            });
        });
        // Get the context of the canvas element
        
    </script>
@endsection