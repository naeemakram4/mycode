
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('js/template.js')}}"></script>

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
