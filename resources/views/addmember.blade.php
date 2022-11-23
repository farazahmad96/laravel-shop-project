<h1>Add Members</h1>

<form action="add" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter User Name"> <br> <br>    
    <input type="text" name="email" placeholder="enter email">
    <br> <br>
    <input type="text" name="address" placeholder="enter user address">
    <br> <br>
    <button type="submit">Add Member</button>
</form>