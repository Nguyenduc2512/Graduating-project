<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="csrf-token" content="{{ csrf_token() }}"><!-- style -->
    @include('client/layouts/style')
    <title>Auth Shoes</title>
</head>

<body>
    <!-- header -->
    @include('client/layouts/main-header')
    <!-- slider -->

    @yield('content')

    <!-- footer -->
    @include('client/layouts/footer')

    <!-- script -->
    @include('client/layouts/script')
</body>

</html>
