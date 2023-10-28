@extends('layouts.main.index')

@section('unreg')

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="login-wrap">
            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                                                                                         class="tab">Вход</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2"
                                                                                 class="tab">Регистрация</label>
                <div class="login-form">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        {{-- Login --}}
                        <div class="sign-in-htm">

                            {{-- Email --}}
                            <div class="group">
                                <label for="email" class="label"
                                       style="margin-bottom: 15px">{{ __('E-Mail Address') }}</label>
                                <input id="email"
                                       type="email"
                                       class="input @error('email') is-invalid @enderror"
                                       name="email"
                                       value="{{ old('email') }}"
                                       required
                                       autocomplete="off"
                                       autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- Password --}}
                            <div class="group">
                                <label for="password" class="label"
                                       style="margin-bottom: 15px">{{ __('Password') }}</label>
                                <input id="password"
                                       type="password"
                                       class="input @error('password') is-invalid @enderror"
                                       data-type="password"
                                       name="password"
                                       required
                                       autocomplete="off">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            {{-- Checkbox --}}
                            <div class="group">
                                <input id="remember" {{ old('remember') ? 'checked' : '' }}
                                type="checkbox"
                                       name="remember"
                                       class="check"
                                       checked>
                                <label for="remember"><span class="icon"></span> Запомнить меня</label>
                            </div>

                            <div class="group">
                                <input type="submit" class="button" value="Вход">
                            </div>

                            <div class="hr"></div>
                            <div class="foot-lnk">
                                <a href="{{ route('password.request') }}">Забыли пароль?</a>
                            </div>
                        </div>
                    </form>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- Register --}}
                        <div class="sign-up-htm">

                            {{-- Name --}}
                            <div class="group">
                                <label for="name" class="label" style="margin-bottom: 15px">{{ __('Имя') }}</label>
                                <input id="name"
                                       type="text"
                                       class="input @error('name') is-invalid @enderror"
                                       name="name"
                                       value="{{ old('name') }}"
                                       required
                                       autocomplete="off"
                                       autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- E-Mail --}}
                            <div class="group">
                                <label for="email" class="label"
                                       style="margin-bottom: 15px">{{ __('E-Mail Адрес') }}</label>
                                <input id="email"
                                       type="email"
                                       class="input @error('email') is-invalid @enderror"
                                       name="email"
                                       value="{{ old('email') }}"
                                       required
                                       autocomplete="off">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- Password --}}
                            <div class="group">
                                <label for="password" class="label"
                                       style="margin-bottom: 15px">{{ __('Пароль') }}</label>
                                <input id="password"
                                       type="password"
                                       class="input @error('password') is-invalid @enderror"
                                       data-type="password"
                                       name="password"
                                       required
                                       autocomplete="off">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            {{-- Confirm Password --}}
                            <div class="group">
                                <label for="password-confirm" class="label"
                                       style="margin-bottom: 15px">{{ __('Подтвердите пароль') }}</label>
                                <input id="password-confirm"
                                       type="password"
                                       class="input @error('password') is-invalid @enderror"
                                       data-type="password"
                                       name="password_confirmation"
                                       required
                                       autocomplete="off">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="group">
                                <input type="submit" class="button" value="Зарегистрироваться">
                            </div>
                            <div class="hr"></div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
