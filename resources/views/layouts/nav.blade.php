<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="./../../css/app.css" rel="stylesheet">
</head>
<body>
    <nav>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="/client">index</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/add">add</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('client.show',1)}}">archie</a>
        </li>
        </li>
    </ul>
    </nav>
    @yield('continue')
</body>
</html>