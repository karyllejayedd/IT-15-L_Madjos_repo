<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
</head>
<body>
    <h1>My Blog Posts</h1>
    
    <a href="{{ route('posts.create') }}">Create New Post</a>
    <hr>

    @forelse ($posts as $post)
        <div style="margin-bottom: 20px; padding: 10px; border: 1px solid #ccc;">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->text }}</p>
            <small>Posted on: {{ $post->created_at->format('M d, Y') }}</small>
        </div>
    @empty
        <p>No posts available right now. Be the first to create one!</p>
    @endforelse

</body>
</html>