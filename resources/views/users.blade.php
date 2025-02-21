<div>
<h1>Users list</h1>
<!-- {{print_r($users)}} -->

<table border="1" style="border-collapse: collapse;">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
    @foreach($users as $user)

    <tr >
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
       
    </tr>

    @endforeach
</table>
</div>
