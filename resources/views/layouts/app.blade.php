<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <ul>
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('comics.index') }}">Comics</a>
            </li>
            <li>
                <a href="{{ route('comics.create') }}">Crea il tuo nuovo fumetto</a>
            </li>
            
        </ul>
    </header>
    @yield('main_content')
</body>
</html>