<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts Laravel</title>
</head>
<body>
    
    <header>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('about')}}">About</a>
        <a href="{{route('contacts')}}">Contatti</a>
    </header>

    <h1>{{$contactsText}}</h1>


</body>
</html>