<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Summernote Laravel</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
</head>
<body>
    <div class="container">
        <h2>Summernote laravel</h2>
        <form method="POST" action="{{route('summernoteMessage')}}">
            {{ csrf_field() }}
            <textarea name="messageInput" class="summernote"></textarea>
            <br>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    
    </script>
</body>
</html>