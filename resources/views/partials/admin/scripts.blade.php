
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('js/template.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
{{--<script src="{{ asset('demo1/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>--}}
{{--<script src="{{ asset('demo1/plugins/custom/datatables/datatables.bundle.js')}}"></script>--}}
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
{{--<script src="{{ asset('demo1/js/widgets.bundle.js')}}"></script>--}}
{{--<script src="{{ asset('demo1/js/custom/widgets.js')}}"></script>--}}
{{--<script src="{{ asset('assets/js/custom/apps/chat/chat.js')}}"></script>--}}
{{--<script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>--}}
{{--<script src="{{ asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>--}}
{{--<script src="{{ asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>--}}
<!--end::Page Custom Javascript-->

{{-- Page script files --}}
@yield('pageScriptFiles')

{{-- Page script --}}
@stack('pageInnerScript')

{{-- Datatable properties --}}
<script>
    $("#kt_datatable_example_1").DataTable({
        ordering: false,
        searching: false,
    });
</script>
