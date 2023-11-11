<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Rosad Andi pratama">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard Template · Bootstrap v5.0</title>

    

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap-css/bootstrap.min.css" rel="stylesheet">

    {{-- bootstrap icons --}}
    <link href="/css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/css-dashboard/dashboard.css" rel="stylesheet">
    {{-- Trix Editor --}}
    <link rel="stylesheet" href="/css/trixEditor/trix.css">
    <script src="/js/trixEditor/trix.js"></script>
    <style>
      trix-toolbar [data-trix-button-group="file-tools"]{
        display: none;
      }
    </style>
    
  </head>
  <body>
    
@include('dashboard.layouts.header')

<div class="container-fluid">
  <div class="row">
@include('dashboard.layouts.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
@yield('container')
    </main>
  </div>
</div>


    <script src="/js/bootstrap-js/bootstrap.js"></script>

    <script src="/js/dashboard-js/dashboard.js"></script>
  </body>
</html>
