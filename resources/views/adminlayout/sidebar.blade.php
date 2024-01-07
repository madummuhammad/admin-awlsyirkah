<div class="mb-2 p-3" style="background-color:#0a681e">
  <!-- Brand Logo -->
  <div class="card w-75 py-1 px-3 d-flex flex-row justify-content-center">
      <h4 class="text-success">AWL</h4>
  </div>
</div>
<hr style="background-color: #c2c7d0;">

<!-- Sidebar -->
<div class="sidebar" style="background-color:#0a681e">
  <!-- Sidebar user panel (optional) -->
  {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src=" {{ asset('adminlte/dist/img/user2-160x160.jpg') }} " class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">
        @if (auth()->user())
          {{ auth()->user()->name }}
        @endif
      </a>
    </div>
  </div> --}}

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item">
        <a href="{{ url('/dashboard') }}" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-home"></i>
          <p>
            Beranda
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item ml-3">
              <a href="/webadmin/beranda-slider-header" class="nav-link">
                <p>
                  Slider Header
                </p>
              </a>
            </li>
        </ul>
      </li> --}}
     
      <li class="nav-item">
        <a href="/komoditas" class="nav-link">
          <i class="nav-icon fas fa-coins"></i>
          <p>
            Komoditas
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/nilai_tukar" class="nav-link">
          <i class="nav-icon fas fa-signal"></i>
          <p>
            Nilai Tukar
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/user" class="nav-link">
          <i class="nav-icon fas fa-user"></i>
          <p>
            User
          </p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
