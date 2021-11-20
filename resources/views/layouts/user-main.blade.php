<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<header>
    <div class="title-user-part">
<h1>Test</h1>
<h3>User</h3>
</div>
<div>
<ul>
<a href="">
    <li>Test</li>
</a>
<a href="">
    <li>Recommendation</li>
</a>
<a href="">
    <li>Statistic</li>
</a>
<a href="">
    <li>Logout</li>
</a>
</ul>

</div>



</header>
@yield('user-content')

</body>
</html>