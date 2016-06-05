<!DOCTYPE html>
<html>
<head>
	<title>Create</title>

	<h1 align="center">Create </h1>

<link rel="stylesheet" type="text/css" href=" {{ url('bootstrap/css/bootstrap.min.css') }}">

</head>
<body>
<div class="container">
<form action="{{ action('BlogController@store') }}" method="POST">

{{ csrf_field() }}
	
​	<label>Title</label>
	<div class="form-group">

	<input type="text" name="title" placeholder="title" class="form-control">

	</div>

​

	<label>Content</label>
	<div class="form-group">

	<textarea name="content" placeholder="content" class="form-control" rows="10"></textarea>
	</div>
	​

	<button type"button" class="btn btn-primary">Create</button>
	</form>
	
	</div>

</body>
</html>