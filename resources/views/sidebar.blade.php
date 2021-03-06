<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
        <img src="/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="/dashboard" class="d-block">{{ \Illuminate\Support\Facades\Auth::user()->email }}</a>
                <a href="/logout" class="d-block">Logout</a>
            </div>
        </div>
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">RECRUITMENT MANAGEMENT</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            SKILL - JOB
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/skill/create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Skill</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/skill/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Skill List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Request
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/request/create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Request</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/request/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Request List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Curriculum Vitae
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/cv/create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New CV</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cv/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>CV List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">ACCOUNT MANAGEMENT</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Department
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/department/create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Department</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/department/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Department List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Account
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/account/create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Account</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/account/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Account List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">REPORT</li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
