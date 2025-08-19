 <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="{{url('/admin/dashboard')}}" class="brand-link">
            <!--begin::Brand Image-->
            <img src="{{asset('backend/dist/assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow" />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Admin Dashboard</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false">
              <li class="nav-item menu">
                <a href="{{url('/admin/dashboard')}}" class="nav-link">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item menu">
                <a href="#" class="nav-link">
                  <i class="fa-solid fa-people-group"></i>
                  <p>
                    Human Info
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/admin/human-list')}}" class="nav-link">
                      <i class="fa-solid fa-user"></i>
                      <p>Human List</p>
                    </a>
                  </li>
                </ul>
              </li>
               <li class="nav-item menu">
                <a href="{{url('/admin/logout')}}" class="nav-link">
                  <i class="fa-solid fa-arrow-right-from-bracket"></i>
                  <p>
                    LogOut
                  </p>
                </a>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->