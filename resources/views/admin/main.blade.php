<!DOCTYPE html>
<html lang="en">

  <head>

    @include('admin.partials._head')

  </head>

  <body>

  <!-- Sidebar Section -->

    @include('admin.partials._sidebar')

  <!-- /Sidebar Section -->

    <!-- Main conteiner -->
    <div id="page-wrapper" class="gray-bg">

      <div class="row border-bottom">

        <!-- Navbar Section -->
          @include('admin.partials._navbar')
        <!-- /Navbar Section -->

      </div>

      @yield('content')

      <!-- Footer section -->
        @include('admin.partials._footer')
      <!-- Footer section -->


    </div>
    <!-- /Main conteiner -->



    <script src="/js/jquery-2.1.1.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/vendor.js"></script>
    <script src="/js/main.js"></script>

  </body>
</html>
