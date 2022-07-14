<h1>USER LOGIN</h1>

<form action="formdata" method="POST">
    @csrf
    <input type="text" name ="username">
    <br><br>
    <input type="password" name ="password">
    <br><br>
    <button type="submit">Login</button>
</form>
