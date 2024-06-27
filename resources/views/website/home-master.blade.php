<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    @include('website.includes.meta')
    <!-- SITE TITLE -->
    <title> Electro-Nest @yield('title')</title>

    @include('website.includes.style')

   @include('website.includes.script')

</head>

<body>

<!-- START HEADER -->
@include('website.includes.header')
<!-- END HEADER -->

@yield('body')

<!-- START FOOTER -->
@include('website.includes.footer')
<!-- END FOOTER -->

@include('website.includes.script')

</body>
</html>
