<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Guildresh</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


<style>
    .navbar-brand{
        float: left;
        margin-top: 0px;

    }
    .navbar-toggler{
        margin-top: 0px;
    }
    .container{
        padding: 20px;
        maegin-top: 10px;
    }
    nav.navbar navbar-expand-md navbar-light bg-white shadow-sm{
        padding: 10px;
        margin-top: 10px;
    }
    .navbar-brand img{
        width: 50px;
        height: 50px;
        margin-top: 0px;
    }
    .collapse navbar-collapse{
        float: right;
        border-left: 1px solid ;
        
    }
    .navbar-nav{
        float: right;
        border-left: 1px solid ;
        margin: -0px;
        margin-top: -30px;
        }

.dropdown-menu {
    padding: 0;
    margin-top: 10px;
    border: none;
    border-radius: 0;
    
}
.dropdown-edit {
    padding: 5px 3px;
   
    font-size: 12px;
    color: white;
    text-decoration: none;
    border-radius: 80px;
    background-color: rgb(57, 151, 63);

    
}
.dropdown-logout {
    padding: 5px 3px;
    
    font-size: 12px;
    color: white;
    text-decoration: none;
    border-radius: 80px;
    background-color: crimson;
}

.dropdown-edit:hover{
    background-color: rgb(49, 140, 4);
    color: #ffff;
    border-radius: 80px;
}
.dropdown-logout:hover {
    background-color: red;
    color: #ffff;
    border-radius: 80px;
}

.dropdown-item.active {
    background-color: #b73340;
    color: #fff;
    }
</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Guildresh
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
               
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login.form') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register.form') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <button id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </button>
                                <ul>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                   <li> <a class="dropdown-edit" href="{{ route('user.edit', $user) }}">Edit Profile</a></li>
                                </div>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                   <li> <a class="dropdown-logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                </ul> 
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
