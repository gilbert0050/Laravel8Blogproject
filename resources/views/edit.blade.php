<!doctype html>
<html lang="en">
  <head>
    <title>Edit Post</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  </head>
  <body  class="antialiased bg-dark bg-gradient">
  <div class="container">
  <div class="container col-lg-12 p-3 my-5 bg-dark w-25 text-white text-center display-6 mt-lg-5"><h1>Update Post</h1></div>
  <div class="container col-lg-12 p-3 my-5 bg-dark w-25 text-white text-center bg-gradient rounded border border-warning">
  <div class="d-flex flex-column justify-content-around align-items-center">

<form action="/blog/{{ $posts->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
<input 
   class="block shadow-5xl mb-10 p-2 w-100 italic placeholder-black-400 text-align-center text-center rounded" 
   type="text" 
   name="update" 
   value="{{ $posts->body }}">
   <input 
   type="hidden" 
   name="user" 
   value="{{ $posts->user }}">
   <input 
   type="hidden" 
   name="author" 
   value="{{ $posts->author }}">
    <button type="submit" class="btn btn-outline-info text-white bg-dark m-sm-1">update</button>
</form>
</div>
  </div>
  <div class="container col-lg-12 p-3 my-5 bg-dark w-25 text-white text-center">
  <hr>
  <hr>
  <div class="container col-lg-12 p-3 my-5 bg-dark text-white text-center"><p></p></div>
  <div class="container col-lg-12 p-3 my-5 bg-dark text-white text-center"><p>Bootstrap Icons v1.6.0 adds over 30 new icons, adds official Composer support, includes a new .scss stylesheet for the icon font, plus some other enhancements and bug fixes. Keep reading to see what’s new!</p></div>
  </div>
  
   </div>
  <div class="mt-5 p-4 bg-dark text-white text-center">
               <p>
Blog
Facebook
Twitter
LinkedIn
Instagram
site design / logo © 2022 Stack Exchange Inc; user contributions licensed under cc by-sa. rev 2022.2.10.41427</p>
</div>
  
  
  
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>