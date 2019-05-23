<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ING. FINANCIERA</title>
    <link rel="icon" href="{{asset('images/images/finanzas.png')}}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

     <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">


   <!-- <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css') }}">-->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.css') }}">

    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css') }}">

   <link rel="stylesheet" href="{{ asset('js/trumbowyg/ui/trumbowyg.css') }}" />

     <!-- DataTables CSS -->
    <link href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}"rel="stylesheet">
    <link href="{{ asset('plugins/datatables/extensions/Responsive/css/dataTables.responsive.css') }}"rel="stylesheet">

    @yield('css')
    
   

  </head>
  
  <body class="hold-transition skin-blue sidebar-mini">
 
 
    @include('admin.partials.nav')

    <!-- jQuery 2.1.4 -->
   
   <script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
       <!-- jQuery UI 1.11.4 -->
   <script src="{{ asset('plugins/jQueryUI/jquery-ui.min.js') }}"></script>
   <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>


    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.10/js/jquery.dataTables.min.js"></script>-->
   
    <script src="{{ asset('js/trumbowyg/trumbowyg.js') }}"></script>   
   
    <script src="{{ asset('dist/js/app.min.js') }}"></script>


     <!-- DataTables JavaScript -->
   <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
   <script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

     @yield('js')

   
    
  </body>
</html>