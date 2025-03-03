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
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AboutController@admin_team') }}"
                                    class="nav-link {{ request()->is('admin/about/team') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Team</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ action('App\Http\Controllers\AdminController@carousel') }}"
                            class="nav-link {{ request()->is('admin/carousel') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-image"></i>
                            <p>Manage Carousel</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('admin/center*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/center*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-building"></i>
                            <p>
                                Manage Center
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\CenterController@admin_nanotechnology') }}"
                                    class="nav-link {{ request()->is('admin/center/nanotechnology') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Nanotechnology</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\CenterController@admin_coleoptera') }}"
                                    class="nav-link {{ request()->is('admin/center/coleoptera') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Coleoptera</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\CenterController@admin_policy') }}"
                                    class="nav-link {{ request()->is('admin/center/policy') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Public Policy</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ request()->is('admin/conference*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/conference*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-award"></i>
                            <p>
                                Manage Conference
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\ConferenceController@admin_policy') }}"
                                    class="nav-link {{ request()->is('admin/conference/policy') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Public Policy Conference</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\ConferenceController@admin_ietgi') }}"
                                    class="nav-link {{ request()->is('admin/conference/ietgi') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Conference by IETGI</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\ConferenceController@admin_economy') }}"
                                    class="nav-link {{ request()->is('admin/conference/economy') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>RCEES</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\ConferenceController@admin_social') }}"
                                    class="nav-link {{ request()->is('admin/conference/social') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>RCSWHDS</p>
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
                                    <p>IPO</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\InstituteController@admin_emerging') }}"
                                    class="nav-link {{ request()->is('admin/institute/emerging') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>ETGIS</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\InstituteController@admin_biodiversity') }}"
                                    class="nav-link {{ request()->is('admin/institute/biodiversity') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>BES</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\InstituteController@admin_economy') }}"
                                    class="nav-link {{ request()->is('admin/institute/economy') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>IEES</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\InstituteController@admin_social') }}"
                                    class="nav-link {{ request()->is('admin/institute/social') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SWHDS</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ request()->is('admin/journal*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/journal*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-journal-whills"></i>
                            <p>
                                Manage Journal
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\JournalController@admin_multidisciplinary') }}"
                                    class="nav-link {{ request()->is('admin/journal/multidisciplinary') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>UMIMRJ</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\JournalController@admin_emerging') }}"
                                    class="nav-link {{ request()->is('admin/journal/emerging') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>JETI</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\JournalController@admin_economy') }}"
                                    class="nav-link {{ request()->is('admin/journal/economy') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>JEES</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\JournalController@admin_tropical') }}"
                                    class="nav-link {{ request()->is('admin/journal/tropical') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>JTC</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\JournalController@admin_social') }}"
                                    class="nav-link {{ request()->is('admin/journal/social') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>JSWHDS</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\JournalController@admin_multidisciplinary') }}"
                                    class="nav-link {{ request()->is('admin/journal/multidisciplinary') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>College Journals</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ action('App\Http\Controllers\LinkageController@admin_linkages') }}"
                            class="nav-link {{ request()->is('admin/linkages') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-link"></i>
                            <p>Manage Linkage</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('admin/publications*') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ request()->is('admin/publications*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-share"></i>
                            <p>
                                Manage Publications
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\PublicationController@admin_news') }}"
                                    class="nav-link {{ request()->is('admin/publications/news') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>News</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\PublicationController@admin_ipo') }}"
                                    class="nav-link {{ request()->is('admin/publications/ipo') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>IPO Pres Release</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ request()->is('admin/office*') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ request()->is('admin/office*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-landmark"></i>
                            <p>
                                Manage Offices
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\OfficeController@admin_technology') }}"
                                    class="nav-link {{ request()->is('admin/office/technology') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>TTIPMO</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\OfficeController@admin_innovation') }}"
                                    class="nav-link {{ request()->is('admin/office/innovation') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>ITSO</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\OfficeController@admin_umasenso') }}"
                                    class="nav-link {{ request()->is('admin/office/umasenso') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>TBI - UMASENSO</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ request()->is('admin/users*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Manage User
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