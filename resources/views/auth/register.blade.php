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
        <div class="form ">
            <div class="">
                <div class="">{{ __('Registeration') }}</div>

                <div class="">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="input-field">

                            <div class="input-field">
                                <input id="name" type="text" placeholder="Enter your name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <i class="uil uil-user"></i>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-field">
                            <div class="input-field">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email" >
                                <i class="uil uil-envelope icon"></i>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-field">
                            <div class="input-field">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Create a password" >
                                <i class="uil uil-lock icon"></i>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-field">
                            <div class="input-field">
                                <input id="password-confirm" placeholder="Confirm a password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                
                            </div>
                        </div>
                        <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">I accepted all terms and conditions</label>
                        </div>
                    </div>

                        <div class="input-field button">
                        <input type="button" value="Signup">
                        </div>
                            </div>
                        </div>
                    </form>
                    
                    <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="{{('login')}}" class="text login-link">Login Now</a>
                    </span>
                    </div>
                    
                </div>
            </div>
        </div>
        <script src="script1.js"></script>
    </div>
</div>
</body>
</html>

@endsection
