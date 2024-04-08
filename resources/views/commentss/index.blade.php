
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


</html>
    <div class="container">
        <h2>Comments</h2>
        @if ($comments->isEmpty())
            <p>No comments yet.</p>
        @else
            <ul>
                @foreach ($comments as $comment)
                    <li>{{ $comment->name }} - {{ $comment->date }} - {{ $comment->comment }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    </body>
