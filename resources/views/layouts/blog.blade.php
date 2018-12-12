<!DOCTYPE html>
<html lang="en">
  @include('layouts.head')
  <body>
    @include('layouts.nav')
    @yield('content')
    @include('layouts.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>
  </body>
</html>