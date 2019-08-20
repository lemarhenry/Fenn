<header>
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
        <ul class="custom-scrollbar">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light">
                    <a href="/fnhome"
                        ><img
                            src="{{ url('/storage/logo.png') }}"
                            class="img-fluid flex-center"
                    /></a>
                </div>
            </li>
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a
                            class="waves-effect arrow-r"
                            href="{{ route('dashboard') }}"
                            ><i class="fas fa-tachometer-alt"></i>Dashboard
                        </a>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r"
                            ><i class="fas fa-book-open"></i>Testimonials<i
                                class="fas fa-angle-down rotate-icon"
                            ></i
                        ></a>
                        <div class="collapsible-body">
                            <ul class="list-unstyled">
                                <li>
                                    <a
                                        href="{{ route('testimonial.create') }}"
                                        class="waves-effect"
                                        >Create</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="{{ route('testimonial.view') }}"
                                        class="waves-effect"
                                        >View</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r"
                            ><i class="far fa-file-image"></i>Carousel<i
                                class="fas fa-angle-down rotate-icon"
                            ></i
                        ></a>
                        <div class="collapsible-body">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{route('carousel.create')}}" class="waves-effect"
                                        >Add Image</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="{{ route('carousel.view') }}"
                                        class="waves-effect"
                                        >View</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r"
                            ><i class="far fa-images"></i> Portfolio<i
                                class="fas fa-angle-down rotate-icon"
                            ></i
                        ></a>
                        <div class="collapsible-body">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{route('portfolio.create')}}" class="waves-effect"
                                        >Add Portfolio</a
                                    >
                                </li>
                                <li>
                                    <a href="{{route('portfolio.view')}}" class="waves-effect">View</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="waves-effect arrow-r"
                         href="{{route('message.view')}}"
                            ><i class="far fa-envelope" > </i>Messages</a
                        >
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->
        </ul>
        <div class="sidenav-bg mask-strong"></div>
    </div>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav
        class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav bg-white"
    >
        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a
                href="#"
                data-activates="slide-out"
                class="button-collapse black-text"
                ><i class="fas fa-bars"></i
            ></a>
        </div>
        <!-- Breadcrumb-->
        <div class="breadcrumb-dn mr-auto">
            <p>Dashboard @yield('bc')</p>
        </div>
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item">
                <a class="nav-link"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark"
                href="{{route('admin.edit')}}">
                    <i class="fas fa-user"></i>
                    <span
                    class="clearfix d-none d-sm-inline-block black-text">
                             Account
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link black-text"
                    title="Logout"
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                document.getElementById('logout-form').submit();
                "
                >
                    <i class="fa fa-sign-out-alt"></i>
                    <span class="clearfix d-none d-sm-inline-block black-text">
                        {{ __("Logout") }}
                        <form
                            id="logout-form"
                            action="{{ route('logout') }}"
                            method="POST"
                            style="display: none;"
                        >
                            @csrf
                        </form>
                    </span>
                </a>
            </li>
        </ul>
    </nav>
</header>
