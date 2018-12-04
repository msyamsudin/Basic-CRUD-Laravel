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
        <!-- <script src="{{ asset('vendor/js/jquery-ui-custom.js') }}"></script> -->
        <script src="{{ asset('vendor/js/custom.js') }}"></script>
</head>
<body>

<!-- Navigasi -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="z-index:0;">
  <a class="navbar-brand" href="{{ url('/siswa') }}">Simple App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/siswa') }}">Beranda</a>
      </li>
    </ul>
  </div>

      <div class="float-right">
        <form class="form-inline" action="{{ route('siswa.search') }}" method="get">
            <input class="form-control mr-sm-2" type="search" placeholder="Cari Siswa" aria-label="Search" name="q" id="search_name">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div id="nameList"></div>
    </div>
    {{ csrf_field() }}
</nav>
    @yield('konten')
    <br>
<p></p>
</body>
</html>

<script>
        $(document).ready(function(){

          // autocomplete
          $('#search_name').keyup(function(){
            var query = $(this).val();
            if (query != '')
            {
              var _token = $('input[name="_token"]').val();
              $.ajax({
                  url:"{{ route('autocomplete.fetch') }}",
                  method: "POST",
                  data : {query:query, _token:_token},
                  success : function(data)
                  {
                    $('#nameList').fadeIn();
                    $('#nameList').html(data);
                  }
              })
              selectSearch();
            } else
            {
              $('#nameList').fadeOut();
            }
          });
        });
</script>