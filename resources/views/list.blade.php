<h1>Members List</h1>

<table border="1"> 
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>Operations</td>
    </tr>
@foreach($members as $member)
<tr>
    <td>{{$member['id']}}</td>
    <td>{{$member['name']}}</td>
    <td>{{$member['email']}}</td>
    <td>{{$member['address']}}</td>
    <td>
        <a href={{"delete/".$member['id']}}>Delete</a>
        <a href={{"edit/".$member['id']}}>Edit</a>
    </td>
</tr>
@endforeach
</table>

{{-- <span>
    {{$members->links()}}
</span> --}}
<style>
    .w-5{
        display: none;
    }
</style>

