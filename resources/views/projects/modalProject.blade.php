<form class="parsley-examples" novalidate="" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div id="add-customer-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
        style="overflow:hidden;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Add Customer</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">

                            {{-- form input customer name --}}
                            <div class="mb-3">

                                <label for="companyName" class="form-label">Company
                                    Name<span class="text-danger"></span></label>
                                <input type="hidden" id="customer_id" name="id">
                                <input type="text" class="form-control" id="customer_companyName_add"
                                    parsley-trigger="change" required="">
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" id="submit-form-button" class="btn btn-secondary waves-effect"
                            data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" id="addCustomer" class="btn btn-save waves-effect waves-light">
                            Save
                            changes
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.modal -->
    </div>
</form>

<form class="parsley-examples" novalidate="" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div id="add-customerContact-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="overflow:hidden;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Add Customer Contact</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">

                            {{-- form input customer name --}}
                            <div class="mb-3">

                                <label for="companyName" class="form-label">Company
                                    Name<span class="text-danger"></span></label>
                                <input type="text" class="form-control"id="companyNameModal" parsley-trigger="change"
                                    readonly>
                            </div>
                            <div class="mb-3">

                                <label for="companyName" class="form-label">Nama<span
                                        class="text-danger"></span></label>
                                <input type="text" class="form-control" id="customerContactNameModal"
                                    parsley-trigger="change" required>
                            </div>
                            <div class="mb-3">

                                <label for="customerPhone" class="form-label">Phone<span
                                        class="text-danger"></span></label>
                                <input type="text" class="form-control" id="customerPhone" parsley-trigger="change"
                                    required>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" id="submit-form-button" class="btn btn-secondary waves-effect"
                            data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" id="addCustomerContact" class="btn btn-save waves-effect waves-light">
                            Save
                            changes
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.modal -->
    </div>
</form>
