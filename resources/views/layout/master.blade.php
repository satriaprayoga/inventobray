<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">
        <!-- Styles -->
    </head>
<body class="fix-header card-no-border fix-sidebar">
    <div id="app">
        <navbar></navbar>
        <sidebar></sidebar>
        <div class="page-wrapper">
            <div class="container-fluid">
                <breadcrumb></breadcrumb>
                <router-view></router-view>
            </div>
            <footer class="footer">
                    © 2019 Admin Pro by wrappixel.com
            </footer>
        </div>
      
    </div>
       
        <!-- built files will be auto injected -->
</body>
    <script src="/js/app.js"></script>
</html>
