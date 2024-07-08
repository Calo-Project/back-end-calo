<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header d-flex align-items-center">
      <a class="navbar-brand" href="../../pages/dashboards/dashboard.html">
        <img src="{{asset('/img/logo-text.svg')}}" class="navbar-brand-img" alt="...">
      </a>
      <div class="ml-auto">
        <!-- Sidenav toggler -->
        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <h6 class="navbar-heading p-0 text-muted">Home</h6>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link @if (Request::segment(1) == 'dashboard') active @endif" href="" target="">
              <i class="ni ni-shop text-primary"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
        </ul>
        <hr class="my-3">
        <h6 class="navbar-heading p-0 text-muted">User</h6>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="" target="">
              <i class="ni ni-building text-orange"></i>
              <span class="nav-link-text">Vendor</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="">
              <i class="ni ni-lock-circle-open text-info"></i>
              <span class="nav-link-text">Smart Contract</span>
            </a>
          </li>
        </ul>
        <hr class="my-3">
        <h6 class="navbar-heading p-0 text-muted">Event</h6>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="" target="">
              <i class="ni ni-bullet-list-67 text-default"></i>
              <span class="nav-link-text">Kategori Event</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="">
              <i class="ni ni-calendar-grid-58 text-red"></i>
              <span class="nav-link-text">Event</span>
            </a>
          </li>
        </ul>
        <hr class="my-3">
        <h6 class="navbar-heading p-0 text-muted">Transaksi</h6>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="" target="">
              <i class="ni ni-cart text-success"></i>
              <span class="nav-link-text">Transaksi Tiket</span>
            </a>
          </li>
        </ul>

      </div>
    </div>
  </div>
</nav>