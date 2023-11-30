@extends('template.index')

@section('headerScript')
<style>
    #doughnutChart {
        height: 100%;
    }
</style>
@endsection

@section('content')
{{--    @dd($project)--}}
<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4>My Projects</h4>
                            <h3>{{$project}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4>Milestones Completed</h4>
                            <h3>50</h3>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4>Milestones On-Going</h4>
                            <h3>50</h3>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4>PO Total</h4>
                            <h3 class="rupiah">54564310</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h4 class="header-title mt-0 mb-3">Resume Milestones</h4>
                                <div id="donut-chart">
                                    <canvas id="doughnutChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h4 class="header-title mt-0 mb-3">Project Yang Dikerjakan</h4>
                                <div id="line-chart">
                                    <canvas id="lineChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('pageScript')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('lineChart');

    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'], // Replace with your actual labels
        datasets: [{
            label: 'Your Dataset Label',
            data: [65, 59, 80, 81, 56, 55, 40],
            fill: false,
            borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
        }]
      },

    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
            // Get the context of the canvas element
            var ctx = document.getElementById('doughnutChart').getContext('2d');

            // Provide data for the chart
            const data = {
                labels: [
                    'Completed',
                    'Blue',
                    'On Progress'
                ],
                datasets: [{
                    data: [300, 50, 100],
                    backgroundColor: [
                    'rgb(23, 215, 42)',
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
            var doughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: options
            });
        });
</script>

@endsection
