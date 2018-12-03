<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/blog.css">

    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="navbar-header">
              <a class="navbar-brand" href="{{url('/')}}">BLOG TEST</a>
            </div>
            <ul class="nav navbar-nav">
              <li ><a href="#">Home</a></li>
              <li ><a href="{{route('post.index')}}">POSTS</a></li>
              <li class="active"><a href="{{route('category.index') }}">CATEGORIES</a></li>
            </ul>
      
        </nav>
        <div class="text-center bar">
          <a href=""><h3>Create Page</h3></a>
          <a href=""><h3>Edit Page</h3></a>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                  <div class="navbar">
                    <h3>Category Actions</h3>
                    <ul class="sidebar-nav">
                      <li>
                          <a href="{{route('category.create')}}" onclick="openForm()">Add</a>
                      </li>
                      <li>
                          <a href="{{route('category.index') }}">Edit</a>
                      </li>
                      <li>
                          <a href="{{route('category.index') }}">Delete</a>
                      </li>
                    </ul>
                  </div>  
                </div>
            </div>
            
            <div class="col-md-9">

              
                <!-- @if(count($errors) > 0)
                  <div class="alert alert-danger col-md-4">
                    <ul>
                      @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                      @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif

                @if(\Session::has('success'))
                  <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">X</button>
                    <p>{{\Session::get('success') }}</p>
                  </div>
                  <img src="/images/{{Session::get('path') }} " width="300" />
                @endif -->

                @yield('content')
                
            </div>
        </div>    
         <div class="chat-popup" id="myForm">

            @yield('formPic')
           
          </div>
      <script type="text/javascript">
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
    </body>
</html>
