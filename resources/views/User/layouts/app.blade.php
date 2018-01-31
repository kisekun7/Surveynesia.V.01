<!DOCTYPE html>
<html>
<head>
	@include('User.layouts.head')
</head>
<body class="page-body  page-fade" data-url="http://neon.dev">
	<div class="page-container">
		@include('User.layouts.header')
		<div class="main-content">
		@section('main-content')
			@show
		@include('User.layouts.footer')
	</div>
	</div>
	
</body>
</html>