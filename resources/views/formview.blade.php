<h1>USER LOGIN</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="formdata" method="POST">
    @csrf
    <label for="">Enter Username</label><br>
    <input type="text" name ="username">
    <p>@error('username'){{$message}}@enderror</p>

    <label for="">Enter Password</label><br>
    <input type="password" name ="password">
    <p>@error('password'){{$message}}@enderror</p>

    <button type="submit">Login</button>
</form>
