<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/statistics/statistics" method="GET">
<label for="testing">testing round:</label>
<select name="testing">
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
  </select>

  <input type="submit" value="Submit">
</form>




<h2> User:{{ $user }}</h2>
    <h2>Testing:{{ $testing }}</h2>
    <h2>Awerage:Score, (here will go recommendation on the end){{ $score }}</h2>
    
</body>
</html>




