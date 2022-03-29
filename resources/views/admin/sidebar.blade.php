  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('adminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('adminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('/admin/dashboard') }}" class="nav-link {{ 'admin/dashboard' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/admin/users') }}" class="nav-link {{ 'admin/users' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>Users</p>
            </a>
          </li>

          <li class="nav-item">
          <a href="{{ url('/admin/delivery') }}" class="nav-link {{ 'admin/delivery' == request()->path() ? 'active' : '' }}">
            <i class="nav-icon fas fa-biking"></i>
              <p>Delivery</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/admin/product-category') }}" class="nav-link {{ 'admin/product-category' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-boxes"></i>
              <p>Product Categories</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/admin/products') }}" class="nav-link {{ 'admin/products' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>Products</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/admin/pet-category') }}" class="nav-link {{ 'admin/pet-category' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-fish"></i>
              <p>Goldfish Categories</p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{ url('/admin/goldfish') }}" class="nav-link {{ 'admin/goldfish' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-fish"></i>
              <p>Goldfish</p>
            </a>
          </li>
          
          <li class="nav-item">
          <a href="{{ url('/admin/reservations') }}" class="nav-link {{ 'admin/reservations' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>Reservations</p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{ url('/admin/orders') }}" class="nav-link {{ 'admin/orders' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>Orders</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-bill"></i>
              <p>Sales</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-box"></i>
              <p>Inventory</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>logout</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>