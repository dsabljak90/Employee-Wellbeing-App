@guest
<form action="{{ route('login') }}" method="post">
    @csrf
 
    <input type="email" name="email" value="{{ old('email') }}" placeholder="Insert email here">
 
    <input type="password" name="password" value="" placeholder="Insert password here">
 
    <button>Login</button>
  
</form>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button>Logout</button>
</form>
@endguest