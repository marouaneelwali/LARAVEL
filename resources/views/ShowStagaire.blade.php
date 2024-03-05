<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>

    </style>
</head>
<body>

<div class="container mt-5">
    <form method='post' action='/livre/add'>
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type='text' class="form-control" name='name' id="name" />
        </div>
        <div class="form-group">
            <label for="filier">Filière:</label>
            <input type='text' class="form-control" name='filier' id="filier" />
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type='text' class="form-control" name='email' id="email" />
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type='text' class="form-control" name='password' id="password" />
        </div>
        <div class="form-group">
            <label for="note">Note:</label>
            <input type='text' class="form-control" name='note' id="note" />
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

    <table class="table mt-5">
        <thead>
            <tr>
                <th>Name</th>
                <th>Filière</th>
                <th>Email</th>
                <th>Password</th>
                <th>Note</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stagaires as $stg)
            <tr>
                <td>{{ $stg->name }}</td>
                <td>{{ $stg->filier }}</td>
                <td>{{ $stg->email }}</td>
                <td>{{ $stg->password }}</td>
                <td>{{ $stg->note }}</td>
                <td>
                    <a href='/livre/{{ $stg->id }}/edit' class="btn btn-sm btn-primary">Modifier</a>
                    <form method="POST" action="/livre/{{ $stg->id }}/delete" id="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirmDelete()">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this record?');
    }
</script>

</body>
</html>
