<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .comment .comment {
            margin-left: 2em;
        }
    </style>
</head>
<body>
    <h2>{{ $video->title }}</h2>

        @include('partials.comment', ['comments' => $video->comments])

</body>
</html>
