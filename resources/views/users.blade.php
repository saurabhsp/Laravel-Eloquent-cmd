<div>
    <h1>Users List</h1>
    <table border="1" style="border-collapse: collapse;">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>City</th>
            <th>PinCode</th>
        </tr>

        @foreach($data as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->address->city }}</td>
                <td>{{ $user->address->zipcode }}</td>
            </tr>
        @endforeach
    </table>
</div>
