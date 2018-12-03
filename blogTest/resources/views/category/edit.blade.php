@extends('categories')

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
	<div id="POSTS"> <!-- here for display posts from psots database -->
		
	</div>

@endsection('content')
@section('formPic')
	<form action="{{action('uploadFileController@update' , $id)}}" method="post" enctype="multipart/form-data" class="form-container">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="PATCH" />
	    <h1>Upload Picture</h1>
	    <label>select file for upload</label> 
        <input type="file" name="select_file"> 
          
        <textarea placeholder="Type message.." name="description" style="margin-bottom: 0;">{{$user['description']}} </textarea>
        <button type="button" class="btn btn-primary" onclick="displayPosts()">choose post</button>
        <img src="/images/{{$user['name']}}" alt="{{$user['name']}}" width="250" height="200px" class="img-rounded">
        <input type="submit" name="upload" class="btn btn-primary" value="Upload">
	    <a href="{{route('category.index')}}"><button type="button" class="btn cancel" onclick="closeForm()">Close</button></a>
    </form>	




@endsection
<script type="text/javascript">
	function displayPosts(){
		document.getElementById('POSTS').style.display="block";
	}

</script>