<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cave à Vin</title>
</head>
<body>
    <h1 class="font-semibold text-orange-500 text-center ">Cave à Vin</h1>
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
</body>
</html>