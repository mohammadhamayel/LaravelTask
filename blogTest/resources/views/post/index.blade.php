@extends('Posts')

@section('content')
@if(\Session::has('success'))
	<div class="alert alert-success">
		<p>{{\Session::get('success') }}</p>
	</div>
@endif
<div class="row">
	<table class="col-md-12">

     <tbody >
     	<?php $count =1 ?>
        @foreach ($posts as $post)
          <tr style="display: inline-block;" class="col-md-4">
          	@if($count%4 ==0)
	          	<br>
	          	<td >{{$post['description']}}<br><br> 
	          		<a href="{{action('postController@edit',$post['id'])}} "><button class="btn-warning">Edit</button> </a>
                
                <form method="post" class="delete_form" action="{{action('postController@destroy',$post['id'])}} ">
                  {{csrf_field()}}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn-danger">Delete</button>

                </form>
	          	</td>
          	@else

             	<td >{{$post['description']}}<br><br> 
          			<a href="{{action('postController@edit',$post['id'])}} "><button class="btn-warning">Edit</button> </a>

                <form method="post" class="delete_form" action="{{action('postController@destroy',$post['id'])}}">
                  {{csrf_field()}}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn-danger">Delete</button>

                </form>
      			</td>

			@endif    
          	<?php $count++; ?>
      	
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
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