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
            <td><a href={{"delete/" . $customers['UserID']}}>Delete</a></td>
            <td><a href={{"edit/" . $customers['UserID']}}>Edit</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

{{-- {{ $cdata->links() }} --}}
