
<div>
    <p> Hello from Test Blade </p>
    <form action="/test" method="POST"
    @foreach($questions as $key =>$question) 
        
<p> {{$question}} </p>
    <label for="answer">1</label>
<input type="radio" name="{{$key}}">

<label for="answer">2</label>
<input type="radio" name="{{$key}}">

    <label for="answer">3</label>
<input type="radio" name="{{$key}}">

    <label for="answer">4</label>
<input type="radio" name="{{$key}}">

    <label for="answer">5</label>
    <input type="radio" name="{{$key}}">
    <label for="answer">0</label>
<input type="radio" name="{{$key}}">
<input type="submit" value="Submit">
@endforeach 
</form>
</div>