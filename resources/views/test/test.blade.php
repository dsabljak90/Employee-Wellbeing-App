
<div>
    <p> Hello from Test Blade </p>
    @foreach($questions as $question) 
        
<p> {{$question}} </p>
    <label for="answer">1</label>
<input type="radio" name="1">
    <label for="answer">2</label>
<input type="radio" name="2">
    <label for="answer">3</label>
<input type="radio" name="3">
    <label for="answer">4</label>
<input type="radio" name="4">
    <label for="answer">5</label>
<input type="radio" name="5">
    @endforeach 
</div>