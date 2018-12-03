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
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    <body>
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{url('/')}}">BLOG TEST</a>
        </div>
        <ul class="nav navbar-nav">
          <li ><a href="#">Home</a></li>
          <li class="active"><a href="{{route('post.index')}}">POSTS</a></li>
          <li><a href="{{route('category.index') }}">CATEGORIES</a></li>
        </ul>
      
      </nav>
      <div class="text-center bar">
        <a href="#"><h3>Create page</h3></a>
        <a href="#"><h3>Edit page</h3></a>

      </div>
      
      <div class="row">
        <div class="col-md-4">
          <div class="sidebar">
            <div class="navbar">
              <h3>Post Actions</h3>
              <ul class="sidebar-nav">
                <li>
                    <a href="{{route('post.create')}}" onclick="openForm()">Add</a>
                </li>
                <li>
                    <a href="{{route('post.index')}}">Edit</a>
                </li>
                <li>
                    <a href="{{route('post.index')}}">Delete</a>
                </li>
              </ul>
            </div>  
          </div>
        </div>
        <div class="container col-md-8">
          
          @yield('content')
          

        </div>  
      </div>
      <div class="chat-popup" id="myForm">

        @yield('formPost')
<!-- 

        {{ Form::open(array('url' => 'Posts'),['class'=>'form-container']) }} 
          <h1>Add POST</h1>

          {{ Form::textarea('post','', array('placeholder'=>'Enter your post'))}}
          <br>

          {{  Form::submit('Post',['class'=>'btn btn-primary'])}} 

          <a href="" onclick="closeForm()">{{  Form::button('Cancel',['class'=>'btn cancel'])}}</a>          

        {{ Form::close() }}

 -->

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
