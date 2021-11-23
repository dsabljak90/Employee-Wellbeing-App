<div>
    <p> Hello from Recommendations Blade. </p>
</div>
@extends('layouts.user-main')

@section('user-content')




    <div class="user-recommendations-container">

    <div class="user-statatistics-user-info">
<div id='app'>
<script src="{{ mix('js/recommendations.js') }}"></script>

</div>

<h2> User:{{ $user_name }}</h2>
<h2>Testing Round:{{ $testing }}</h2>
</div>


<div class="user-statistics-recommendation">
{{-- <h2>Recommendation :{{ $user_recommendation }}</h2> --}}

</div>
</div>


@endsection
