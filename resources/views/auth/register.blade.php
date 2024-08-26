@extends('layouts.app')

@section('content')


<head>
    

    <title><h1>Register</h1></title>
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
height: 500px;
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

.register{
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

.register:hover{
background-color: #0743a3;
}
</style>

</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    <h1>Create a User</h1>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="register">
                                    {{ __('Create User') }}
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
