<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('admin.includes.header')
  </head>
  <body id="page-top">
    @include('admin.includes.navbar')
    @include('admin.includes.sidebar')

    <!-- @yield('navbar') -->
    @yield('content')

    @include('admin.includes/footer')
  </body>
</html>
