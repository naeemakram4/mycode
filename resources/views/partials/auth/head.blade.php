<!--begin::Head-->
<head>
    <title>@yield('pageTitle') | {{ config('app.name') }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.png')}}" type="image/x-icon"/>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('css/template.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <style>
        @media (min-width: 992px) {
            .login.login-1 .login-aside {
                width: 100%;
                max-width: 600px;
            }
            .login.login-1 .login-form {
                width: 100%;
                max-width: 400px;
            }
        }
        @media (min-width: 992px) and (max-width: 1399.98px) {
            .login.login-1 .login-aside {
                width: 100%;
                max-width: 400px;
            }
        }
        @media (max-width: 991.98px) {
            .login.login-1 .login-form {
                width: 100%;
                max-width: 350px;
            }
        }
        @media (max-width: 575.98px) {
            .login.login-1 .login-form {
                width: 100%;
                max-width: 100%;
            }
        }
    </style>

    @yield('innerPageStyle')
</head>
<!--end::Head-->
