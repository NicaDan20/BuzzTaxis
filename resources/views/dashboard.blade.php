<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/dashboard.css')}}">
    <meta name="robots" content="noindex, nofollow"/>
    <title>Buzz Taxis Admin Panel</title>
</head>
<body>

    <div class="sidebar">
        <ul>
            <li><a href="/dashbord/posts">Posts</a></li>
            <li><a href="/dashboard/bookings">Bookings</a></li>
            <li><a href="/dashboard/users">Users</a></li>
            <li><a href="/">To Website</a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="logout" type="submit">Log Out</button>
                </form>            
            </li>
        </ul>
    </div>

    <div class="main">
        <h2>Welcome {{$user->name}}</h2>
        <h4>Your role is: {{$user->role->role}}</h4>
    
        <div class="content">
            @yield('content')
        </div>
    
    </div>


</body>
</html>
