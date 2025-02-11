  <!-- Header -->
  <header class="main-header " id="header">
      <nav class="navbar navbar-static-top navbar-expand-lg">
          <!-- Sidebar toggle button -->
          <button id="sidebar-toggler" class="sidebar-toggle">
              <span class="sr-only">Toggle navigation</span>
          </button>
          <div class="navbar-right ">
              <ul class="nav navbar-nav">
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                      <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                          <img src="assets/img/user/user.png" class="user-image" alt="User Image" />
                          <span class="d-none d-lg-inline-block">
                              {{ session('usr_first_name') }} {{ session('usr_last_name') }}

                          </span>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-right">
                          <!-- User image -->
                          <li class="dropdown-header">
                              <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                              <div class="d-inline-block">
                                  {{ session('usr_email') }}
                              </div>
                          </li>

                          <li>
                              <a href="user-profile.html">
                                  <i class="mdi mdi-account"></i> My Profile
                              </a>
                          </li>
                          <li class="right-sidebar-in">
                              <a href="javascript:0"> <i class="mdi mdi-settings"></i> Setting </a>
                          </li>

                          <li class="dropdown-footer">
                              <a href="{{ route('admin.logout') }}"> <i class="mdi mdi-logout"></i> Log Out </a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </div>
      </nav>
  </header>
