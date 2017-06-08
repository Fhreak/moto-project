<!DOCTYPE html>
<html lang="en">

  <head>

    @include('auth.partials._head')

  </head>

  <body>

    <!-- Main conteiner -->
    <div class="container">

      @yield('content')

    </div>
    <!-- /Main conteiner -->

    <!-- Footer section -->
      @include('auth.partials._footer')
    <!-- Footer section -->

    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="/js/vendor.js"></script>
    <script src="js/main.js"></script>


  </body>
</html>
