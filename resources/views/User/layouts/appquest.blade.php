<!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html>
<head>
	@include('User.layouts.head')
</head>
<body class="page-body" data-url="http://neon.dev">
	<div class="page-container horizontal-menu">
		@include('User.layouts.headerquest')
		<div class="main-content">
		@section('main-content')
			@show
		@include('User.layouts.footer')
	</div>
	</div>
	
</body>
</html>