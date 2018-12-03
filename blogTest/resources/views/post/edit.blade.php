@extends('Posts')

@section('content')

	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>

		</div>

	@endif

@endsection('content')

@section('formPost')

	<form action="{{action('postController@update' , $id)}}" method="post" class="form-container">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="PATCH" />

		<h1>Edit POST</h1>		

	    <textarea placeholder=" " name="description" > {{$post->description}}   </textarea>

	    <button type="submit" class="btn btn-primary">Edit</button>
	    <a href="{{route('post.index')}} "> <button type="button" class="btn cancel"   onclick="closeForm()">Close</button></a>
    </form>	

@endsection