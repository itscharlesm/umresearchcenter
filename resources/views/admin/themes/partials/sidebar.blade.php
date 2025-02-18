<aside class="main-sidebar sidebar-light-purple elevation-4">
    {{-- Brand Logo --}}
    <a href="#" class="brand-link" id="logoPic">
        <img src="{{ asset('images/accounts/logo/logo.png') }}" alt="School Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">CQA Review Center</span>
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
                <span class="brand-text font-weight-light"
                    style="color:gray;"><small>{{ session('acc_name') }}</small></span>
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

                @if (session('usr_type') == 4)
                    {{-- bookstore account --}}
                    <li class="nav-item">
                        <a href="{{ action('App\Http\Controllers\BookstoreController@main_customers') }}"
                            class="nav-link {{ request()->is('bookstore') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-shopping-cart"></i>
                            <p>Bookstore</p>
                        </a>
                    </li>
                @endif

                @if (session('usr_type') == 2)
                    {{-- bookstore account --}}
                    <li class="nav-item">
                        <a href="{{ action('App\Http\Controllers\BookstoreController@main_customers') }}"
                            class="nav-link {{ request()->is('bookstore') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-shopping-cart"></i>
                            <p>Bookstore</p>
                        </a>
                    </li>
                @endif

                @if (session('usr_type') == 1)
                    {{-- admin account --}}
                    <li class="nav-item">
                        <a href="{{ action('App\Http\Controllers\AttendanceController@scan') }}"
                            class="nav-link {{ request()->is('attendance/scan') ? 'active' : '' }}" target="_blank">
                            <i class="nav-icon fa fa-qrcode"></i>
                            <p>QR Attendance System</p>
                        </a>
                    </li>
                @endif

                {{-- Admin Management --}}
                @if (session('usr_type') == 1)
                    {{-- admin account --}}
                    <li class="nav-header">Admin Management</li>
                    <li class="nav-item {{ request()->is('admin/student*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/student*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Manage Students
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AdminController@users') }}"
                                    class="nav-link {{ request()->is('admin/student/list-of-users') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Users</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AdminController@students') }}"
                                    class="nav-link {{ request()->is('admin/student/list-of-students') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Students</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AdminController@studentAttendance') }}"
                                    class="nav-link {{ request()->is('admin/student/attendance') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Student Attendance</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ request()->is('admin/employee*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/employee*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                Manage Employees
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AdminController@employees') }}"
                                    class="nav-link {{ request()->is('admin/employee/list-of-employees') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Employees</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AdminController@lecturers') }}"
                                    class="nav-link {{ request()->is('admin/employee/list-of-lecturers') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Lecturers</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\LecturersLoadController@main') }}"
                                    class="nav-link {{ request()->is('admin/employee/list-of-lecturers-load*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Lecturer's Load</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ request()->is('admin/assessments*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/assessments*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-money-bill"></i>
                            <p>
                                Manage Payments
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AdminController@assessment') }}"
                                    class="nav-link {{ request()->is('admin/assessments/total-assessments') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Total Assessments</p>
                                </a>
                                <a href="{{ action('App\Http\Controllers\AdminController@expenses') }}"
                                    class="nav-link {{ request()->is('admin/assessments/expenses') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Expenses</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ request()->is('admin/information/management*') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ request()->is('admin/information/management*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-info"></i>
                            <p>
                                Manage Instructions
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AdminController@information') }}"
                                    class="nav-link {{ request()->is('admin/information/management') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Instructions</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ request()->is('admin/management*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/management*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                Manage Enrollments
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AdminController@enrollments') }}"
                                    class="nav-link {{ request()->is('admin/management/enrollments') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Enrollees</p>
                                </a>
                                <a href="{{ action('App\Http\Controllers\AdminController@finishedEnrollments') }}"
                                    class="nav-link {{ request()->is('admin/management/finished/enrollments') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Finished Enrollments</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ request()->is('manage/bookstore*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('manage/bookstore*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Manage Bookstore
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\BookstoreController@main') }}"
                                    class="nav-link {{ request()->is('manage/bookstore') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Bookstore</p>
                                </a>
                                <a href="{{ action('App\Http\Controllers\BookstoreController@main_orders') }}"
                                    class="nav-link {{ request()->is('manage/bookstore/orders') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Orders</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                {{-- Test Bank Management --}}
                @if (session('usr_type') == 1)
                    {{-- Admin Account --}}
                    <li class="nav-header">Classroom Management</li>
                    <li class="nav-item">
                        <a href="{{ action('App\Http\Controllers\ClassroomController@admin_classroom') }}"
                            class="nav-link {{ request()->is('admin/classroom') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-school"></i>
                            <p>Classroom</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('test-bank*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('test-bank*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tasks"></i>
                            <p>
                                Test Banks
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\TestBankController@main') }}"
                                    class="nav-link {{ request()->is('test-bank/quizzes') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Areas</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                {{-- Test Bank Management --}}
                @if (session('usr_type') == 3)
                    {{-- Lecturer Account --}}
                    <li class="nav-item">
                        <a href="{{ action('App\Http\Controllers\LecturersLoadController@main_lecturer') }}"
                            class="nav-link {{ request()->is('lecturer/my-loads*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-calendar"></i>
                            <p>My Loads</p>
                        </a>
                    </li>
                    <li class="nav-header">Classroom Management</li>
                    <li class="nav-item">
                        <a href="{{ action('App\Http\Controllers\ClassroomController@lecturer_classroom') }}"
                            class="nav-link {{ request()->is('lecturer/classroom') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-school"></i>
                            <p>Classroom</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('test-bank*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('test-bank*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tasks"></i>
                            <p>
                                Test Banks
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\TestBankController@main') }}"
                                    class="nav-link {{ request()->is('test-bank/quizzes') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Areas</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                {{-- Student Management --}}
                @if (session('usr_type') == 2)
                    {{-- Student Account --}}
                    <li class="nav-header">Student Management</li>
                    <li class="nav-item {{ request()->is('admin/account*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/account*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Account
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AdminController@accountInformation') }}"
                                    class="nav-link {{ request()->is('admin/account/information') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Account Information</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AdminController@setup') }}"
                                    class="nav-link {{ request()->is('admin/account/setup') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Edit Information</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AdminController@status') }}"
                                    class="nav-link {{ request()->is('admin/account/status') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Enrollment Status</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AdminController@myAttendance') }}"
                                    class="nav-link {{ request()->is('admin/account/attendance') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>My Attendance</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                {{-- Classroom Management --}}
                @if (session('usr_type') == 2)
                    {{-- Student Account --}}
                    <li class="nav-header">Classroom Management</li>
                    <li class="nav-item">
                        <a href="{{ action('App\Http\Controllers\ClassroomController@student_classroom') }}"
                            class="nav-link {{ request()->is('student/classroom') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-school"></i>
                            <p>Classroom</p>
                        </a>
                    </li>
                @endif

                {{-- Student Management --}}
                @if (session('usr_type') == 1)
                    {{-- admin account --}}
                    <li class="nav-header">Account Management</li>
                    <li class="nav-item {{ request()->is('admin/account*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/account*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Account
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AdminController@accountInformation') }}"
                                    class="nav-link {{ request()->is('admin/account/information') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Account Information</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('App\Http\Controllers\AdminController@setup') }}"
                                    class="nav-link {{ request()->is('admin/account/setup') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Edit Information</p>
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
