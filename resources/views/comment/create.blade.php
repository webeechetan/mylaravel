<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('comment.store') }}" method="post">
        @csrf
        Title : <input type="text" name="title">
        @error('title')
            <span>{{ $message }}</span>
        @enderror
        <button type="submit">Create Comment</button>
    </form>
</body>
</html>