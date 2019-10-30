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
  @include('partials.navbar')
  <div class="container">
    <div class="row pt-4">
      <div class="col-6">@yield('content')</div>
      <div class="col-6">@yield('content')</div>
    </div>
  </div>
  
  <div id="footer">
    <div class="container text-center py-4">
      @include('partials.footer')
    </div>
  
  </div>
  <script src="lib/jquery/dist/jquery.slim.min.js"></script>
  <script src="lib/popper.js/dist/umd/popper.min.js"></script>
  <script src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>