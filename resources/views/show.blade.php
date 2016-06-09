<!DOCTYPE html>
<html>
<head>
	<title>Show</title>
	<link rel="stylesheet" type="text/css" href=" {{ url('bootstrap/css/bootstrap.min.css') }}">

</head>
<body>
   <div class="container">

	<h3>{{ $post->title }}</h3>

	<p>

		{{ $post->content }}

	</p>
	</div>

</body>
</html>