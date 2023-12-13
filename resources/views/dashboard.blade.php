@extends('template.index')

{{-- headscript section --}}
@section('headerScript')
@endsection

{{-- content section --}}
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row ">

                    {{-- cards column --}}
                    <div class="col-lg-6">

                        <div class="row">

                        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-4 text-center">
                                                <i class="mdi mdi-book-check-outline fa-4x"></i>
                                            </div>
                                            <div class="col-8">
                                                <h4 class="fw-bold">Projects Total</h4>
                                                <h2 class="fw-bold">{{ $totalProjects }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-4 text-center">
                                                <i class="mdi mdi-electron-framework fa-4x"></i>
                                            </div>
                                            <div class="col-8">
                                                <h4 class="fw-bold">Milestones Total</h4>
                                                <h2 class="fw-bold">{{ $totalMilestones }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-4 text-center">
                                                <i class="mdi mdi-check-network-outline fa-4x"></i>
                                            </div>
                                            <div class="col-8">
                                                <h4 class="fw-bold">Sub Milestones </h4>
                                                <h2 class="fw-bold">{{ $totalSubMilestones }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- //ini buat hak akses --}}
                            @Allowed("Admin")
                            {{-- <p>Allowed</p> --}}
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-4 text-center">
                                                <i class="mdi mdi-account-group fa-4x"></i>
                                            </div>
                                            <div class="col-8">
                                                <h4 class="fw-bold">Total Users</h4>
                                                <h2 class="fw-bold">{{ $totalUser }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            
                            @else
                            {{-- <p>sdasd</p> --}}
                            @endAllowed

                        </div>

                    </div>

                    {{-- pie chart column --}}
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                
                                <h4 class="header-title mt-0 mb-3">Milestones Data</h4>

                                <div class="chartjs-chart">
                                    <canvas id="pieChart" height="300"></canvas>
                                </div>

                            </div>
                        </div>
                    </div>

                    

                    <!-- Tambahkan lebih banyak kolom sesuai kebutuhan -->
                </div>


                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mt-0 mb-3">Latest Projects</h4>

                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Project Name</th>
                                                <th>Start Date</th>
                                                <th>Due Date</th>
                                                <th>Project Manager</th>
                                                <th>Sales Executive</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($projects as $project)
                                                <tr data-id="{{ $project['id'] }}" style="cursor: pointer;"
                                                    title="Klik untuk lihat detail project">
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td>{{ $project['label'] }}</td>
                                                    <td>{{ $project['start_date'] }}</td>
                                                    <td>{{ $project['end_date'] }}</td>
                                                    <td>{{ $project->projectManager->first_name }}
                                                        {{ $project->projectManager->last_name }}</td>
                                                    <td>{{ $project->salesExecutive->first_name }}
                                                        {{ $project->salesExecutive->last_name }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div> <!-- content -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Menambahkan event click pada setiap baris
            $("tbody tr").click(function() {
                // Mendapatkan ID proyek dari atribut data-id
                var projectId = $(this).data("id");

                // Mengarahkan pengguna ke halaman detail proyek
                window.location.href = "/projects/detail/" + projectId; // Sesuaikan dengan route yang benar
            });
        });
    </script>
    {{-- <script src="https://kit.fontawesome.com/031855bb65.js" crossorigin="anonymous"></script> --}}
@endsection

{{-- pagescript section --}}
@section('pageScript')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('pieChart').getContext('2d');

        const data = {
            labels: [
                'Done',
                'Planned',
                'On Progress'
            ],
            datasets: [{
                label: 'Sub Milestones',
                data: [{{ $doneMilestones }}, {{ $onProgressMilestones }}, {{ $plannedMilestones }}],
                backgroundColor: [
                    '#10c469',
                    '#f9c851',
                    '#3E8BFF'
                ],
                hoverOffset: 4
            }]
        };

        var options = {
            responsive: true,
            maintainAspectRatio: false,
        };

        var pieChart = new Chart(ctx, {
            type: 'pie',
            data: data,
            options: options
        });
    });

</script>
@endsection