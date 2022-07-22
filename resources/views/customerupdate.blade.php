<h1>USER UPDATE</h1>
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<form action="/update" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$edata['UserID']}}">
    <label for="">Enter First Name</label>
    <input type="text" name = "Fname" value="{{$edata['FirstName']}}">
    {{-- <p>@error('username'){{$message}}@enderror</p> --}}

    <label for="">Enter Last Name</label>
    <input type="text" name = "Lname" value="{{$edata['LastName']}}">
    {{-- <p>@error('password'){{$message}}@enderror</p> --}}

    <label for="">Enter Address</label>
    <input type="text" name = "address" value="{{$edata['Address']}}">

    <label for="">Enter City</label>
    <input type="text" name = "city" value="{{$edata['City']}}">

    {{-- <input type="file" name="upload" id=""> <br><br> --}}
    <button type="submit">Update</button>
</form>
