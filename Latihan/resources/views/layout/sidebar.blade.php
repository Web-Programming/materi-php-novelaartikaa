<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <span class="brand-text font-weight-light">My AdminLTE</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
        <li class="nav-item">
          <a href="{{ url('dosen') }}" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>Dosen</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('mhs') }}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>Mahasiswa</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('prodi') }}" class="nav-link">
            <i class="nav-icon fas fa-building"></i>
            <p>Prodi</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('fakultas') }}" class="nav-link">
            <i class="nav-icon fas fa-university"></i>
            <p>Fakultas</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('materi') }}" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>Materi</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>
