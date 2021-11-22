<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<!-- 
@if(isset($user_name)&& $user_id ===2)
<a href="/test"><h2>{{ $user_name }}</h2></a>

@endif

@if(isset($user_name))
<h2>{{ $user_name }}</h2>

@endif  this render user to the main page. -->
    
<body>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button>Logout</button>
</form>
@yield('content')


</body>
</html>