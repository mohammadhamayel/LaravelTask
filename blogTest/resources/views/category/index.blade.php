@extends('categories')

@section('content')
	@if(\Session::has('success'))
      <div class="alert alert-success">
        <button class="close" data-dismiss="alert">X</button>
        <p>{{\Session::get('success') }}</p>
      </div>
    @endif 
	
	@foreach($users as $user)
		
		
		<figure>
			<figcaption><textarea disabled="true">{{$user['description']}}</textarea></figcaption>
			<img src="images/{{$user['name']}}" alt="{{$user['name']}}" width="250" height="200px" class="img-rounded">
			<br>
			<a href="{{action('uploadFileController@edit',$user['id'])}} "><button class="btn-warning">Edit</button> </a>

			<form method="post" class="delete_form" action="{{action('uploadFileController@destroy',$user['id'])}} ">
	          {{csrf_field()}}
	          <input type="hidden" name="_method" value="DELETE">
	          <button type="submit" class="btn-danger">Delete</button>

	        </form>

		    
		</figure>
	@endforeach
	<script>
	  $(document).ready(function(){
	    $('.delete_form').on('submit', function(){
	      if(confirm("Delete Posts")){
	        return true;
	      }else{
	        return false;
	      }
	    });
	  });
	</script>

@endsection
