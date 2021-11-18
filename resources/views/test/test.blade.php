<div>
    <p> Hello from Test Blade </p>
    <form action="/test" method="POST">
    @csrf
    @foreach($questions as $key =>$question) 
        
<p> {{$question->text}} </p>
    <label for="answer">1</label>
<input type="radio" name="{{"answers[".$question->id."]"}}" value="1">

<label for="answer">2</label>
<input type="radio" name="{{"answers[".$question->id."]"}}" value="2">

    <label for="answer">3</label>
<input type="radio" name="{{"answers[".$question->id."]"}}" value="3">

    <label for="answer">4</label>
<input type="radio" name="{{"answers[".$question->id."]"}}" value="4">

    <label for="answer">5</label>
    <input type="radio" name="{{"answers[".$question->id."]"}}" value="5">
    <label for="answer">0</label>
<input type="radio" name="{{"answers[".$question->id."]"}}" value="0">

@endforeach 
<input type="submit" value="Submit">
</form>
</div>