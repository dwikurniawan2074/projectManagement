
    

    <!-- Vendor -->
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/node-waves/waves.min.js') }}"></script>
    
    <!-- Dashboar init js-->
    {{-- <script src="{{ asset('templateAdmin/Admin/dist/assets/js/pages/dashboard.init.js') }}"></script> --}}
    
    <!-- Sweet alert init js-->
    <script src="{{ asset('templateAdmin/Admin/dist/assets/js/pages/sweet-alerts.init.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>
    
    {{-- backup --}}
    <script src="https://kit.fontawesome.com/031855bb65.js" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/attrchange@1.0.1/attrchange.min.js"></script>
    
    <!-- Form Validation js-->
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/parsleyjs/parsley.min.js') }}" defer></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/js/pages/form-validation.init.js') }}" defer></script>
    
    <!-- App js-->
    <script src="{{ asset('templateAdmin/Admin/dist/assets/js/app.min.js') }}"></script>
    @yield('pageScript')

    <script>
        const body = document.querySelector("body");

            $(document).ready(function() {
                $(".button-menu-mobile").on('click', function() {
                    $("body").addClass("sidebar-enable");
                    body.setAttribute("data-leftbar-size", "default");
                });
            });
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#loading-indicator').hide();
            $(document).on('ajaxStart', function() {
                $('#loading-indicator').show();
            });

            $(document).on('ajaxStop', function() {
                $('#loading-indicator').hide();
            });
        });
    </script>

    {{-- Script buat tanggal --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr('.datepicker', {
                enableTime: false, // Hapus ini jika ingin memungkinkan input waktu juga
                dateFormat: "Y-m-d",
            });
        });
    </script>

    {{-- script untuk manggil alert jika berhasil create/edit --}}
    <script>
        var alertSuccess = document.getElementById('success-alert');

        if (alertSuccess) {
            $(document).ready(function() {
                Swal.fire({
                    title: "Complete!",
                    text: "{{ session('success') }}",
                    icon: "success",
                });
            });
        } else {

        }
    </script>

    {{-- script untuk manggil alert jika tidak ada error --}}
    <script>
        var alertSuccess = document.getElementById('error-alert');

        if (alertSuccess) {
            $(document).ready(function() {
                Swal.fire({
                    title: "Ooops..",
                    text: "{{ session('error') }}",
                    icon: "error",
                });
            });
        } else {

        }
    </script>

    {{-- Script buat ubah format uang --}}
    <script>
        $(document).ready(function() {
            $('.rupiah').each(function() {
                var angka = parseFloat($(this).text());
                if (!isNaN(angka)) {
                    var formatRupiah = angka.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&.');
                    $(this).text('Rp ' + formatRupiah);
                }
            });
        });
    </script>
    