<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List Livre : </h1>
<table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Actions</th>
    </tr>
    @foreach($books as $key => $book)
    <tr>
        <td>{{ $book['title'] }}</td>
        <td>{{ $book['author'] }}</td>
        <td>
            <a href="/livre/{{ $key }}/edit">Edit</a>
            <form action="/livre/{{ $key }}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

    <h2>Add Livre</h2>
    <form method="post" action="/livre">
        @csrf
        <label for="title">Title:</label><br> 
        <input type="text" id="title" name="title"><br> 
        <label for="author">Author:</label><br> 
        <input type="text" id="author" name="author"><br> 
        <input type="submit" value="Submit">
    </form>
</body>
</html>
