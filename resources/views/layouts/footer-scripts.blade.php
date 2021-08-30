
<!-- BEGIN: Vendor JS-->
<script src="{{ URL::asset('app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ URL::asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{ URL::asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{ URL::asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ URL::asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
<script src="{{ URL::asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{ URL::asset('app-assets/vendors/js/tables/datatable/jszip.min.js')}}"></script>
<script src="{{ URL::asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{ URL::asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{ URL::asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{ URL::asset('app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ URL::asset('app-assets/js/core/app-menu.js')}}"></script>
<script src="{{ URL::asset('app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ URL::asset('app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
<!-- END: Page JS-->

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>


@yield('js')














