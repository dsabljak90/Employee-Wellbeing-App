<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="/response" method="get">

<label for="name">Name:</label>
<input type="text" id="testing" name='testing' ></input>

<input type="submit" value="Save"/>


    <h2>{{ $user }}</h2>
    <h2>{{ $testing }}</h2>
    <h2>{{ $score }}</h2>
    </form>
    
</body>
</html>