@guest
    {{--
    ==========================================================================================================
    ====================================ДО РЕГИСТРАЦИИ (ВИД 1)================================================
    ==========================================================================================================
    --}}

    <section id="hero-no-slider" class="d-flex justify-cntent-center align-items-center">

        @if(Route::currentRouteName() === 'main')
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <h2>Welcome to Moderna</h2>
                        <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                        <a href="{{ route('login') }}" class="btn-get-started">{{ __('Войти или зарегистрироваться') }}</a>
                    </div>
                </div>
            </div>
        @endif

       {{-- Тут вставляем форму регистрации шаблона login.blade.php --}}
       {{-- login.blade.php --}}
       {{-- email.blade.php --}}
        @yield('unreg')

    </section>

    {{--
    ==========================================================================================================
    ====================================ДО РЕГИСТРАЦИИ (ВИД 1)================================================
    ==========================================================================================================
    --}}
@endguest




