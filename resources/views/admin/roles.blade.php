<!-- resources/views/admin/roles.blade.php-->
<div>
    <head>
    <style>
        html {
    background-color: rgb(162, 207, 246);
    }
    
    header{
    font-size: medium;
    text-align: center;
    
    }
    
    body {
    width: fit-content;
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
</style>
</head>
    
<header><h1>Roles</h1></header>

<ul>
    
        <li>
            <a href="{{ route('admins.list')}}">admins</a>
        </li>
        <li>
            <a href="{{ route('teachers.list')}}">teachers</a>
        </li>
        <li>
            <a href="{{ route('students.list')}}">students</a>
        </li>

</ul>
</div>