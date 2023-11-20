@extends('template.index')

@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body" id="customer-contact-form">
                                <form action="{{ route('customerContact.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="name" parsley-trigger="change" required=""
                                            placeholder="Enter Name" class="form-control" id="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="phone" parsley-trigger="change" required=""
                                            placeholder="Enter Phone Number" class="form-control" id="phone">
                                    </div>
                                    <div class="text-end">
                                        <a href="{{ route('customerContact.index') }}"
                                            class="btn btn-secondary waves-effect">Cancel</a>
                                        <button class="btn btn-save waves-effect waves-light px-4" type="submit"
                                            id="submitButton">Save</button>
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

{{-- script halaman create customers contact --}}
@section('pageScript')
@endsection
{{-- <a href="{{ route('customerContact.index') }}"
                                            class="btn btn-secondary waves-effect">
                                            <button type="button" class="btn btn-secondary waves-effect">Cancel</button>
                                        </a>
                                        <button class="btn btn-save waves-effect waves-light px-4" type="submit"
                                            onclick="saveConfirmation()">Save</button> --}}
