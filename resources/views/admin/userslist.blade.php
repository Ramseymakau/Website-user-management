<!--resources/views/admin/userslist.blade.php-->
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
.data{
   
    
}

</style>
    
        <title>Users List</title>
</head>
<body>
    <header>
    <h1>Users List</h1>
    </header>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
                <tbody>
                    @foreach($user as $user)
                    <tr>
                        <td class='data'>{{ $user->name }}</td>
                        <td class='data'>{{ $user->email }}</td>
                        <td class='data'>{{ $user->role  }}</td>
                        <td class='data'>
                            <!-- Actions buttons or links -->
                            <a href="{{ route('user.edit', $user) }}">Edit</a>
                        </td>
                        <td> 
                            <form action="{{ route('user.delete', $user) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" >Delete User</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
</body>
                        
                        
</div>
