<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('includes.style')

    <title>@yield('tittle')</title>


</head>

<body>

    <!-- navbar  -->
    @include('includes.navbar')
    <!-- end of navbar  -->

    @yield('content')

    <!-- footer -->
    @include('includes.footer')
    <!-- end of footer  -->



</body>
@include('includes.script')
</html>
