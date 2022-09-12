<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rethouse - Real Estate HTML Template">
    <meta name="keywords" content="Real Estate, Property, Directory Listing, Marketing, Agency" />
    <meta name="author" content="mardianto - retenvi.com">

    <title>Rethouse - Real Estate @yield('title')</title>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <!-- favicon.ico in the root directory -->
    <link rel="shortcut icon" href="{{ asset('assets/images/icon.png') }}">
    <meta name="theme-color" content="#3454d1">
    <link href="{{ asset('./css/styles.css?fd365619e86ad9137a29') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/assets/dropzone/dropzone.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
    <style>
        .dz-image img {
            width: 120px;
            height: 120px;
        }
    </style>
</head>

<body>
    <!-- HEADER -->
    @include('layouts.layout.partials.navbar_navbar_organism_create')

    <div class="clearfix"></div>
      @yield('content')
    <!-- Footer  -->
    @include('layouts.layout.partials.footer')



    <!-- SCROLL TO TOP -->
    <a href="{{ asset('javascript:') }}" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TO TOP -->
    <script src="{{ asset('./js/index.bundle.js?fd365619e86ad9137a29') }}"></script>
    <script src="{{ asset('assets/assets/dropzone/dropzone.min.js')}}"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

    @yield('script')
</body>

</html>
