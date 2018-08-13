@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section-block replicable-content clear-height bkg-heavy-rain-gradient">
        <div class="row flex v-align-middle">
            <div class="column width-6 offset-3">
                <div>
                    <div class="signup-box box rounded xlarge bkg-white shadow">
                        <h3 class="center">Register an Account</h3>
                        <p class="mb-20 center">Already have an account? <a href="{{ route('login') }}" class="fade-location">Click Here</a></p>
                        <div class="register-form-container">
                            <form class="register-form" action="{{ route('register') }}" aria-label="{{ __('Register') }}" method="post" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="column width-12">
                                        <div class="field-wrapper">
                                            <label class="color-charcoal">Name:</label>

                                            <input id="name" type="text" class="form-firstname form-element rounded medium{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="column width-12">
                                        <div class="field-wrapper">
                                            <label class="color-charcoal">Email:</label>

                                            <input id="email" type="email" class="form-email form-element rounded medium{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                                    <div class="column width-12">
                                        <div class="field-wrapper">
                                            <label class="color-charcoal">Conform Password:</label>

                                            <input id="password-confirm" type="password" class="form-password form-element rounded medium" name="password_confirmation" required>
                                        </div>
                                    </div>
                                    <div class="column width-12 mt-10 center">
                                        <input type="submit" value="Create Account" class="form-submit button rounded medium bkg-green bkg-hover-theme bkg-focus-green color-white color-hover-white no-margins">
                                    </div>
                                </div>
                            </form>
                            <p class="text-small mt-20 center">By creating an account you agree to our terms - <a href="#">Read More</a></p>
                            <div class="form-response show"></div>
                        </div>
                    </div>
                    <p class="text-small center mt-20 mb-0">I forgot my password - <a href="#">Remind me</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
