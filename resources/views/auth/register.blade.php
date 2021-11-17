@foreach ($errors->all() as $error)
    <div class="error">{{ $error }}</div>
@endforeach

<form action="{{ route('register') }}" method="post">
    @csrf

    <input type="text" name="fullname" value="{{ old('fullname') }}" placeholder="Insert fullname here">

    <input type="email" name="email" value="{{ old('email') }}" placeholder="Insert email here">

    <input type="password" name="password" value="" placeholder="Insert password here">

    <input type="password" name="password_confirmation" value="" placeholder="Insert password here">

    <button>Register</button>

</form>