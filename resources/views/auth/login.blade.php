@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style1.css">
         
    <!--<title>Login & Registration Form</title>-->
</head>
<body>
    
    
    

<div class="container">
    <div class="forms">
        <div class="form login">
            <div class="">
                <div class="">Login</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                       

                            <div class="input-field">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Entrer votre email" required>
                                <i class="uil uil-envelope icon"></i>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-field">
                                <input id="password" type="password" placeholder="entrer votre mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" required>
                                <i class="uil uil-lock icon"></i>
                                <i class="uil uil-eye-slash showHidePw"></i>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="logCheck" class="text">
                                        {{ __('Remember Me') }}
                                    </label>

                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('oublie le mot de passe?') }}
                                    </a>
                                @endif
                                </div>
                            </div>
                        </div>

                        
                        <div class="input-field button">
                           <a href="{{('card.index')}}"><input type="button" value="Login" class="btn btn-primary"></a>  
                            
                        </div>
                        
                    </form>
                    <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="{{('register')}}" class="text signup-link">Signup Now</a>
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
