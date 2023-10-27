<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SARJANA</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins.bundle.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.bundle.css') }}">
</head>

<body>

    @yield('content')

    <script src="{{ url('asset/js/plugins.bundle.js') }}"></script>
    <script src="{{ url('asset/js/scripts.bundle.js') }}"></script>
</body>

</html>
