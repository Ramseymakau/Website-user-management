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
        
        <title>Admins List</title>
</head>
<body>
    <header><h1>Admins List</h1></header>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
                <tbody>
                    @foreach($admin as $admin)
                    <tr>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>
                            <!-- Actions buttons or links -->
                           <!-- <a href="{ route('user.edit', $admin->name) }}">Edit</a>
                            <a href="{ route('user.delete', $admin->name) }}">Delete</a>-->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
</body>
                        
                        
</div>
