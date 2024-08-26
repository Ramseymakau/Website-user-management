<!-- dashboard.blade.php -->
@extends('layouts.app')
@section('content')
<head>
    <style>
        html {
background-color: rgb(162, 207, 246);
}

header{
font-size: medium;
margin-left: 40%;
}
.details{
    text-align: center;
}

body {
width: 1000px;
font-family: cursive;
font-size: 0.875rem;
height: fit-content;
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
.logout{
    padding: 0 24px 0 24px;
    margin: 100px;
    margin-top: 20px;
    margin-bottom: 6px;
    margin-left: 0px;
    cursor: pointer;
    border-radius: 20px;
    border-style: none;
    border: none;
    background-color: #0b57d0;
    color: white;
    text-decoration: none;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    box-sizing: border-box;
    min-width: 64px;
    border: none;
    outline: none;
    line-height: inherit;
    user-select: none;
    overflow: visible;
    
    font-family: cursive;
    font-size: 0.875rem;
    font-weight: var(--c-afwt, 500);
    letter-spacing: 0rem;
    line-height: 1.4285714286;
    height: 40px;
    float: right;
 }

 .logout:hover{
    background-color: #0743a3;
 }
 .links{
    text-align: center;
 }

</style>


    <header>
    <h1>Admin Profile</h1>
    </header>
    <body>
    
    <div class="details">
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
    </div>

    <!--<button class="logout" onclick="logout()">Logout</button>

        <script>
            function logout() {
             axios.get('{ route('logout') }}')
            .then(response => {
                // handle response
                window.location.href = '{ route('login') }}'; // redirect to login page
            })
            .catch(error => {
                // handle error
            });
    }
        </script>-->
    


    <div class="links">
        <h2><i>Links</i></h2> 
        <p><i><a href="{{ route('admin.userslist') }}">userslist</a></i></p>
        <p><i><a href="{{ route('admins.list') }}">adminslist</a></i></p>
        <p><i><a href="{{ route('teachers.list') }}">teacherslist</a></i></p>
        <p><i><a href="{{ route('students.list') }}">studentslist</a></i></p>
        <p><i><a href="{{ route('admin.roles') }}">roleslist</a></i></p>



    </div>

    </body>

@endsection