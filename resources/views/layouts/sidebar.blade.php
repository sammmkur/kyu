<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->

    {{-- @permission(['menu-dashboard'])
        <li class="{{ $active == 'dashboard' ? 'active' : ''}}">
            <a href="{{Route('home.index')}}" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();" class="nav-link">
                    <i class="icon-switch2"></i>
                    <span>Logout</span>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                      </form>
                  </a>

        </li>
    @endpermission --}}
    {{-- @permission(['menu-dashboard']) --}}
    <li class="nav-item">
      <a href="{{Route('home.index')}}" class="nav-link ">
        <i class="nav-icon fas fa-user-cog"></i>
        <p>
          Setting
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">

        <li class="nav-item">
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();" class="nav-link">
            <i class="icon-switch2"></i>
            <span>Logout</span>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
              </form>
          </a>
        </li>
      </ul>
    </li>
    {{-- @endpermission --}}


    @permission(['menu_master_program'])
    <li >
        <a href="{{ route('master.program') }}" class="nav-link {{ $active == 'masterprogram' ? 'active' : ''}}">
            <i class="nav-icon fas fa-solid fa-window-restore"></i>
            {{-- <i class="fa-solid fa-window-restore"></i> --}}
            {{-- <i class="fa-solid fa-files"></i> --}}
            <span>Master Program</span>

        </a>
    </li>


  @endpermission

    @permission(['menu-notulensi'])
        <li >
            <a href="{{ route('notulensi') }}" class="nav-link {{ $active == 'notulensi' ? 'active' : ''}}">
                <i class="nav-icon fas fa-edit"></i>
                <span>Notulensi Rapat</span>
            </a>
        </li>


      @endpermission


  </ul>
