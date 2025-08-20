 <!--begin::Sidebar-->
 <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
     <!--begin::Sidebar Brand-->
     <div class="sidebar-brand">
         <!--begin::Brand Link-->
         <a href="{{ url('/admin/dashboard') }}" class="brand-link">
             <!--begin::Brand Image-->
             <img src="{{ asset('backend/dist/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                 class="brand-image opacity-75 shadow" />
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
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ url('/admin/dashboard') }}" class="nav-link">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Human Info -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-people-group"></i>
                        <p>
                            Human Info
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/human-list') }}" class="nav-link">
                                <i class="fa-solid fa-user nav-icon"></i>
                                <p>All Human</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/today-humans') }}" class="nav-link">
                                <i class="fa-solid fa-calendar-day nav-icon"></i>
                                <p>Today Human</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/weekly-humans') }}" class="nav-link">
                                <i class="fa-solid fa-calendar-week nav-icon"></i>
                                <p>Weekly Human</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/monthly-humans') }}" class="nav-link">
                                <i class="fa-solid fa-calendar nav-icon"></i>
                                <p>Monthly Human</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Add Human -->
                <li class="nav-item">
                    <a href="{{url('/admin/add-human')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>Add Human</p>
                    </a>
                </li>

                <!-- Reports -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-chart-pie"></i>
                        <p>
                            Reports
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blood Group Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Age Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gender Report</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Logout -->
                <li class="nav-item">
                    <a href="{{ url('/admin/logout') }}" class="nav-link text-danger">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
     <!--end::Sidebar Wrapper-->
 </aside>
 <!--end::Sidebar-->
