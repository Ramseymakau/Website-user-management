@extends('layouts.app')
@section('content')

<div>
<head>
    

    <title><h1>Login</h1></title>
    <style>
         html {
background-color: rgb(162, 207, 246);
}
header{
font-size: medium;
}

body {
width: 600px;
font-family: cursive;
font-size: 0.875rem;
height: 400px;
background-color: white;
border: none;
border-radius: 60px;
padding: 20px;
margin: auto;

justify-content: center;
align-items: center;
margin-bottom: 100px;
margin-top: 100px;

}


.form-control{
width: 70%;
height: 20px;
margin-bottom: 5px;
border-radius: 10px;
border: 2px solid ;
font-family: cursive;

}
.form-select{
width: 15%;
height: 28px;
margin-bottom: 5px;
border-radius: 10px;
border: 2px solid ;
font-family: cursive;

}

.login{
padding: 15px 15px;
    
margin: 70px;
margin-right: 70px;
margin-top: 5px;
border: 1px white;
border-radius: 25px;
background-color: #0b57d0;
color: white;
font-family: "Google Sans", roboto, "Noto Sans Myanmar UI", arial, sans-serif;
font-size: 0.875rem;
float: inline-end

}

.login:hover{
background-color: #0743a3;
}
</style>

</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                

                <div class="card-body">
                    <h1 float: top;>Login</h1>
                    

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="role" class="form-label">Role:</label>
                        <div class="col-md-6">
                            <select id="role" name="role" class="form-select">
                                <option value="admin" @selected($user->role == 'admin')>Admin</option>
                                <option value="student" @selected($user->role == 'student')>Student</option>
                                <option value="teacher" @selected($user->role == 'teacher')>Teacher</option>
                            </select>
                        </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="login">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection