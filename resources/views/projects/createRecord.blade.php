@extends('template.index')

{{-- headerscript section --}}
@section('headerScript')
    {{-- dropzone file upload css --}}
    <link href="{{ asset('templateAdmin/Admin/dist/assets/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet"
    type="text/css" />
    <link href="{{ asset('templateAdmin/Admin/dist/assets/libs/dropify/css/dropify.min.css') }}" rel="stylesheet"
    type="text/css" />

    {{-- flatepckr date time css --}}
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet" type="text/css">
@endsection

{{-- content section --}}
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('recordDocument.store') }}" method="post" enctype="multipart/form-data"
                                    class="parsley-examples" novalidate="">
                                    @csrf

                                    {{-- hidden input project id --}}
                                    <input type="hidden" name="project_id" value="{{ $project }}">

                                    {{-- form input submitted date --}}
                                    <div class="mb-3">
                                        <label for="submitted_date" class="form-label">Submitted Date<span
                                                class="text-danger">*</span></label>
                                        <input type="date" name="submitted_date" parsley-trigger="change" required=""
                                            placeholder="Masukkan tanggal" class="form-control datepicker"
                                            id="submitted_date">
                                        @error('submitted_date')
                                            <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    {{-- form input description --}}
                                    <div class="mb-3">
                                        <label for="userName" class="form-label">Description<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="description" parsley-trigger="change" required=""
                                            placeholder="Tambahkan deskripsi" class="form-control">
                                        @error('description')
                                            <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    {{-- form input due date --}}
                                    <div class="mb-3">
                                        <label for="userName" class="form-label">Due Date<span
                                                class="text-danger">*</span></label>
                                        <input type="date" name="due_date" parsley-trigger="change" required=""
                                            placeholder="Masukkan tanggal" class="form-control datepicker">
                                        @error('due_date')
                                            <p style="color: red;">{{ $message }}</p>
                                        @enderror
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
                                        @error('progress')
                                            <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    {{-- form input file attachment --}}
                                    <div class="mb-3">
                                        <label for="userName" class="form-label">File Attachment</label>
                                        <input type="file" name="file" parsley-trigger="change" data-plugins="dropify"
                                            data-height="150" class="form-control" id="fileAttachment">
                                        @error('file')
                                            <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    {{-- button cancel dan save --}}
                                    <div class="text-end">
                                        <a href="{{ route('projects.show', ['id' => $project]) }}"
                                            class="btn btn-secondary waves-effect">
                                            Cancel
                                        </a>
                                        <button class="btn btn-save waves-effect waves-light px-4" type="submit"
                                            onclick="saveConfirmation()">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- content -->
    </div>
@endsection

{{-- pagescript section --}}
@section('pageScript')
    {{-- Plugins js for file upload-dropify dan dropzone --}}
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/js/pages/form-fileuploads.init.js') }}"></script>

    {{-- flatpckr date time js --}}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> 
@endsection