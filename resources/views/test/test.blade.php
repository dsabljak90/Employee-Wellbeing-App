@extends('layouts.user-main')

@section('user-content')
<section class="user-test">
    <div class="user-test-info">
            <h2> Test </h2>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam iusto maiores ab consequatur ratione.</p>

            </div>
    <div class="user-test-form">

            <form action="/test" method="POST">
            @csrf
            @foreach($questions as $key =>$question) 
                
        <p> {{$question->text}} </p>
            <label for="answer">1</label>
        <input type="radio" name="{{"answers[".$question->id."]"}}" value="1">

        <label for="answer">2</label>
        <input class="tocka" type="radio" name="{{"answers[".$question->id."]"}}" value="2">

            <label for="answer">3</label>
        <input type="radio" name="{{"answers[".$question->id."]"}}" value="3">

            <label for="answer">4</label>
        <input type="radio" name="{{"answers[".$question->id."]"}}" value="4">

            <label for="answer">5</label>
            <input type="radio" name="{{"answers[".$question->id."]"}}" value="5">
            <label for="answer">0</label>
        <input type="radio" name="{{"answers[".$question->id."]"}}" value="0">

        @endforeach 
    <div class="user-submit-button">
        <input class="submit-button" type="submit" value="Submit">
</div>    
    </form>
        </div>
</section>


@endsection