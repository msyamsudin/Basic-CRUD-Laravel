<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('judul') </title>

        <link href="{{ asset('vendor/css/style-custom.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/bootstrap/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">

        <script src="{{ asset('vendor/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap-datepicker.min.js') }}"></script>

        <script src="{{ asset('vendor/js/custom.js') }}"></script>

</head>
<body>

<!-- Navigasi -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ url('/siswa') }}">Simple App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/siswa') }}">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
  </div>
</nav>

    @yield('konten')
    <br>
<p></p>
</body>
</html>