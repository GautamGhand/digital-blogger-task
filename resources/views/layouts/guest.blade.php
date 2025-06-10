<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} | {{ $title }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/tabler.css') }}" />
    <script src="{{ asset('assets/js/tabler-theme.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body>
    @include('partials.messages')
    @yield('content')
    @stack('scripts')
</body>

</html>
