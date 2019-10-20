<!DOCTYPE html>
<html lang="en">

<head>
  @include('website.includes.head')
</head>

<body>
  @include('website.includes.navbar')

  @yield('content')

  @include('website.includes.footer')
</body>

</html>
