<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-t">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul_halaman', 'PPID Provinsi Kalimantan Selatan')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>

    @include('komponen.navigasi')

    <main>
        @yield('konten_utama')
    </main>

    @include('komponen.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
