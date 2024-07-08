<!DOCTYPE html>
<html>

@include('admin.components.head')

<body>
  <!-- Sidenav -->
  @include('admin.components.sidebar')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('admin.components.topbar')
    <!-- Page content -->
    <div class="container-fluid mt-2">
      @yield('content')
      <!-- Footer -->
      @include('admin.components.footer')
    </div>
  </div>
  <!-- Argon Scripts -->
  @include('admin.components.script')
</body>

</html>
