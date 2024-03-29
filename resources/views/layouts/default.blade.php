<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INT203 | @yield('title')</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/0c02033d25.css">
    @yield('custom_head')
  </head>
  <body>
    @yield('content')
    <!-- Scripting -->
    <script src="/js/jquery.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/sweetalert.min.js"></script>
    @yield('custom_script')
  </body>
</html>