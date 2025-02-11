<header class="fixed-top header">
    <!-- top header -->
    <div class="top-header py-2 bg-white">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 text-center text-lg-left">
                    <ul class="list-inline d-inline">
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                href="https://facebook.com/themefisher/"><i class="ti-facebook"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                                href="https://twitter.com/themefisher"><i class="ti-twitter-alt"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-8 text-center text-lg-right">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a
                                class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#loginModal"
                                data-toggle="modal" data-target="#loginModal">login</a></li>
                        <li class="list-inline-item"><a
                                class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#signupModal"
                                data-toggle="modal" data-target="#signupModal">register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar -->
    <div class="navigation w-100">
        <div class="container ">
            <nav class="navbar navbar-expand-lg navbar-dark p-0 align-items-baseline">
                <div class="d-flex m-auto align-items-center">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('images/cmc-logo.webp') }}" alt="logo"
                            style="height: auto; width: 150px;">
                    </a>
                </div>

                <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        {{-- Admissions --}}
                        <li class="nav-item dropdown view {{ request()->is('admission/*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admission.about-admission') }}">Admission</a>
                        </li>
                        {{-- Academics --}}
                        <li class="nav-item dropdown view  {{ request()->is('academic/*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('academic.academic-departments') }}">Academics</a>

                        </li>
                        <li class="nav-item dropdown view  {{ request()->is('academic/*') ? 'active' : '' }}">
                            <a class="nav-link" href="#">Colleges</a>
                        </li>
                        <li class="nav-item {{ request()->is('campus-tour/*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('services.campus-tour') }}">Campus tour</a>
                        </li>
                        {{-- News --}}
                        <li class="nav-item dropdown view">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                News and Information
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">News</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Awards and Accreditations</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Frequently Asked Questions</a></li>


                            </ul>
                        </li>
                        {{-- Online Services --}}
                        <li class="nav-item dropdown view">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item"
                                        href="{{ route('services.cmc-cial') }}">Internalization</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('services.scholarship-service') }}">Scholarship</a></li>
                                <li><a class="dropdown-item" href="{{ route('services.student-affairs') }}">Student
                                        Affairs</a></li>
                                <li><a class="dropdown-item" href="#">Research</a></li>
                                <li><a class="dropdown-item" href="#">Alumni Affairs</a></li>
                                <li><a class="dropdown-item" href="{{ route('services.guidance-service') }}">Guidance
                                        Services & Training</a>
                                <li><a class="dropdown-item" href="{{ route('services.library-service') }}">Library
                                        Services</a></li>
                                <li><a class="dropdown-item" href="{{ route('services.health-service') }}">Health
                                        Services</a></li>
                            </ul>
                        </li>
                        {{-- Online Services --}}
                        <li class="nav-item dropdown view">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Careers
                            </a>
                        </li>

                    </ul>
                </div>

            </nav>
        </div>

    </div>
</header>
