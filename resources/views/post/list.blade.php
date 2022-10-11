<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session()->has('success'))
        <h1>{{ session('succss') }}</h1>
    @endif
    <ul>
        @foreach($posts as $post)
            <li>
                Titel : {{  $post->title }}
                <br>
                Author : {{ $post->author->name}}
                <br>
                Date : {{ $post->created_at}}
            </li>
            <hr>
        @endforeach
    </ul>
</body>
</html>