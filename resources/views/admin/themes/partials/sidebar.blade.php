<aside class="main-sidebar sidebar-light-red elevation-4">
    {{-- Brand Logo --}}
    <a href="#" class="brand-link" id="logoPic">
        <img src="{{ asset('images/logo/um-logo.png') }}" alt="School Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">University of Mindanao</span>
    </a>

    {{-- Sidebar --}}
    <div class="sidebar">
        {{-- Sidebar user panel --}}
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img class="img-size-50 img-circle" src="{{ asset('images/avatar.png') }}" alt="user image">
            </div>
            <div class="info">
                <a href="javascipt:void(0)" class="d-block">{{ session('usr_first_name') }}
                    {{ session('usr_last_name') }}</a>
            </div>
        </div>

        {{-- Sidebar Menu --}}
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                {{-- Home --}}
                <li class="nav-item">
                    <a href="{{ action('App\Http\Controllers\AdminController@home') }}"
                        class="nav-link {{ request()->is('admin/home') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>

                {{-- Messages --}}
                <li class="nav-item">
                    <a href="{{ action('App\Http\Controllers\AdminController@messages') }}"
                        class="nav-link {{ request()->is('admin/messages') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-message"></i>
                        <p>Messages</p>
                    </a>
                </li>

                {{-- Admin Management --}}
                @if (session('usr_type') == 1 || session('usr_type') == 2)
                    <li class="nav-header">Admin Management</li>
                    <li class="nav-item {{ request()->is('admin/users*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Manage Users
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AdminController@users') }}"
                                    class="nav-link {{ request()->is('admin/users') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Users</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ request()->is('admin/about*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/about*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-award"></i>
                            <p>
                                Manage About
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AboutController@admin_rpc') }}"
                                    class="nav-link {{ request()->is('admin/about/rpc') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>RPC</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AboutController@admin_vmgo') }}"
                                    class="nav-link {{ request()->is('admin/about/vmgo') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>VMGO</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AboutController@admin_agenda_priority') }}"
                                    class="nav-link {{ request()->is('admin/about/agenda-priority') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Agenda and Priority</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AboutController@admin_program_funding') }}"
                                    class="nav-link {{ request()->is('admin/about/program-funding') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Program and Funding</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ request()->is('admin/institute*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/institute*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-balance-scale"></i>
                            <p>
                                Manage Institute
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\InstituteController@admin_popular') }}"
                                    class="nav-link {{ request()->is('admin/institute/popular') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>PO</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AboutController@admin_vmgo') }}"
                                    class="nav-link {{ request()->is('admin/about/vmgo') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>ETGIS</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AboutController@admin_agenda_priority') }}"
                                    class="nav-link {{ request()->is('admin/about/agenda-priority') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>BES</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AboutController@admin_program_funding') }}"
                                    class="nav-link {{ request()->is('admin/about/program-funding') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>EES</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AboutController@admin_program_funding') }}"
                                    class="nav-link {{ request()->is('admin/about/program-funding') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SWHDS</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                {{-- Signout --}}
                <li class="nav-item">
                    <a href="{{ action('App\Http\Controllers\UserController@logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out"></i>
                        <p>
                            Sign out
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>