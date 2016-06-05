<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
  <h1 align="center">Home Page</h1>

  <link rel="stylesheet" type="text/css" href=" {{ url('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
  
  
  <div class="container" align="left">   
  <a href="{{ url('posts/create') }}"><h2>Create Page</h2></a>



         

  @foreach ($posts as $post)

  			<a href="{{ url('posts',$post->id)}}"><h3>{{$post->title}}</h3></a>

  			<p>

  				{{ $post->content }}
  			</p>
       <p>
       <div class="form-group">

  			<form action="{{ action('BlogController@edit',$post->id) }}">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="EDIT">
          <button class="btn btn-primary">Edit</button>
        </form>
        </div>

  		
       
         <div class="form-group">

        <form action="{{ action('BlogController@destroy',$post->id)}}" method="POST">
         {{ csrf_field() }}
         <input type="hidden" name="_method" value="DELETE">
         <button class="btn btn-primary">Delete</button>
         </form>
         </div> 



  			<hr>

       

  	@endforeach
    </div> 


</body>
</html>