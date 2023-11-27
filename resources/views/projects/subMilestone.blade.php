@extends('template.index')

@section('headerScript')
{{-- flatepckr date time css --}}
<link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row table-title">
                                <div class="col-sm-8">
                                    <h4 class="mt-0 header-title">Sub Milestones</h4>
                                </div>
                                <div class="col-sm-4 text-end">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#submilestone-modal"
                                        class="btn btn-red w-md waves-effect waves-light mb-3"><i class="mdi mdi-plus"
                                            title="Menambahkan Customer Contact"></i>Add Sub Milestones</button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="dataTable" class="table mb-0" >
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Start Date</th>
                                            <th>Description</th>
                                            <th>Due Date</th>
                                            <th>Bobot</th>
                                            <th>Status</th>
                                            <th class="text-center" width="200">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- <tr>
                                            <td colspan="4" align="center">Belum ada data customer contact</td>
                                        </tr> --}}
                                        <tr>
                                            <td>1</td>
                                            <td>23 Agustus 2023</td>
                                            <td>Approval Drawing Rev.1</td>
                                            <td>30 Mei 2023</td>
                                            <td>10%</td>
                                            <td>
                                                <span class="badge bg-success">Done</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <a href="" title="Download File Record" type="button"
                                                        class="tabledit-edit-button btn btn-success waves-effect waves-light" download>
                                                        <span class="mdi mdi-file-download-outline"></span>
                                                    </a>
                                                </div>
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <button title="edit data" type="button" data-bs-toggle="modal"
                                                        value="" data-bs-target="#submilestone-modal"
                                                        title="Edit Payment"
                                                        class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                                        style="background-color: #3E8BFF;">
                                                        <span class="mdi mdi-pencil"></span>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <button title="hapus data" type="button" value=""
                                                        class="tabledit-edit-button hapusPayment btn btn-danger">
                                                        <span class="mdi mdi-trash-can-outline"></span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>23 Agustus 2023</td>
                                            <td>Approval Drawing Rev.1</td>
                                            <td>30 Mei 2023</td>
                                            <td>10%</td>
                                            <td>
                                                <span class="badge bg-success">Done</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <a href="" title="Download File Record" type="button"
                                                        class="tabledit-edit-button btn btn-success waves-effect waves-light" download>
                                                        <span class="mdi mdi-file-download-outline"></span>
                                                    </a>
                                                </div>
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <button title="edit data" type="button" data-bs-toggle="modal"
                                                        value="" data-bs-target="#submilestone-modal"
                                                        title="Edit Payment"
                                                        class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                                        style="background-color: #3E8BFF;">
                                                        <span class="mdi mdi-pencil"></span>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <button title="hapus data" type="button" value=""
                                                        class="tabledit-edit-button hapusPayment btn btn-danger">
                                                        <span class="mdi mdi-trash-can-outline"></span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>23 Agustus 2023</td>
                                            <td>Approval Drawing Rev.1</td>
                                            <td>30 Mei 2023</td>
                                            <td>10%</td>
                                            <td>
                                                <span class="badge bg-success">Done</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <a href="" title="Download File Record" type="button"
                                                        class="tabledit-edit-button btn btn-success waves-effect waves-light" download>
                                                        <span class="mdi mdi-file-download-outline"></span>
                                                    </a>
                                                </div>
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <button title="edit data" type="button" data-bs-toggle="modal"
                                                        value="" data-bs-target="#submilestone-modal"
                                                        title="Edit Payment"
                                                        class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                                        style="background-color: #3E8BFF;">
                                                        <span class="mdi mdi-pencil"></span>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <button title="hapus data" type="button" value=""
                                                        class="tabledit-edit-button hapusPayment btn btn-danger">
                                                        <span class="mdi mdi-trash-can-outline"></span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <div id="pie-chart" class="mb-2">
                                            <canvas id="pieChart" height="250"></canvas>
                                        </div>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Milestone Name</p>
                                                <p class="details-text">Approval Drawing</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Start Date</p>
                                                <p class="details-text">23 Agustus 2023</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Due Date</p>
                                                <p class="details-text">30 Agustus 2023</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Bobot Milestones</p>
                                                <p class="details-text">10%</p>
                                            </th>
                                        </tr>
    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- modals sub milestone --}}
                <form action="" class="parsley-examples" novalidate="" method="post"
                enctype="multipart/form-data">
                @csrf
                <div id="submilestone-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                    style="overflow:hidden;">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">
                                    Sub Milestones Data</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body milestoneEditModal">
                                <div class="row">

                                    {{-- form input hidden project id --}}
                                    <input type="hidden" name="milestone_id" id="milestone_id" value="">

                                    {{-- form input submitted date --}}
                                    <div class="mb-3">
                                        <label for="submitted_date" class="form-label">Submitted Date<span
                                                class="text-danger">*</span></label>
                                        <input type="date" name="submitted_date" parsley-trigger="change" required=""
                                            placeholder="Masukkan tanggal" class="form-control datepicker" id="submitted_date">
                                    </div>

                                    {{-- form input description --}}
                                    <div class="mb-3">
                                        <label for="userName" class="form-label">Description<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="description" parsley-trigger="change" required=""
                                            placeholder="Tambahkan deskripsi" id="description" class="form-control"
                                            value="">
                                    </div>

                                    {{-- form input due date --}}
                                    <div class="mb-3">
                                        <label for="due_date" class="form-label">Due Date<span
                                                class="text-danger">*</span></label>
                                        <input type="date" name="due_date" parsley-trigger="change" required=""
                                            placeholder="Masukkan tanggal" class="form-control datepicker" id="due_date">
                                    </div>

                                    {{-- form input progress --}}
                                    <div class="mb-3">
                                        <label for="progress" class="form-label">Progress<span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" id="progress" name="progress">
                                            <option value="Planned">Planned</option>
                                            <option value="On Progress">On Progress</option>
                                            <option value="Done">Done</option>
                                        </select>
                                    </div>

                                    {{-- form input file attachment --}}
                                    <div class="mb-3">
                                        <label for="userName" class="form-label">File Attachment<span
                                                class="text-danger">*</span></label>
                                        <input type="file" name="file" parsley-trigger="change" required=""
                                            data-plugins="dropify" data-height="150" class="form-control" id="fileAttachment">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    {{-- button cancel --}}
                                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">
                                        Close
                                    </button>

                                    {{-- button save --}}
                                    <button type="submit" class="btn btn-save waves-effect waves-light">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            </div>

        </div>
    </div>
</div>
@endsection

@section('pageScript')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
{{-- flatpckr date time js --}}
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('pieChart').getContext('2d');

        const data = {
            labels: [
                'Done',
                'Planned',
                'On Progress'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [300, 50, 100],
                backgroundColor: [
                'rgb(1, 214, 22)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
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

{{-- Hapus Payment Pop Up --}}
<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '.hapusPayment', function() {
            var id = $(this).val();

            // Display a confirmation dialog
            Swal.fire({
                title: "Anda yakin?",
                text: "Data tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#f34e4e',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel',
                backrop: 'static',
                allowOutsideClick: false
            }).then((result) => {
                if (result.isConfirmed) {
                    // Silahkan isi logika nya sendiri xixixi
                    $.ajax({
                        url: "{{ route('top.destroy', '') }}" + '/' + id,
                        type: 'DELETE',
                        data: {
                            _token: "{{ csrf_token() }}",
                        },
                        success: function() {
                            return console.log('success');
                        },
                        error: function() {
                            return console.log('error');
                        }
                    });

                }
            });
        });
    });
</script>
@endsection