<script>
    @isset($errors)
        @if($errors->any())
            @foreach($errors->all() as $error)
                $.notify({
                    // options
                    title: '<strong>Error:</strong>',
                    message: '{{$error}}'
                }, {
                    // settings
                    element: 'body',
                    type: 'danger',
                    placement: {
                        from: "bottom",
                        align: "right"
                    },
                    delay: 3500,
                    timer: 1000,
                    mouse_over: 'pause',
                    template:
                        '<div data-notify="container" class="col-11 col-sm-3 alert  alert-{0} " role="alert">' +
                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float: left;"></button>' +
                        '<span data-notify="icon"></span> ' +
                        '<span data-notify="title">{1}</span> <br>' +
                        '<span data-notify="message">{2}</span>' +
                        '<div class="progress" data-notify="progressbar">' +
                        '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                        "</div>" +
                        '<a href="{3}" target="{4}" data-notify="url"></a>' +
                        "</div>"
                });
            @endforeach
        @endif
    @endisset

    @if($successMessage = \Illuminate\Support\Facades\Session::get('successMessage'))
            $.notify({
                // options
                title: '<strong>Looks Good:</strong>',
                message: '{{$successMessage}}',
            }, {
                // settings
                element: 'body',
                type: 'success',
                placement: {
                    from: "bottom",
                    align: "right"
                },
                delay: 3500,
                timer: 1000,
                mouse_over: 'pause',
                template:
                    '<div data-notify="container" class="col-11 col-sm-3 alert  alert-{0} " role="alert">' +
                    '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float: left;"></button>' +
                    '<span data-notify="icon"></span> ' +
                    '<span data-notify="title">{1}</span> ' +
                    '<span data-notify="message">{2}</span>' +
                    '<div class="progress" data-notify="progressbar">' +
                    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                    "</div>" +
                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                    "</div>"
            });
    @endif
</script>
