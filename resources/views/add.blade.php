<h1>Add Member</h1>

@if(session('user'))
<h4 style="color:green"> {{session('user')}} user has been added.</h4>
@endif
<form action="addmember" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter User Name"> <br> <br>    
    <input type="password" name="password" placeholder="enter password">
    <br> <br>
    <input type="text" name="email" placeholder="enter user email">
    <br> <br>
    <button type="submit">Add Member</button>
</form>