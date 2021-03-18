<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pod</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lexend+Deca&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <div id="app"></div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>