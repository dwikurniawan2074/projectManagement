@extends('template.index')

{{-- headerscript section --}}
@section('headerScript')
    <!-- Include Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet"/>

    {{-- flatepckr date time css --}}
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet" type="text/css">

    <style>
        .input-code {
            font-size: 1rem;
            margin: 0 0.25rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        .input-code:focus {
            border-color: #007bff;
            outline: none;
        }
    </style>
@endsection

{{-- content section --}}
@section('content')

    {{--    @dd($project)--}}
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="post" class="parsley-examples" id="formProject"
                                      novalidate="">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="purchase-order-number" class="form-label">Purchase Oder
                                                    Number<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" onfocus="highlightInput(this)"
                                                       oninput="moveToNext(this, 'po-2')" onblur="resetInput(this)"
                                                       name="po-1" parsley-trigger="change" required=""
                                                       placeholder="256"
                                                       id="po-1"
                                                       class="form-control input-code">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="purchase-order-number" class="form-label"><span
                                                        class="text-danger">*</span></label>
                                                <input type="text" onfocus="highlightInput(this)"
                                                       onblur="resetInput(this)" name="po-2"
                                                       id="po-2"
                                                       oninput="moveToNext(this, '', 'po-1')" parsley-trigger="change"
                                                       required="" placeholder="Code Purchase"
                                                       class="form-control input-code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <div>
                                                <label for="memo-number" class="form-label">Memo Number</label>
                                                <input type="text" maxlength="3" onfocus="highlightInput(this)"
                                                       onblur="resetInput(this)" name="memo-1" id="memo-1"
                                                       parsley-trigger="change" placeholder="S1"
                                                       class="form-control input-code"
                                                       oninput="moveToNext(this, 'memo-2', '')">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div>
                                                <label for="memo-number" class="form-label">&nbsp;</label>
                                                <input type="text" maxlength="3" onfocus="highlightInput(this)"
                                                       onblur="resetInput(this)" name="memo-2" id="memo-2"
                                                       parsley-trigger="change" placeholder="23"
                                                       class="form-control input-code"
                                                       oninput="moveToNext(this, 'memo-3', 'memo-1')">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div>
                                                <label for="memo-number" class="form-label">&nbsp;</label>
                                                <input type="text" maxlength="3" onfocus="highlightInput(this)"
                                                       onblur="resetInput(this)" name="memo-3" id="memo-3"
                                                       parsley-trigger="change" placeholder="Sales Order Code"
                                                       class="form-control input-code"
                                                       oninput="moveToNext(this, 'memo-4', 'memo-2')">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div>
                                                <label for="memo-number" class="form-label">&nbsp;</label>
                                                <input type="text" maxlength="3" onfocus="highlightInput(this)"
                                                       onblur="resetInput(this)" name="memo-4" id="memo-4"
                                                       parsley-trigger="change" placeholder="Sales Order Code"
                                                       class="form-control input-code"
                                                       oninput="moveToNext(this, 'memo-5', 'memo-3')">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div>
                                                <label for="memo-number" class="form-label">&nbsp;</label>
                                                <input type="text" maxlength="3" onfocus="highlightInput(this)"
                                                       oninput="moveToNext(this, '', 'memo-4')"
                                                       onblur="resetInput(this)"
                                                       name="memo-5" id="memo-5" parsley-trigger="change"
                                                       placeholder="Sales Order Code" class="form-control input-code">
                                            </div>
                                        </div>
                                        <span class="help-block"><small>(Optional Jika SO Number Sudah
                                                Diisi)</small></span>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="sales-order-number" class="form-label">Sales Oder
                                                    Number</label>
                                                <input type="text" maxlength="2" onfocus="highlightInput(this)"
                                                       onblur="resetInput(this)" name="so-1" id="so-1"
                                                       oninput="moveToNext(this, 'so-2', 'so-1')"
                                                       parsley-trigger="change"
                                                       placeholder="S1" class="form-control input-code">
                                                <span class="help-block"><small>(Optional)</small></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="sales-order-number" class="form-label">&nbsp;</label>
                                                <input type="text" maxlength="2" onfocus="highlightInput(this)"
                                                       onblur="resetInput(this)" name="so-2" id="so-2"
                                                       oninput="moveToNext(this, 'so-3', 'so-2')"
                                                       parsley-trigger="change"
                                                       placeholder="23" class="form-control input-code">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="sales-order-number" class="form-label">&nbsp;</label>
                                                <input type="text" onfocus="highlightInput(this)"
                                                       onblur="resetInput(this)" name="so-3" id="so-3"
                                                       parsley-trigger="change" placeholder="Sales Order Code"
                                                       class="form-control input-code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailAddress" class="form-label">Project Name<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="label" parsley-trigger="change" required=""
                                               id="projectName"
                                               placeholder="Masukkan Project Name" class="form-control"
                                               value="{{$project->label}}">
                                        @error('label')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="customers" class="form-label">Customers<span
                                                class="text-danger">*</span></label>
                                        <select id="customers" class="form-control" name="customers"
                                                style="color: black;">
                                            <option>--Pilih Customer--</option>
                                            <option value="createNewCustomer">Buat baru</option>
                                            @foreach ($customers as $customer)
                                                <option
                                                    value="{{ $customer->id }}">{{ $customer['companyName'] }}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="customers-contact-name" class="form-label">Customers Contact
                                            Name<span
                                                class="text-danger">*</span></label>
                                        <select id="customers-name" class="form-control" name="customers-name"
                                                style="color: black;">
                                            <option></option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="project_manager" class="form-label">Project Manager<span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" id="project_manager" name="project_manager">
                                            @if (isset($usersByRole['Project Manager']))
                                                <option>--Pilih Project Manager--</option>
                                                @foreach ($usersByRole['Project Manager'] as $pm)
                                                    <option value="{{ $pm['id'] }}">{{ $pm['name'] }}</option>
                                                @endforeach
                                            @else
                                                <option value="">Tidak ada Project Manager</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="sales_executive" class="form-label">Sales Executive<span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" id="sales_executive" name="sales_executive">
                                            @if (isset($usersByRole['Sales Executive']))
                                                <option>--Pilih Sales Executive--</option>
                                                @foreach ($usersByRole['Sales Executive'] as $se)
                                                    <option value="{{ $se['id'] }}">{{ $se['name'] }}</option>
                                                @endforeach
                                            @else
                                                <option value="">Tidak ada Sales Executive</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="location" class="form-label">Location<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="location" parsley-trigger="change" required=""
                                               placeholder="Masukkan lokasi" class="form-control"
                                               value="{{$project->location}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="start-date" class="form-label">Start Date<span
                                                class="text-danger">*</span></label>
                                        <input type="date" name="start_date" parsley-trigger="change" required=""
                                               placeholder="Masukkan tanggal" class="form-control datepicker"
                                               value="{{$project->start_date}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="end-date" class="form-label">End Date<span
                                                class="text-danger">*</span></label>
                                        <input type="date" name="end_date" parsley-trigger="change" required=""
                                               placeholder="Masukkan tanggal" class="form-control datepicker"
                                               value="{{$project->end_date}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="purchase-order-amount" class="form-label">Purchase Order Amount<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="po_amount" parsley-trigger="change" required=""
                                               placeholder="Masukkan Purchase Order Amount" class="form-control"
                                               value="{{$project->po_amount}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="preliminary-cost" class="form-label">Preliminary Cost<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="preliminary_cost" parsley-trigger="change"
                                               required="" placeholder="Masukkan Preliminary Cost" class="form-control"
                                               value="{{$project->preliminary_cost}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="service-budget" class="form-label">Service Budget<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="expense_budget" parsley-trigger="change"
                                               required="" placeholder="Masukkan Service Budget" class="form-control"
                                               value="{{$project->expense_budget}}">
                                    </div>
                                    <div class="text-end">
                                        <a href="{{ url('projects') }}">
                                            <button type="button" class="btn btn-secondary waves-effect"
                                                    onclick="">Cancel
                                            </button>
                                        </a>
                                        <button class="btn btn-save waves-effect waves-light px-4" type="submit"
                                                onclick="saveConfirmation()">Save
                                        </button>
                                    </div>
                                </form>
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
    <!-- Include Select2 JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    {{-- flatpckr date time js --}}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script type="text/javascript">
        $(document).ready(() => {
            const form = $('#formProject');
            let project = {!! $project !!};

            console.log(project)
            let poNumber = project['po'].split('/');
            form.find('#po-1').val(poNumber[0]);
            form.find('#po-2').val(poNumber[1]);

            if (project['memo'] !== null) {
                let memoNumber = project['memo'].split('/');
                form.find('#memo-1').val(memoNumber[0]);
                form.find('#memo-2').val(memoNumber[1]);
                form.find('#memo-3').val(memoNumber[2]);
                form.find('#memo-4').val(memoNumber[3]);
                form.find('#memo-5').val(memoNumber[4]);
            }

            if (project['so'] !== null) {
                let soNumber = project['so'].split('/');
                form.find('#so-1').val(soNumber[0]);
                form.find('#so-2').val(soNumber[1]);
                form.find('#so-3').val(soNumber[2]);
            }
            $('#customers').val(project.customer_id).trigger('change');
            var $customerContact = $('#customers-name');

            if (project.customer_id === 'createNewCustomer') {
                // Redirect ke halaman pembuatan customer
                window.location.href = "{{ route('customer.create') }}";
            } else if (project.customer_id) {
                $customerContact.prop('disabled', false);
                $.ajax({
                    url: '/customerContact/get-customer-contacts/' + project.customer_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        console.log(data)
                        $('#customers-name').empty();
                        $('#customers-name').append(
                            '<option value="">Pilih Customer Contact</option>');

                        $.each(data, function (key, value) {
                            let selected = value.id === project.customer_contact_id ? ' selected' : '';
                            $('#customers-name').append('<option value="' + value.id + '"' + selected + '>' + value.name + '</option>');
                        });
                    }
                });
            } else {
                $customerContact.prop('disabled', true);
            }


            $('#project_manager').val(project.project_manager).trigger('change');
            $('#sales_executive').val(project.sales_executive).trigger('change');
        })
    </script>
    <script>
        $(document).ready(function () {
            $('#customers').select2({
                placeholder: 'Cari company',
                multiple: false,
                dropdownAutoWidth: true,
                width: '100%',
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#customers-name').select2({
                placeholder: 'Cari customer',
                multiple: false,
                dropdownAutoWidth: true,
                width: '100%',
            });
        });
    </script>

    <script>
        function moveToNext(input, nextFieldId) {
            if (input.value.length === input.maxLength) {
                document.getElementById(nextFieldId).focus();
            } else if (input.value.length === 0 && prevFieldId) {
                document.getElementById(prevFieldId).focus();
            }
        }

        function highlightInput(input) {
            input.style.borderColor = "#007bff"; /* Ganti warna border saat fokus */
        }

        function resetInput(input) {
            input.style.borderColor = "#ccc"; /* Kembalikan warna border ke warna asal saat tidak dalam fokus */
        }
    </script>
    <script>
        $(document).ready(function () {
            $('#customers').on('change', function () {
                var customer_id = $(this).val();
                var $customerContact = $('#customers-name');

                if (customer_id === 'createNewCustomer') {
                    // Redirect ke halaman pembuatan customer
                    window.location.href = "{{ route('customer.create') }}";
                } else if (customer_id) {
                    $customerContact.prop('disabled', false);
                    $.ajax({
                        url: '/customerContact/get-customer-contacts/' + customer_id,
                        type: 'GET',
                        dataType: 'json',
                        success: function (data) {
                            console.log(data)
                            $('#customers-name').empty();
                            $('#customers-name').append(
                                '<option value="">Pilih Customer Contact</option>');

                            $.each(data, function (key, value) {
                                $('#customers-name').append('<option value="' + value
                                    .id + '">' + value.name + '</option>');
                            });
                        }
                    });
                } else {
                    $customerContact.prop('disabled', true);
                }
            });
        });
    </script>
@endsection
