@extends('layouts.app')

@section('content')
<div class="authincation-content style-2">
    <div class="row no-gutters">
        <div class="col-xl-12">
            <div class="auth-form">
                <div class="text-center d-block d-sm-none mb-4 pt-5">
                    <a href="javascript:;"><img src="{{ asset('images/logo.png') }}" class="dark-login"  alt=""></a>
                    <a href="javascript:;"><img src="{{ asset('images/logo.png') }}" class="light-login" alt=""></a>
                </div>
                
                <h4 class="text-center mb-4">Sign in your account</h4>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="mb-1 form-label">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="mb-1 form-label">Password</label>
                        <div class="position-relative">
                            <input id="ic-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <span class="show-pass eye">
                                <i class="fa fa-eye-slash"></i>
                                <i class="fa fa-eye"></i>
                            </span>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                        <div class="mb-3">
                            <div class="form-check custom-checkbox ms-1">
                                <input class="form-check-input" type="checkbox" name="remember" id="basic_checkbox_1" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
                            </div>
                        </div>
                        <div class="mb-3">
                        
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
