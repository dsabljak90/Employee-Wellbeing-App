@extends('layouts.main')

@section('content')
<input type="hidden" id="user_id" name="user_id" value={{Auth::id()}}>
<input type="hidden" id="user_role" name="user_role" value={{$user_role}}>
<div id='app'>
<script src="{{ mix('js/managersstatistics.js') }}"></script>

</div>


@endsection