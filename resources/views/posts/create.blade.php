<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Post</title>
</head>
<body>
    <h1>Create a New Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf 

        <div style="margin-bottom: 10px;">
            <label for="title">Post Title:</label><br>
            <input type="text" id="title" name="title" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="text">Post Content:</label><br>
            <textarea id="text" name="text" rows="5" required></textarea>
        </div>

        <button type="submit">Save Post</button>
    </form>
    
    <br>
    <a href="{{ route('posts.index') }}">Back to all posts</a>
</body>
</html>