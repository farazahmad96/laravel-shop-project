<h1>User Login</h1>

<form action="user" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter username"> <br> <br>    
    <input type="password" name="pass" placeholder="enter password">
    <br>
    <button type="submit">Login</button>
</form>