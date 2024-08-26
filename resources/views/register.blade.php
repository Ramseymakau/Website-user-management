@extends('layouts.app')
@section('content')
<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <head>
        <title>User Registration</title>
        <style>
        html {
    background-color: rgb(162, 207, 246);
}

header{
    font-size: medium;
}

body {
    width: 500px;
    font-family: cursive;
    font-size: 0.875rem;
    height: 300px;
    background-color: white;
    border: none;
    border-radius: 28px;
    padding: 50px;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 100px;
    margin-top: 100px;
}


.form-control{
    width: 100%;
    height: 20px;
    margin-bottom: 5px;
    border-radius: 10px;
    border: 2px solid ;
    font-family: cursive;
}
.form-select{
    width: 102%;
    height: 28px;
    margin-bottom: 5px;
    border-radius: 10px;
    border: 2px solid ;
    font-family: cursive;
}

.reg{ 
    padding: 15px 15px;
        
        margin: 50px;
        margin-right: 0px;
        margin-top: 10px;
        border: 1px white;
        border-radius: 25px;
        background-color: #0b57d0;
        color: white;
        font-family: "Google Sans", roboto, "Noto Sans Myanmar UI", arial, sans-serif;
        font-size: 0.875rem;
      }
      
.reg:hover {
    background-color: #0743a3;
      }
        </style>
        <!--<link rel="stylesheet" href="resources/css/register.css"><!{ asset('resources/register.css') }}-->
</head>
<body>
    <h1>Create a New User</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="name" class="form-label">Name:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}" class="form-control">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" class="form-control">
        <label for="password" class="form-label">Password:</label>
        <input type="password" id="password" name="password" value="{{ $user->password }}" class="form-control">
        <label for="role" class="form-label">Role:</label>
        <select id="role" name="role" class="form-select">
            <option value="admin" @selected($user->role == 'admin')>Admin</option>
            <option value="student" @selected($user->role == 'student')>Student</option>
            <option value="teacher" @selected($user->role == 'teacher')>Teacher</option>
        </select>
        

        <!--<label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" value="//{ $confirm_password }">-->
        <div>

            <button class="reg" onclick="register()">Create User</button>
            


        </div>
        <script>
            function register() {
                axios.post('{{ route('register') }}', {
                    // add your data to be sent here, e.g. username and password
                    name: document.getElementById('name').value,
                    email: document.getElementById('email').value,
                    password: document.getElementById('password').value,
                    role: document.getElementById('role').value
                })
                .then(response => {
                    // handle response
                })
                .catch(error => {
                    // handle error
                });
            }
        </script>


        
    </form>
</body>
    
</div>
@endsection