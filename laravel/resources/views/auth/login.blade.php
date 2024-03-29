@extends('auth.layouts.auth_app')

@section('auth_title')
    Login
@endsection

@section('auth_content')

    <p class="login-box-msg">Login to start your session</p>
  
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="input-group mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="icheck-primary">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">Remember Me</label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-lg-4">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    @if (Route::has('password.request'))
        <p class="mb-1">
            <a href="{{ route('password.request') }}">I forgot my password</a>
        </p>
    @endif
    
@endsection
