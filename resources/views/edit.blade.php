<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<h1 align="center">Edit</h1>

	<link rel="stylesheet" type="text/css" href=" {{ url('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
      <div class="container">

		<form action="{{ action('BlogController@update', $post->id) }}" method="POST">

		

		<input type="hidden" name="_method" value="PATCH">

​

		{{ csrf_field() }}

​

		<label>Title</label>
		<div class="form-group">

		<input type="text" name="title" value="{{ $post->title }}" class="form-control">
		</div>
​

		<label>Content</label>
		<div class="form-group">

		<textarea name="content" class="form-control" rows="10">{{ $post->content }}</textarea>

		</div>

​

		<button class="btn btn-primary">Edit</button>
		</form>
		</div>

</body>
</html>