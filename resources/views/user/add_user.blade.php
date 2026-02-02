@php
    $urlProxy = '/proxy/9999/'
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
</head>
<body>
    <h6>Add User</h6>
    {{-- <form action="/submit/user" method="POST"> --}}
    <form action="{{ $urlProxy }}submit/user" method="POST">
        @csrf  
        <input name="name"/>
        <input name="gender"/>
        <input name="age" type="number"/>
        <input name="dob" type="date"/>
        <button type="submit">Submit user</button>
    </form>
    
</body>
</html>