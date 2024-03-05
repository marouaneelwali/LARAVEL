<!-- edit.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Value</title>
</head>
<body>

<form method='post' action='/livre/{{ $stagiaire->id }}/update'>
    @csrf
    @method('PUT')
    Name : 
    <input type='text' id='name' name='name' value='{{ $stagiaire->name }}'><br>
    Filier : 
    <input type='text' id='filier' name='filier' value='{{ $stagiaire->filier }}'><br>
    Email : 
    <input type='text' id='email' name='email' value='{{ $stagiaire->email }}'><br>
    Password : 
    <input type='text' id='Password' name='Password' value='{{ $stagiaire->password }}'><br>
    Note : 
    <input type='text' id='note' name='note' value='{{ $stagiaire->note }}'><br>
    <input type='submit' value='Update'><br>
</form>

</body>
</html>
