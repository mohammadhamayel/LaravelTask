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
	<!-- @if(\Session::has('success'))
      <div class="alert alert-success">
        <button class="close" data-dismiss="alert">X</button>
        <p>{{\Session::get('success') }}</p>
      </div>
      <img src="/images/{{Session::get('path') }} " width="300" />
    @endif  -->

@endsection

@section('formPic')
	<form action="{{url('/category')}}" method="post" enctype="multipart/form-data" class="">
		{{csrf_field()}}
	    <h1>Upload Picture</h1>
	    <label>select file for upload</label> 
        <input type="file" name="select_file"> 
          
        <textarea placeholder="Type message.." name="description" > </textarea>
        <a href="{{route('category.index')}}"><input type="submit" name="upload" class="btn btn-primary" value="Upload"></a>
	    <a href="{{route('category.index')}}"> <button type="button" class="btn cancel"   onclick="closeForm()">Close</button></a>
    </form>	




@endsection