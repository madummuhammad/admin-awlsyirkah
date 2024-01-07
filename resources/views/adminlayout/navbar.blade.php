<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    {{-- <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li> --}}


    <li class="nav-item dropdown user-menu">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <img src="{{ asset('/img/img-user.jpg') }}" class="user-image img-circle elevation-2"
          alt="User Image">
        <span class="d-none d-md-inline">
          {{-- @if (auth()->user())

            {{ auth()->user()->name }}
          @endif --}}
        </span>
      </a>
      <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <!-- User image -->
        <li class="user-header" style="background-color: #0a681e;">
          <img src="{{ asset('/img/img-user.jpg') }}" class="img-circle elevation-2"
            alt="User Image">

          <p>
            {{-- @if (auth()->user())

              {{ auth()->user()->name }}
            @endif --}}
          </p>
        </li>
        <!-- Menu Body -->
        <!-- Menu Footer-->
        <li class="user-footer">
          {{-- <a href="#" class="btn btn-default btn-flat">Profile</a> --}}
          {{-- <a href="{{ route('logout') }}" class="btn btn-default btn-flat float-right">Sign out</a> --}}
          <a class="btn btn-default btn-flat float-right" href="{{ route('logout-admin-action') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout-admin-action') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
      </ul>
    </li>


  </ul>
</nav>
