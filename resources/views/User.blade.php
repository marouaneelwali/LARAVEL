<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
       <?php
       
       ?>
    </h1>
        <form action='' method='post'>
         @csrf
         NB1 : <br />
         <input type='text' name='nb1' /><br />   
         NB2 : <br />
         <input type='text' name='nb2' /><br />   
         NB3 : <br />
         <input type='text' name='nb3' /><br />   
         NB4 : <br />
         <input type='text' name='nb4' /><br />   
       
         <input type="submit" value='envoyer' />
        </form>
        nb1 {{$nb1}} <br />
    nb2 {{$nb2}}<br />
    nb3 {{$nb3}}<br />
    nb4 {{$nb4}}<br />
    code {{$ses1}}<br />
    code {{$ses2}}<br />
    code {{$ses3}}<br />
    code {{$ses4}}<br />
    nb err {{$nbe}}<br />
</body>
</html>