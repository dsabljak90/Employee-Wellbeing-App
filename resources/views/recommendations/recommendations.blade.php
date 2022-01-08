@extends('layouts.user-main')

@section('user-content')




<div class="user-recommendations-container">
  <div class="user-recommendations-user-info">
        <h2> User:{{ $user_name }}</h2>
        <h2>Testing Round:{{ $testing }}</h2>
   </div>
   <div class="user-recommendations-recommendation">
         <h3>Recommendation</h3> 
         <h3>{{ $user_recommendation }}</h3> 

   </div>
    <div class="user-chart-recommendations"id='app'>
        <script src="{{ mix('js/recommendations.js') }}"></script>



     </div>
</div>


@endsection
