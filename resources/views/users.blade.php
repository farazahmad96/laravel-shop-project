<h1>User Login</h1>

<form action="users" method="POST">
    {{-- {{method_field('DELETE')}} --}}
    @csrf
    <input type="text" name="user" placeholder="enter name"> <br>
    <input type="password" name="pass" placeholder="enter pass"> <br>
    <button type="submit">Login</button>
</form>