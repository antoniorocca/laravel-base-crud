<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
         #title {
             height: 20px;
             width: 800px;
           }
           #body {
             height: 300px;
             width: 800px;
           }
     </style>
 </head>
 <body>
     <form action="#" method="post">
         <div class="form-group">
              <label for="title">Title</label><br>
              <input type="text" name="title" id="title" class="form-control">
         </div>
         <div class="form-group">
              <label for="body">Body</label><br>
              <textarea name="body" id="body" class="form-control" rows="3"></textarea><br>
              <button type="submit">Submit</button>
         </div> 
     </form>
 </body>
</html>