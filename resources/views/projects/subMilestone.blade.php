@extends('template.index')

@section('headerScript')
    {{-- flatepckr date time css --}}
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet" type="text/css">


    <!-- dropzone file upload css -->
    <link href="{{ asset('templateAdmin/Admin/dist/assets/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('templateAdmin/Admin/dist/assets/libs/dropify/css/dropify.min.css') }}" rel="stylesheet"
          type="text/css"/>

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
                                        <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#submilestone-modal"
                                                class="btn btn-red w-md waves-effect waves-light mb-3"
                                                onclick="setStore()"><i
                                                class="mdi mdi-plus"
                                                title="Menambahkan Customer Contact"></i>Add Sub Milestones
                                        </button>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table id="dataTable" class="table mb-0">
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

                                        @forelse($sub_milestones as $sub_milestone)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="formatTanggal">{{ $sub_milestone->start_date }}</td>
                                                <td>{{ $sub_milestone->description }}</td>
                                                <td class="formatTanggal">{{ $sub_milestone->due_date }}</td>
                                                <td>{{ $sub_milestone->bobot }}</td>
                                                <td>
                                                <span class="badge
                                                    {{ $sub_milestone->progress == 'Done' ? 'bg-success' : ($sub_milestone->progress == 'Planned' ? 'bg-warning' : 'bg-info') }}">
                                                    {{ $sub_milestone->progress }}
                                                </span>
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group btn-group-sm" style="float: none;">
                                                        <a href="{{route('sub_milestone.file', $sub_milestone->id)}}"
                                                           title="Download File Record" type="button"
                                                           class="tabledit-edit-button btn btn-success waves-effect waves-light"
                                                           download>
                                                            <span class="mdi mdi-file-download-outline"></span>
                                                        </a>
                                                    </div>
                                                    <div class="btn-group btn-group-sm" style="float: none;">
                                                        <button title="edit data" type="button" data-bs-toggle="modal"
                                                                value="" data-bs-target="#submilestone-modal"
                                                                title="Edit Payment"
                                                                onclick='setUpdated("{{ $sub_milestone->id }}")'
                                                                class="tabledit-edit-button btn btn-primary waves-effect
