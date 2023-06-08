<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src="assets/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Imam Muda</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          {{-- menu untuk imam --}}
          <li class="nav-item">
            <a href="" class="nav-link" >
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              <i class="nav-icon fas fa-user"></i>
                <p>
                    Imam
                </p>
            </a>
          </li>
          {{-- menu untuk masjid --}}
            <li class="nav-item">
                <a href="" class="nav-link ">
                {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                <i class="nav-icon fas fa-mosque"></i>
                    <p>
                        Masjid
                    </p>
                </a>
            </li>
            {{-- menu untuk aktivitas --}}
            <li class="nav-item">
                <a href="" class="nav-link ">
                {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>
                        Aktivitas
                    </p>
                </a>
            </li>
            {{-- menu untuk jadwal --}}
            <li class="nav-item">
                <a href="" class="nav-link ">
                {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>
                        Jadwal
                    </p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
