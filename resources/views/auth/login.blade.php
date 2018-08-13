@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section-block replicable-content window-height bkg-heavy-rain-gradient">
        <div class="row flex v-align-middle">
            <div class="column width-6 offset-3">
                <div>
                    <div class="signup-box box rounded xlarge bkg-white shadow">
                        <h3 class="center">Sign in to continue</h3>
                        <p class="mb-20 center">Need a client account? <a href="{{ route('register') }}" class="fade-location">Click Here</a></p>
                        <div class="login-form-container">
                            <form class="login-form" action="{{ route('login') }}" aria-label="{{ __('Login') }}" method="post" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="column width-12">
                                        <div class="field-wrapper">
                                            <label class="color-charcoal">Email:</label>
                                            <input id="email" type="email" class="form-username form-element rounded medium {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="column width-12">
                                        <div class="field-wrapper">
                                            <label class="color-charcoal">Password:</label>
                                            <input id="password" type="password" class="form-password form-element rounded medium{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- <div class="column width-12">
                                        <div class="field-wrapper pt-0 pb-20">
                                           
                                            <input class="form-control form-element checkbox rounded" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label for="checkbox-1" class="checkbox-label no-margins">Remember Me</label>

                                        </div>
                                    </div> -->
                                    <div class="column width-12 center">
                                        <input type="submit" value="Sign In" class="form-submit button rounded medium bkg-green bkg-hover-theme bkg-focus-green color-white color-hover-white mb-0">
                                    </div>
                                </div>
                            </form>
                            <div class="form-response show"></div>
                        </div>
                    </div>
                    <p class="text-small center mt-20 mb-0 center">I forgot my password - <a href="#">Remind me</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
