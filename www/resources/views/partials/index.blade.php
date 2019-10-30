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
<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/blog">blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">about</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">contact</a>
            </li>
          </ul>
        </div>
      </nav>


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