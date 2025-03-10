<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-red navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

        <!-- User Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">User Options</span>
                <div class="dropdown-divider"></div>
                <a href="javascipt:void(0)" data-toggle="modal" data-target="#userInfoModal" class="dropdown-item">
                    <i class="fas fa-cog mr-2"></i> Update Account
                </a>
                <a href="javascipt:void(0)" data-toggle="modal" data-target="#userPasswordModal" class="dropdown-item">
                    <i class="fas fa-key mr-2"></i> Change Password
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ action('App\Http\Controllers\UserController@logout') }}" class="dropdown-item">
                    <i class="fas fa-sign-out" mr-2></i> Sign out
                </a>
            </div>
        </li>
    </ul>
</nav>