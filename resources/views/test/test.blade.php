@extends('layouts.user-main')

@section('user-content')
@if(\Gate::allows('admin')) 
<form action="/test/{{ $testing->id }}/assign" method="post">
    @csrf
    <button type="submit" name = "submit" value = "Save">Assign Test</button>
</form>
@endif

@if($testing->opened)

    @if($responses->count() > 0)
    <h1>Uz si odpovedal</h1>
    @else

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <section class="user-test">
        <div class="user-test-info">
                <h2> Test </h2>

                <p>We have to make here decision about testing witch is happening and how to always submit all 7 answers</p>

                </div>
        <div class="user-test-form">

                <form action="/test/{{ $testing->id }}" method="POST">
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
    @endif
@else 
<h1>Come back late</h1>
@endif


@endsection