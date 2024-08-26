<!--resources/views/admin/students.blade.php-->
<!--<h1>Students</h1>

<ul>
    foreach($students as $student)
        <li>
            { $student->name }} ({ $student->email }})
        </li>
    endforeach
</ul>-->

<div>
    <head>
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
        
        <title>Students List</title>
</head>
<body>
    <header><h1>Students List</h1></header>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
                <tbody>
                    @foreach($student as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>
                            <!-- Actions buttons or links -->
                            <!--<a href="{ route('user.edit', $student) }}">Edit</a>
                            <form action="{ route('user.delete', $student) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" >Delete User</button>
                            </form>-->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
</body>
                        
                        
</div>
