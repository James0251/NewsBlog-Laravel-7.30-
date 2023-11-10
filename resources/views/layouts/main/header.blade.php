{{-- HEADER ГЛАВНОГО ШАБЛОНА ДЛЯ ВСЕХ СТРАНИЦ --}}


@if(\Illuminate\Support\Facades\Request::url() !== route('login'))
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active " href="{{ route('main') }}">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="{{ route('shop.index') }}">Shop</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="{{ route('blog.index') }}">Blog</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    @auth
                    <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Личный кабинет</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endauth
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
    <!-- ======= End Header ======= -->
@endif

