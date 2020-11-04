<!DOCTYPE html>
<html lang="en">
<head>
    @include(includes.header)
</head>
<body>

    <div class="container">
   <header class="row">
       @include('includes.header')
   </header>
   </div>
   
   <div class="row">
           @yield('content')
   </div>

   <footer class="row">
       @include('includes.footer')
   </footer>
</body>
</html>