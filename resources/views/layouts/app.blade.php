<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} | {{ $title }}</title>
    <link href="{{ asset('assets/css/jsvectormap.css') }}" rel="stylesheet" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/tabler.css') }}" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PLUGINS STYLES -->
    <link href="{{ asset('assets/css/tabler-flags.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-socials.css') }} rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-payments.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-vendors.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-marketing.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-themes.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('assets/css/frontend.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/datatables.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/datatable.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/datatables-scroller.css') }}" />
    <link href="{{ asset('assets/css/datatables-checkboxes.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <script src="{{ asset('assets/js/tabler-theme.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body>
    @include('partials.messages')
    @include('layouts.navbar')
    @yield('content')
    <script src="{{ asset('assets/js/datatable.min.js') }}"></script>
    <script src="{{ asset('assets/js/apexcharts.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/jsvectormap.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/world.js') }}" defer></script>
    <script src="{{ asset('assets/js/world-merc.js') }}" defer></script>
    <!-- END PAGE LIBRARIES -->
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/js/tabler.min.js') }}" defer></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN DEMO SCRIPTS -->
    <script src="{{ asset('assets/js/demo.min.js') }}" defer></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script> -->
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="/vendor/datatables/buttons.server-side.js"></script>
    @stack('scripts')
</body>

</html>
