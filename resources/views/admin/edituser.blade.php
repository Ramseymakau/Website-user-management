<!-- resources/views/users/edit.blade.php -->
@extends('layouts.app')
@section('content')
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
height: 380px;
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
height: 25px;
margin-bottom: 5px;
margin-left: 9px;
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

.update{
    margin-top: 20px;
    margin-left: 50%;
}
.cancel{
    margin-top: 30px;
}



</style>

</head>


<h1>Edit User: {{ $user->name }}</h1>

<form action="{{ route('user.update', $user) }}" method="POST">
    @method('PUT')
    @csrf

    <div>
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
    </div>

    <div>
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
    </div>

    <div>
        <label for="role" class="form-label">Role:</label>
        <select id="role" name="role" class="form-select">
            <option value="admin" @selected($user->role == 'admin')>Admin</option>
            <option value="student" @selected($user->role == 'student')>Student</option>
            <option value="teacher" @selected($user->role == 'teacher')>Teacher</option>
        </select>
    </div>

    <button type="submit" class="update">Update User</button>
    <a href="{{ route('admin.userslist') }}" class="cancel">Cancel</a>
</form>
@endsection