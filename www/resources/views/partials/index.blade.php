<!DOCTYPE html>
<html lang="en">
@include('partials/head')
<body>

  @include('partials/navbar')
    <div class="container">
    
    <h1 class="text-center py-4">@yield('titleContent')</h1>

    <div id="section" class="container pt-4">
        <div class="row"> 
            <div class="col-lg-6 col-sm-12">@yield('col1')</div>
            <div class="col-lg-6 col-sm-12">@yield('col1')</div> 
    </div>
</div>
@include('partials/footer')
    
@include('partials/script')
</body>
</html>