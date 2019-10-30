<!DOCTYPE html>
<html lang="en">
@include('partials/head')
<body>

  @include('partials/navbar')
    <div class="container">
    
    <h1 class="text-center py-4">@yield('titleContent')</h1>

    <div id="section" class="container pt-4">    
        @yield('content')
    </div>
</div>
@include('partials/footer')
    
@include('partials/script')
</body>
</html>