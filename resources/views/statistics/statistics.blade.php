<<<<<<< HEAD
=======
@extends('layouts.user-main')

@section('user-content')

<section class="statistics">

  <form action="/statistics/statistics" method="GET">
  <label for="testing">Testing round:</label>
  <select name="testing">
  <option value='1'>Test Round - 1</option>
  <option value='2'>Test Round - 2</option>
  <option value='3'>Test Round - 3</option>
    </select>

    <input type="submit" value="Display">
  </form>



<div class="user-statatistics-user-info">


      <h2> User:{{ $user_name }}</h2>
      <h2>Testing Round:{{ $testing }}</h2>
      </div>


    <div class="user-statistics-recommendation">

    
      <h2>Recommendation
      @if(isset($user_recommendation))
      
      {{ $user_recommendation }}
    
    @endif
    
    </h2>

      </div>
      
</section>


    @endsection




>>>>>>> responses
