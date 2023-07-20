<!--begin::Head-->
<head>
    <title>@yield('pageTitle') | {{ config('app.name') }}</title>

    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />

    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.png')}}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('css/template.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    @yield('pageInnerStyle')
</head>
<!--end::Head-->
