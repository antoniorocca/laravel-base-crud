<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <h1>All Posts:</h1>
     <a href="{{ route('posts.create')}}">Create a new post</a>
     @foreach ($posts as $post)
         <h2>{{$post->title}}</h2>
         <p>{{$post->body}}</p>
     @endforeach
 </body>
</html>