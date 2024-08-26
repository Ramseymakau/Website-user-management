<!DOCTYPE html>
<html>
   <head>
       <title>search</title>
</head>
<body>
   @if ($user)
       <h1>Welcome, {{ $user->name }}</h1>
   @else
       <h1>Welcome, Guest</h1>
   @endif
</body>
</html>