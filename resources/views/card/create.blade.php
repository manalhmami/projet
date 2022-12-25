<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('cards.store')}}" method= "POST">
        @CSRF
        <input type="text" name="nom" placeholder="enter your name">
        <button type="submit">valider</button>
    </form>
</body>
</html>