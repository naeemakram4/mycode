<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toastr-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    @isset($errors)
        @if($errors->any())
            @foreach($errors->all() as $error)
                toastr.error("{{$error}}", 'Error');
            @endforeach
        @endif
    @endisset

    @if($successMessage = \Illuminate\Support\Facades\Session::get('successMessage'))
        toastr.success("{{$successMessage}}", "Success");
    @endif
</script>
