<!-- dashboard.blade.php -->
<head>
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
font-size: 100%;
height: fit-content;
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
.logout{
    padding: 0 24px 0 24px;
    margin: 100px;
    margin-top: 20px;
    margin-bottom: 6px;
    margin-left: 10px;
    margin-right: 10px;
    cursor: pointer;
    border-radius: 60px;
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
</style>


    <header>
    <h1>Teacher Profile</h1>
    </header>
    <body>
    
    <div>
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
    </div>

    <button class="logout" onclick="logout()">Logout</button>

<script>
    function logout() {
        axios.get('{{ route('logout') }}')
            .then(response => {
                // handle response
                window.location.href = '{{ route('login') }}'; // redirect to login page
            })
            .catch(error => {
                // handle error
            });
    }
</script>
    </body>