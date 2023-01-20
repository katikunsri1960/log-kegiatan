@extends('layouts.guest')
@section('content')
<div class="page login-page">
    <div>
        <!-- CONTAINER OPEN -->
        <div class="col col-login mx-auto mt-7">
            <div class="text-center">
                <img src="../assets/images/brand/logo.png" class="header-brand-img" alt="">
            </div>
        </div>
        <div class="container-login100">
            <div class="wrap-login100 p-0">
                <div class="card-body">
                    <form class="login100-form validate-form" action="{{ route('login') }}" method="POST">
                        @csrf
                        <span class="login100-form-title">
                            Login
                        </span>
                        @error('email')
                            <span class="text-red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="wrap-input100 validate-input " data-bs-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100 @error('email') is-invalid state-invalid @enderror" type="text" name="email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="zmdi zmdi-email" aria-hidden="true"></i>
                            </span>

                        </div>
                        @error('password')
                        <span class="text-red" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                            </span>

                        </div>
                        <div class="text-end pt-1">
                            <p class="mb-0"><a href="forgot-password.html" class="text-primary ms-1">Forgot Password?</a></p>
                        </div>
                        <div class="container-login100-form-btn">
                            <button type="submit" href="index.html" class="login100-form-btn btn-primary">
                                Login
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>
</div>
@endsection
