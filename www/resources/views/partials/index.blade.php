<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <title>@yield('titlePage')</title>
</head>
<body>

  @include('partials/navbar')
    <div class="container">
    
    <h1 class="text-center py-4">@yield('titleContent')</h1>

    <div id="section" class="container pt-4">    
        @yield('content')
    </div>
</div>
    <div id="footer">
        <div class="container pt-4">
            <p class="text-center">© 2019 Gandalf</p>
        </div>
    </div>

    
<script src="lib/jquery/dist/jquery.slim.min.js"></script>
<script src="lib/popper.js/dist/umd/popper.min.js"></script>
<script src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>