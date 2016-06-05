<!DOCTYPE html>
<html>
<head>
	<title>Show</title>
	<link rel="stylesheet" type="text/css" href=" {{ url('bootstrap/css/bootstrap.min.css') }}">

</head>
<body>
   <div class="container">

	<h2>{{ $post->title }}</h2>

	<p>

		{{ $post->content }}

	</p>
	</div>

</body>
</html>