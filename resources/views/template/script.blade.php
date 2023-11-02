    <!-- Script Bawaan Template App js-->
    <script src="{{ asset('templateAdmin/Admin/dist/assets/js/app.min.js') }}"></script>

    <!-- Sweet alert init js-->
    <script src="{{ asset('templateAdmin/Admin/dist/assets/js/pages/sweet-alerts.init.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <!-- Vendor -->
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Form Validation js-->
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/parsleyjs/parsley.min.js') }}"></script>

    {{-- <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/simplebar/simplebar.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/feather-icons/feather.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/node-waves/waves.min.js') }}"></script> --}}

    <!-- knob plugin -->

    <!--Charts-->
    {{-- <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/morris.js06/morris.min.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/raphael/raphael.min.js') }}"></script> --}}

    <!-- Dashboar init js-->
    {{-- <script src="{{ asset('templateAdmin/Admin/dist/assets/js/pages/dashboard.init.js') }}"></script> --}}



    {{-- script datatables load library js --}}
    {{-- <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}">
    </script>
    <script
    src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
    </script>
    <script
    src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}">
    </script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}">
    </script>
    <script
    src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}">
    </script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}">
    </script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}">
    </script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}">
    </script>
    <script
    src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}">
    </script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/datatables.net-select/js/dataTables.select.min.js') }}">
    </script> --}}

    {{-- pdf script js --}}
    {{-- <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/pdfmake/build/vfs_fonts.js') }}"></script> --}}

    <!-- Validation init js-->
    {{-- <script src="{{ asset('templateAdmin/Admin/dist/assets/js/pages/form-validation.init.js') }}"></script> --}}



    <!-- Plugins js for file upload-->
    {{-- <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/js/pages/form-fileuploads.init.js') }}"></script> --}}


    <script src="https://cdn.jsdelivr.net/npm/attrchange@1.0.1/attrchange.min.js"></script>
    {{-- backup --}}
    <script src="https://kit.fontawesome.com/031855bb65.js" crossorigin="anonymous"></script>

    {{-- templating page script tiap page --}}
    @yield('pageScript')


    {{-- Script buat tanggal --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr('.datepicker', {
                enableTime: false, // Hapus ini jika ingin memungkinkan input waktu juga
                dateFormat: "Y-m-d",
            });
        });
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

    {{-- Ubah angka jadi persentase --}}
    <script>
        $(document).ready(function() {
            $('.persentasiAngka').each(function() {
                var decimalNumber = parseFloat($(this).text());
                var percentage = (decimalNumber * 100).toFixed(1) + "%";
                $(this).text(percentage);
            });
        });
    </script>

    <script>
        const body = document.querySelector("body");

        $(document).ready(function() {
            $(".button-menu-mobile").on('click', function() {
                $("body").addClass("sidebar-enable");
                body.setAttribute("data-leftbar-size", "default");
            });
        });
    </script>

    {{-- Format tanggal indonesia --}}
    <script>
        $(document).ready(function() {
            $('.formatTanggal').each(function() {
                var tanggal = $(this).text();
                var date = new Date(tanggal);
                var options = {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                };
                var tanggalFormatted = date.toLocaleDateString('id-ID', options);
                $(this).text(tanggalFormatted);
            });
        });
    </script>

    {{-- <script>
        var sidebar = document.getElementsByClassName('sidebar-enable')

        $('body').on('sidebar-enable', function() {
            // do stuff
            if(sidebar){
            $(document).ready(function () {
                $(".button-menu-mobile").on('click', function () {
                    $("body").removeClass("sidebar-enable");
                });
                console.log('clicked');
            });
        }
        });



    </script> --}}
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

