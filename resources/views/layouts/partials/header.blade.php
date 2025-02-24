<header class="fixed-top header">
    <!-- top header -->
    <div class="top-header py-2" style="background: #EBEBEB;">
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
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar -->
    <div class="navigation w-100">
        <div class="container ">
            <nav class="navbar navbar-expand-lg navbar-dark p-0 align-items-baseline">
                <div class="d-flex m-auto align-items-center flex-column">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('images/logo/header_logo.png') }}" alt="logo"
                            style="height: auto; width: 150px;">
                    </a>
                    <h6 class="text-white font-weight-bold">Research and Publication Center</h6>
                </div>
                <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        {{-- Home --}}
                        <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        {{-- About Us --}}
                        <li class="nav-item dropdown view {{ request()->is('about/*') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item {{ request()->is('about/about-us') ? 'active' : '' }}"
                                        href="{{ url('/about/about-us') }}">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('about/our-team') ? 'active' : '' }}"
                                        href="{{ url('/about/our-team') }}">Our Team</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('about/contact-us') ? 'active' : '' }}"
                                        href="{{ url('/about/contact-us') }}">Contact Us</a>
                                </li>
                            </ul>
                        </li>
                        {{-- Institutes --}}
                        <li class="nav-item dropdown view {{ request()->is('institute/*') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Institutes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item {{ request()->is('institute/popular') ? 'active' : '' }}"
                                        href="{{ url('/institute/popular') }}">
                                        Popular Opinion
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('institute/emerging') ? 'active' : '' }}"
                                        href="{{ url('/institute/emerging') }}">Emerging Technologies and Green Innovation Studies</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('institute/biodiversity') ? 'active' : '' }}"
                                        href="{{ url('/institute/biodiversity') }}">Biodiversity and Environment Studies</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('institute/economy') ? 'active' : '' }}"
                                        href="{{ url('/institute/economy') }}">Economy and Enterprise Studies</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('institute/social') ? 'active' : '' }}"
                                        href="{{ url('/institute/social') }}">Social Welfare and Human Development Studies</a>
                                </li>
                            </ul>
                        </li>
                        {{-- Centers --}}
                        <li class="nav-item dropdown view {{ request()->is('center/*') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Centers
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item {{ request()->is('center/nanotechnology') ? 'active' : '' }}"
                                        href="{{ url('/center/nanotechnology') }}">
                                        CGNIES
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('center/coleoptera') ? 'active' : '' }}"
                                        href="{{ url('/center/coleoptera') }}">Coleoptera Research Center</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('center/policy') ? 'active' : '' }}"
                                        href="{{ url('/center/policy') }}">UM Public Policy Center</a>
                                </li>
                            </ul>
                        </li>
                        {{-- Journals --}}
                        <li class="nav-item dropdown view {{ request()->is('journal/*') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Journals
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item {{ request()->is('journal/multidisciplinary') ? 'active' : '' }}"
                                        href="{{ url('/journal/multidisciplinary') }}">
                                        UMIMRJ
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('journal/emerging') ? 'active' : '' }}"
                                        href="{{ url('/journal/emerging') }}">JETI</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('journal/economy') ? 'active' : '' }}"
                                        href="{{ url('/journal/economy') }}">JEES</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('journal/tropical') ? 'active' : '' }}"
                                        href="{{ url('/journal/tropical') }}">JTC</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('journal/social') ? 'active' : '' }}"
                                        href="{{ url('/journal/social') }}">JSWHDS</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('journal/college-journals') ? 'active' : '' }}"
                                        href="{{ url('/journal/college-journals') }}">College Journals</a>
                                </li>
                            </ul>
                        </li>
                        {{-- Conferences --}}
                        <li class="nav-item dropdown view {{ request()->is('conference/*') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Conferences
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item {{ request()->is('conference/policy') ? 'active' : '' }}"
                                        href="{{ url('/conference/policy') }}">
                                        Public Policy Conference
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('conference/ietgi') ? 'active' : '' }}"
                                        href="{{ url('/conference/ietgi') }}">Conference by IETGI</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('conference/ibe') ? 'active' : '' }}"
                                        href="{{ url('/conference/ibe') }}">Conference by IBE</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('conference/economy') ? 'active' : '' }}"
                                        href="{{ url('/conference/economy') }}">RCEES</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('conference/social') ? 'active' : '' }}"
                                        href="{{ url('/conference/social') }}">RCSWHDS</a>
                                </li>
                            </ul>
                        </li>
                        {{-- Lingkages --}}
                        <li class="nav-item {{ request()->is('linkages') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/linkages') }}">Linkages</a>
                        </li>
                        {{-- Downloads --}}
                        <li class="nav-item {{ request()->is('downloads') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/downloads') }}">Downloads</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>