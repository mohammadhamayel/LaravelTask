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

@endsection

@section('formPost')
	<form action="{{url('post')}}" method="post" class="form-container">
		{{csrf_field()}}
	    <h1>Add POST</h1>

	    <textarea placeholder="Type message.." name="description" >     </textarea>

	    <button type="submit" class="btn">Send</button>
	    <a href="{{route('post.index')}} "> <button type="button" class="btn cancel"   onclick="closeForm()">Close</button></a>
    </form>	


@endsection