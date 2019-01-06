@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mt-4">
                <div class="text-center login-text">
                    <h3>{{ __('Customer Login') }}</h3>
                </div>
                <div class="mt-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="username" class="col-sm-4 col-form-label login-text">{{ __('Username') }}</label>
                            <br>
                            <div class="col-md-12">
                                <input id="username" type="text" placeholder="Required Field" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} login-input" name="username" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-4 col-form-label login-text">{{ __('Email') }}</label>
                            <br>
                            <div class="col-md-12">
                                <input id="email" type="text" placeholder="Required Field" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} login-input" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-4 col-form-label login-text">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Required Field" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} login-input" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label login-text" for="remember">{{ __('Keep me signed in') }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <p class="login-text"><u><a href="#">Create login</a></u> | Forget your <u>
                                    <a href="{{ route('password.request') }}">email</a></u> or <u><a href="{{ route('password.request') }}">password</a></u>?
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection