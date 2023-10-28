@extends('layouts.main.index')

@section('unreg')

    @if(Route::currentRouteName() === 'password.request')

        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="login-wrap">
                <div class="login-html">
                    <input id="tab-1"
                           type="radio"
                           name="tab"
                           class="sign-in" checked>
                    <label for="tab-1"
                           class="tab">{{ __('Reset Password') }}
                    </label>

                    <input id="tab-2"
                           type="radio"
                           name="tab"
                           class="sign-up">
                    <label for="tab-2"
                           class="tab">

                    </label>

                    <div class="login-form">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="sign-in-htm">

                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

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
                                           autocomplete="email"
                                           autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="group">
                                    <input type="submit" class="btn btn-primary" value="{{ __('Send Password Reset Link') }}">
                                </div>

                                <div class="hr"></div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif


@endsection

