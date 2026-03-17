<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Sistem Informasi Jurusan TI')</title>
    <style>
      main > .container {
        padding: 60px 15px 0;
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    @include('layouts.header')

    <!-- Begin page content -->
    <main class="flex-shrink-0">
      <div class="container">
        @yield('container')
      </div>
    </main>

    @include('layouts.footer')

    <script src="/js/bootstrap.bundle.min.js"></script>
  </body>
</html>