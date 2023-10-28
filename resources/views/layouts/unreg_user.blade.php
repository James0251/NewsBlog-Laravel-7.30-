@guest
    {{--
    ==========================================================================================================
    ====================================ДО РЕГИСТРАЦИИ (ВИД 1)================================================
    ==========================================================================================================
    --}}

    <section id="hero-no-slider" class="d-flex justify-cntent-center align-items-center">

        @if(\Illuminate\Support\Facades\Request::url() !== route('login'))
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <h2>Welcome to Moderna</h2>
                        <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                        <a href="{{ route('login') }}" class="btn-get-started ">{{ __('Войти или зарегистрироваться') }}</a>
                    </div>
                </div>
            </div>
        @endif

        {{-- Тут вставляем форму регистрации шаблона login.blade.php --}}
        @yield('unreg')

    </section><!-- End Hero No Slider Section -->

    {{--
    ==========================================================================================================
    ====================================ДО РЕГИСТРАЦИИ (ВИД 1)================================================
    ==========================================================================================================
    --}}
@else
    {{--
    ==========================================================================================================
    ====================================ПОСЛЕ РЕГИСТРАЦИИ (ВИД 2)=============================================
    ==========================================================================================================
    --}}

    @if(\Illuminate\Support\Facades\Request::url() === route('main'))
{{--        <!-- ======= Header ======= -->--}}
{{--        <header id="header" class="fixed-top d-flex align-items-center header-transparent">--}}
{{--            <div class="container d-flex justify-content-between align-items-center">--}}

{{--                <div class="logo">--}}
{{--                    <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1>--}}
{{--                    <!-- Uncomment below if you prefer to use an image logo -->--}}
{{--                    <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->--}}
{{--                </div>--}}

{{--                <nav id="navbar" class="navbar">--}}
{{--                    <ul>--}}
{{--                        <li><a class="active " href="index.html">Home</a></li>--}}
{{--                        <li><a href="about.html">About</a></li>--}}
{{--                        <li><a href="services.html">Services</a></li>--}}
{{--                        <li><a href="portfolio.html">Portfolio</a></li>--}}
{{--                        <li><a href="team.html">Team</a></li>--}}
{{--                        <li><a href="{{ route('blog.index') }}">Blog</a></li>--}}
{{--                        <li><a href="contact.html">Contact Us</a></li>--}}
{{--                        <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">Личный кабинет</a></li>--}}
{{--                                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="#">Deep Drop Down 1</a></li>--}}
{{--                                        <li><a href="#">Deep Drop Down 2</a></li>--}}
{{--                                        <li><a href="#">Deep Drop Down 3</a></li>--}}
{{--                                        <li><a href="#">Deep Drop Down 4</a></li>--}}
{{--                                        <li><a href="#">Deep Drop Down 5</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li><a href="#">Drop Down 2</a></li>--}}
{{--                                <li><a href="#">Drop Down 3</a></li>--}}
{{--                                <li><a href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                   document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}
{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <i class="bi bi-list mobile-nav-toggle"></i>--}}
{{--                </nav><!-- .navbar -->--}}

{{--            </div>--}}
{{--        </header><!-- End Header -->--}}

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex justify-cntent-center align-items-center">
            <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Moderna</span></h2>
                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                        <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                        <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                        <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </section><!-- End Hero -->
    @endif
    {{--
    ==========================================================================================================
    ====================================ПОСЛЕ РЕГИСТРАЦИИ (ВИД 2)=============================================
    ==========================================================================================================
    --}}
@endguest



