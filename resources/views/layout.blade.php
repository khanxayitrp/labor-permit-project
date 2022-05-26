
<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/brand.ico')}}">

<!-- Libs CSS -->
@include('csslib')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">
 
<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">

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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>


{{-- <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap4.min.js"></script> --}}

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<!-- Theme JS -->
<script src="{{ asset('assets/js/theme.min.js') }}"></script>

@stack('js')

</body>

</html>