waves-light"
                                                                style="background-color: #3E8BFF;">
                                                            <span class="mdi mdi-pencil"></span>
                                                        </button>
                                                    </div>
                                                    <div class="btn-group btn-group-sm" style="float: none;">
                                                        <button title="hapus data" type="button" value=""
                                                                onclick='deleteSubMilestone("{{ $sub_milestone->id }}")'
                                                                class="tabledit-edit-button hapusPayment btn btn-danger">
                                                            <span class="mdi mdi-trash-can-outline"></span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" align="center">Empty</td>
                                            </tr>
                                        @endforelse
                                        {{-- <tr>
                                            <td colspan="4" align="center">Belum ada data customer contact</td>
                                        </tr> --}}

                                        </tbody>
                                    </table>
                                    <div class="pagination-nav mt-2 d-flex justify-content-around">
                                        {{ $sub_milestones->links('pagination::bootstrap-5') }}
                                    </div>
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
                                                <p class="title-text">Milestone Desc</p>
                                                <p class="details-text">{{$milestone->description}}</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Start Date</p>
                                                <p class="details-text formatTanggal">{{$milestone->submitted_date}}</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Due Date</p>
                                                <p class="details-text formatTanggal">{{$milestone->due_date}}</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Bobot Milestones</p>
                                                <p class="details-text">{{$milestone->bobot}}</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Bobot Tersedia</p>
                                                <p class="details-text">{{$milestone->bobot - $max}}</p>
                                            </th>
                                        </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- modals sub milestone --}}
                    <form action="" class="parsley-examples" id="formSubMilestone" data-parsley-validate method=""
                          enctype="multipart/form-data">
                        @csrf
                        <div id="submilestone-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel"
                             aria-hidden="true"
                             style="overflow:hidden;">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">
                                            Sub Milestones Data</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body milestoneEditModal">
                                        <div class="row">

                                            {{-- form input hidden project id --}}
                                            <input type="hidden" name="milestone_id" id="milestone_id" value="">

                                            {{-- form input submitted date --}}
                                            <div class="mb-3">
                                                <label for="start_date" class="form-label">Start Date<span
                                                        class="text-danger">*</span></label>
                                                <input type="date" name="start_date" parsley-trigger="change"
                                                       required=""
                                                       placeholder="Masukkan tanggal" class="form-control datepicker"
                                                       id="start_date">
                                            </div>

                                            {{-- form input description --}}
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="description" parsley-trigger="change"
                                                       required=""
                                                       placeholder="Tambahkan deskripsi" id="description"
                                                       class="form-control"
                                                       value="">
                                            </div>

                                            {{-- form input due date --}}
                                            <div class="mb-3">
                                                <label for="due_date" class="form-label">Due Date<span
                                                        class="text-danger">*</span></label>
                                                <input type="date" name="due_date" parsley-trigger="change" required=""
                                                       placeholder="Masukkan tanggal" class="form-control datepicker"
                                                       id="due_date">
                                            </div>

                                            {{-- form input bobot --}}
                                            <div class="mb-3">
                                                <label for="bobot" class="form-label">Bobot<span
                                                        class="text-danger">*</span></label>
                                                <input type="number" name="bobot" parsley-trigger="change" required
                                                       placeholder="Masukkan bobot" class="form-control"
                                                       id="bobot" pattern="[0-9]{1,3}"
                                                       max="{{$milestone->bobot - $max}}">

                                            </div>
                                            {{-- form input progress --}}
                                            <div class="mb-3">
                                                <label for="progress" class="form-label">Progress<span
                                                        class="text-danger">*</span></label>
                                                <select class="form-control" id="progress" name="progress">
                                                    <option value="Planned">Planned</option>
                                                    <option value="OnProgress">On Progress</option>
                                                    <option value="Done">Done</option>
                                                </select>
                                            </div>

                                            {{-- form input file attachment --}}
                                            <div class="mb-3">
                                                <label for="userName" class="form-label">File Attachment<span
                                                        class="text-danger">*</span></label>
                                                <input type="file" name="file" parsley-trigger="change"
                                                       data-plugins="dropify" data-height="150" class="form-control"
                                                       id="fileAttachment">
                                            </div>
                                            <input type="hidden" name="milestone_id" id="milestone_id"
                                                   value="{{$id}}">
                                        </div>
                                        <div class=" modal-footer">
                                            {{-- button cancel --}}
                                            <button type="button" class="btn btn-secondary waves-effect"
                                                    data-bs-dismiss="modal">
                                                Close
                                            </button>

                                            {{-- button save --}}
                                            <button type="submit" class="btn btn-save waves-effect waves-light">Save
                                                Changes
                                            </button>
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
    {{-- library chart js --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- flatpckr date time js --}}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


    {{-- Plugins js for file upload-dropify dan dropzone --}}
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/js/pages/form-fileuploads.init.js') }}"></script>


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
                    data: [{{$done}}, {{$on_progress}}, {{$planned}}],
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

    <script type="text/javascript">
        const formSubMilestone = $('#formSubMilestone');
        $(document).ready(function () {

            formSubMilestone[0].reset();
        });

        function setStore() {
            formSubMilestone[0].reset();
            $('#_method').remove();
            formSubMilestone.attr('action', "{{ route('sub_milestone.store') }}");
            formSubMilestone.attr('method', "POST");

        }

        function setUpdated(id) {
            formSubMilestone[0].reset();
            formSubMilestone.attr('action', "{{ route('sub_milestone.update', '') }}" + '/' + id);
            formSubMilestone.attr('method', "POST");
            formSubMilestone.append('<input type="hidden" name="_method" id="_method" value="PATCH">');
            $.ajax({
                url: "{{ route('sub_milestone.form', '') }}" + '/' + id,
                type: 'GET',
                success: function (data) {
                    $('#milestone_id').val(data.milestone_id);
                    $('#start_date').val(data.start_date);
                    $('#description').val(data.description);
                    $('#due_date').val(data.due_date);
                    $('#bobot').val(data.bobot);
                    $('#progress').val(data.progress);
                },
                error: function (data) {
                    console.log('error');
                }
            });
        }

        function deleteSubMilestone(id) {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3E8BFF',
                cancelButtonColor: '#FF3E3E',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Tidak, batalkan!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('sub_milestone.delete', '') }}" + '/' + id,
                        type: 'DELETE',
                        data: {
                            _token: "{{ csrf_token() }}",
                        },
                        success: function () {
                            Swal.fire(
                                'Dihapus!',
                                'Data berhasil dihapus.',
                                'success'
                            ).then(() => {
                                location.reload();
                            });
                        },
                        error: function () {
                            console.log('error');
                            Swal.fire(
                                'Dibatalkan',
                                'Data batal dihapus :)',
                                'error'
                            );
                        }
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Dibatalkan',
                        'Data batal dihapus :)',
                        'error'
                    );
                }
            });
        }


        formSubMilestone.submit(function (e) {
            e.preventDefault();
            if (formSubMilestone.parsley().isValid()) {
                let action = formSubMilestone.attr('action');
                let method = formSubMilestone.attr('method');
                let formData = new FormData(this);

                $.ajax({
                    type: method,
                    url: action,
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        $('#submilestone-modal').modal('hide');
                        window.location.reload(); // Reload the window upon successful form submission
                    },
                    error: function (data) {
                        console.log('error')
                    }
                });
            } else {
                console.log('Form validation failed');
            }
        });

    </script>

@endsection
