@extends('layouts.user-main')

@section('user-content')

@guest
<section class="user-login">
<form action="{{ route('login') }}" method="post">
    @csrf
 
    <input type="email" name="email" value="{{ old('email') }}" placeholder="Insert email here">
 
    <input type="password" name="password" value="" placeholder="Insert password here">
 <div class="user-login-button">
    <button id="user-login-button">Login</button>
    <a href="/register">/or Register</a>
    </div>
  
</form>


@endguest





</section>
@endsection
