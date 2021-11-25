@extends('layouts.main')

@section('content')

<input type="hidden" name="user_id" value={{Auth::id()}}>

<div id='app'>
<script src="{{ mix('js/statistics.js') }}"></script>

</div>


@endsection
