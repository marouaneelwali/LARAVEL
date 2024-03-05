<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>add livre</h1>

    <form action='' method='post'>
         @csrf
         ID : <br />
         <input type='text' name='id' /><br/>   
         Titre : <br />
         <input type='text' name='titre' /><br/>   
         Prix : <br />
         <input type='text' name='prix' /><br/>
         <input type="submit" value='envoyer'/>
        </form>
</body>
</html>