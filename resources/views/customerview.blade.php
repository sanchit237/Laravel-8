<table>
    <thead>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>City</th>
    </thead>
    <tbody>
    @foreach($cdata as $customers)
        <tr>
            <td>{{$customers['UserID']}}</td>
            <td>{{$customers['FirstName']}}</td>
            <td>{{$customers['LastName']}}</td>
            <td>{{$customers['Address']}}</td>
            <td>{{$customers['City']}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
