
<!doctype html>
<html lang="en">
  <head>
    <title>Blog</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body class="antialiased bg-dark bg-gradient">
    <style>
        body {
  color: #565656;
  background: #F0F3F3;
  font-family: "Open Sans", Helvetica, Arial, sans-serif;
  font-size: 100%;
  padding: 0px;
  margin: 0px;
  min-height: 100%;
  position: relative;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  margin-top:20px;
}

.panel {
  border: none;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  -o-border-radius: 0;
  border-radius: 0;
}

.panel-body {
  padding: 15px;
}

.profile-pic {
  margin: 20px 0 0 0;
}

.profile-pic img {
  border: 7px solid #e5e6ea;
}

img {
  max-width: 100%;
}

h1, .h1 {
  font-size: 1.375em;
}

p {
  font-size: 12px;
}

.profile-info .connect {
  margin: 15px 0 5px 0;
}

.profile-info .connect button {
  margin-right: 15px;
}

.btn-success.btn-trans {
  color: #27b6af;
  background-color: transparent;
  border: solid thin #27b6af;
}

.btn-primary.btn-trans {
  color: #556b8d;
  background-color: transparent;
  border: solid thin #556b8d;
}

.social {
  margin: 0;
  padding: 0;
}

.social ul {
  margin: 0;
  padding: 5px;
}

.social ul li {
  margin: 5px;
  list-style: none outside none;
  display: inline-block;
}

.social i {
  width: 40px;
  height: 40px;
  color: #FFF;
  background-color: #909AA0;
  font-size: 22px;
  text-align: center;
  padding-top: 12px;
  border-radius: 50%;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  -o-border-radius: 50%;
  transition: all ease 0.3s;
  -moz-transition: all ease 0.3s;
  -webkit-transition: all ease 0.3s;
  -o-transition: all ease 0.3s;
  -ms-transition: all ease 0.3s;
}

.timeline-post-to textarea {
  min-height: 80px;
  margin-bottom: 15px;
}

.form-control {
  border: 2px solid #e8ebed;
  border-radius: 2px;
  box-shadow: none;
  height: 37px;
  padding: 8px 12px 9px 12px;
}
.manual
{
  background-color: white;
  color: black;
  border-radius: 20;
  width: 100%;
  height: 60px;
  border: 1px #27b6af;
  text-align: center;
  align-items: center;
  margin-top: 20px;
  justify-content: center;
}
    </style>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="relative flex items-top justify-center bg-dark-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0 text-end text-dark">
            @if (Route::has('login'))
                <div class="container">
                    @auth
                    <input type="hidden" value="{{ Auth::user()->id }}">
                        <!-- <a href="{{ url('/home') }}" class="ml-4 text-md text-gray-700 dark:text-gray-500 underline">{{ Auth::user()->name }}</a> -->
                        <ul class="navbar-nav ms-auto list-group list-group-horizontal float-end">
                        <!-- Authentication Links -->
                            <li class="nav-item dropdown list-group-item d-flex justify-content-center align-items-center"><a href="{{ url('/') }}" class="ml-4 text-lg text-gray-700 dark:text-gray-500 text-black text-bold fw-bold underline">Home</a></li>
                            <li class="nav-item dropdown list-group-item d-flex justify-content-center align-items-center"><a href="{{ url('/') }}" class="ml-4 text-lg text-gray-700 dark:text-gray-500 text-black text-bold fw-bold underline">About</a></li>
                            <li class="nav-item dropdown list-group-item ">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-black text-bold fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    @else
                        <a href="{{ route('login') }}" class="text-lg text-gray-700 dark:text-dark-500 underline">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-lg text-gray-700 dark:text-dark-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
                <div class="container mt-xl-5">
                 <div class="row">
                   <div class="col-md bg-dark"">
                     <div class="container w-50">
                       <h1 class="text-warning mt-xl-5 display-6">Hello!</h1>
                       <hr>
                       <h5 class="text-primary text-center text-break">{{ Auth::user()->name }}</h5>
                       <hr>
                       <p class="text-white text-center">“How To Start Your Blog Today?”
                       A warm welcome and lots of good wishes on becoming part of our growing team. 
                       Congratulations and on behalf of all the members. We are all happy and excited about your inputs and contribution to our company.
                       
                       </p>
                       <hr>
                       <p class="text-white text-center">We are delighted to have you among us. On behalf of all the members and the management, we would like to extend our warmest welcome and good wishes</p>
                        <hr>
                       <p class="text-white text-center">A big congratulations on your new role! On behalf of the members and supervisors, we would like to welcome you to the team. We are delighted and excited about working as a team starting from today.</p>
                     </div>
                   </div>
                    <div class="col-md border border-warning">
                       <div class="container p-5 my-5 bg-dark text-white text-center align-middle"><h1>Blog Page</h1></div>
                       <div class="container bootstrap snippets bootdey">
    <div class="row d-flex justify-content-around align-items-center">
        <div class="col-md-20">
            <section class="panel  timeline-post-to">
                <div class="panel-body">
                    <form role="form" action="/blog" method="POST">
                        @csrf
                        <textarea class="form-control" name="body" placeholder="What's on your mind?"></textarea>
                        <input type="hidden" name="user" value="{{  Auth::user()->id  }}">
                        <input type="hidden" name="author" value="{{  Auth::user()->name  }}">
                        <div class="row">
                            <div class="col-sm-6 text-right">
                                <button type="submit" class="btn btn-primary">Post</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </section> 
            
             <section class="panel  timeline-post">
             <div class="row d-flex justify-content-around align-items-center">
                    <div class="row">
                      @foreach ($posts as $Post)
                      <div class="container col-xl-15 py-1 bg-secondary rounded mt-sm-1">
                      <div class="uppercase text-blue-700 font-bold text-xs italic manual rounded">
                        <div class="row">
                          <span> {{ $Post->body }} </span>
                          <hr>
                          <p class="fs-20 fw-bold"> Author:{{ $Post->author }} Posted:{{ $Post->created_at}}</p>
                        </div>
                      </div>
                      <div class="d-flex">
                      @if( Auth::user()->id == $Post->user )
                      <div>
                      <button class="btn btn-outline-info bg-dark m-sm-1">
                        <a class="text-white text-decoration-none"
                        class="border-b-2 pb-2 border-dotted italic text-black-500"
                        href="blog/{{ $Post->id }}/edit">
                        EDIT
                      </a>
                      </button>  
                      </div>
                      @endif
                      @if( Auth::user()->id == $Post->user )
                      <div>
                        <form action="/blog/{{ $Post->id }}" method="POST">
                          @csrf
                          @method('delete')
                          <button class="btn btn-outline-info text-white bg-dark m-sm-1" type="submit">
                        DELETE
                      </button>
                        </form>
                        </div>
                        @endif
                    </div>  
                      </div>    
                      @endforeach
                    </div>
                </div>
             </section> 
        </div>       
	</div>
</div>
       </div>
           <div class="col-md bg-dark">
             <div class="container bg-info text-black text-center align-middle rounded fw-bold text-black  p-2 my-5">Friendlist</div>
             <div class="container row">
             @foreach ($posts as $Post)
             <span class="uppercase text-blue-500 font-bold text-white italic border border-dark rounded text-center mt-sm-1">
                        <hr>
                       {{ $Post->author }}
                       <hr>
                      </span>
             @endforeach
             </div>
             </div>
                   </div>
               </div>
               <div class="mt-5 p-4 bg-dark text-white text-center">
               <p>Footer</p>
</div>
</body>
</html>

