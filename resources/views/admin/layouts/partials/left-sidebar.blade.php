<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Application Brand -->
        <div class="app-brand">
            <a href="{{ route('admin.dashboard') }}" title="Admin Dashboard">
                <img src="{{ asset('images/cmc-about.webp') }}" alt="logo" class="brand-icon">
            </a>
        </div>
        <!-- Begin sidebar scrollbar -->
        <div class="" data-simplebar style="height: 100%;">
            <!-- Sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a class="sidenav-item-link" href="{{ route('admin.dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="has-sub {{ request()->routeIs('admin.user-manage') ? 'active' : '' }}">
                    <a class="sidenav-item-link" href="{{ route('admin.user-manage') }}">
                        <i class="mdi mdi-account-box-multiple"></i>
                        <span class="nav-text">Users</span>
                    </a>
                </li>
                <li class="has-sub {{ request()->is('admin/academic-programs/*') ? 'active' : '' }}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#academic" aria-expanded="false" aria-controls="academic">
                        <i class="mdi mdi-folder-multiple-outline"></i>
                        <span class="nav-text">Academic</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse " id="academic" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li class="">
                                <a class="sidenav-item-link {{ request()->routeIs('admin.academic.colleges') ? 'active' : '' }}"
                                    href="{{ route('admin.academic.colleges') }}">
                                    <span class="nav-text">Colleges</span>
                                </a>
                            </li>

                        </div>
                    </ul>
                </li>
                <li class="has-sub {{ request()->routeIs('admin.content') ? 'active' : '' }}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#events"
                        aria-expanded="false" aria-controls="publicaeventstion">
                        <i class="mdi mdi-file-document-box-multiple-outline"></i>
                        <span class="nav-text">Events</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse " id="events" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('admin.content') }}">
                                    <i class="mdi mdi-book-open-page-variant"></i>
                                    <span class="nav-text">Publication</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link {{ request()->routeIs('admin.research') ? 'active' : '' }}"
                                    href="{{ route('admin.research') }}">
                                    <span class="nav-text">Events</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link {{ request()->routeIs('admin.research') ? 'active' : '' }}"
                                    href="{{ route('admin.research') }}">
                                    <span class="nav-text">Announcements</span>
                                </a>
                            </li>
                        </div>

                    </ul>

                </li>
                <li class="has-sub {{ request()->is('admin/publication/*') ? 'active' : '' }}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#publication" aria-expanded="false" aria-controls="publication">
                        <i class="mdi mdi-file-document-box-multiple-outline"></i>
                        <span class="nav-text">Research</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse " id="publication" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="">
                                <a class="sidenav-item-link {{ request()->routeIs('admin.research') ? 'active' : '' }}"
                                    href="{{ route('admin.research') }}">
                                    <span class="nav-text">Research Publication</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link {{ request()->routeIs('admin.publishers') ? 'active' : '' }}"
                                    href="{{ route('admin.publishers') }}">
                                    <span class="nav-text">Publisher</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="has-sub {{ request()->is('admin/student-affairs/*') ? 'active' : '' }}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#osas"
                        aria-expanded="false" aria-controls="osas">
                        <i class="mdi mdi-folder-multiple-outline"></i>
                        <span class="nav-text">OSAS</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse " id="osas" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="">
                                <a class="sidenav-item-link {{ request()->routeIs('admin.osas') ? 'active' : '' }}"
                                    href="{{ route('admin.osas') }}">
                                    <span class="nav-text">Student Affairs</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link {{ request()->routeIs('admin.stud-org') ? 'active' : '' }}"
                                    href="{{ route('admin.stud-org') }}">
                                    <span class="nav-text">Student Organization</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{ route('admin.admission') }}">
                        <i class="mdi mdi-widgets"></i>
                        <span class="nav-text">Admission</span>
                    </a>
                </li>
                <li class="has-sub {{ request()->is('admin/student-affairs/*') ? 'active' : '' }}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#services" aria-expanded="false" aria-controls="services">
                        <i class="mdi mdi-folder-multiple-outline"></i>
                        <span class="nav-text">Online Services</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse " id="services" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('admin.scholarship') }}">
                                    <i class="mdi mdi-widgets"></i>
                                    <span class="nav-text">Scholarship</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('admin.guidance') }}">
                                    <i class="mdi mdi-widgets"></i>
                                    <span class="nav-text">Guidance</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('admin.library') }}">
                                    <i class="mdi mdi-book-open-variant"></i>
                                    <span class="nav-text">Library</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('admin.health') }}">
                                    <i class="mdi mdi-medical-bag"></i>
                                    <span class="nav-text">Health Service</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('admin.alumni-affairs') }}">
                                    <i class="mdi mdi-medical-bag"></i>
                                    <span class="nav-text">Alumni Affairs</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{ route('admin.facility') }}">
                        <i class="mdi mdi-office-building"></i>
                        <span class="nav-text">Facilities</span>
                    </a>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{ route('admin.homepage') }}">
                        <i class="mdi mdi-widgets"></i>
                        <span class="nav-text">Homepage</span>
                    </a>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{ route('admin.cial') }}">
                        <i class="mdi mdi-widgets"></i>
                        <span class="nav-text">Internalization</span>
                    </a>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{ route('admin.cial') }}">
                        <i class="mdi mdi-widgets"></i>
                        <span class="nav-text">Accreditation</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
