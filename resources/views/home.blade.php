<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Laravel</title>
</head>
<body>
    <main>

        <header>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('about')}}">About</a>
            <a href="{{route('contacts')}}">Contatti</a>
        </header>


        <h1>{{$title}}</h1>

        <h2>Linguaggi e argomenti trattati:</h2>

        <ul>
            @foreach ($subjects as $subject)
            <li>{{$subject}}</li>
            @endforeach
        </ul>

    </main>
</body>
</html>