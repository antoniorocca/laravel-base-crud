<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="/css/app.css">
 </head>
 <body>
     <h1>Edit {{$post->title}}</h1>
     <form action="{{route('posts.update', ['post'=> $post->id])}}" method="post">
         @csrf
         @method('PUT')
         <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
         </div>
         <div class="form-group">
              <label for="body">Body</label>
              <textarea name="body" id="body" class="form-control" rows="3">{{$post->body}}</textarea>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
     </form>
 </body>
</html>