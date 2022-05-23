
<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="{{ url('../assets/images/favicon/brand.ico')}}">

<!-- Libs CSS -->
@include('csslib')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">

<!-- Theme CSS -->
<link rel="stylesheet" href="{{ url('../assets/css/theme.min.css') }}">

    <title>ໜ້າຫຼັກ</title>
<link rel="stylesheet" href="{{ asset('assets/css/font.css') }}">
  </head>

  <body>
    <div id="db-wrapper">
      <!-- navbar vertical -->
       <!-- Sidebar -->
 
@include('sidebar')

       <!-- Page content -->
      <div id="page-content">
        <div class="header @@classList">
  <!-- navbar -->
@include('navbar')

        </div>


@yield('content')


    <!-- Scripts -->
    <!-- Libs JS -->
@include('js')


<!-- clipboard -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


<!-- Theme JS -->
<script src="{{ url('../assets/js/theme.min.js') }}"></script>

@stack('js')

</body>

</html>





