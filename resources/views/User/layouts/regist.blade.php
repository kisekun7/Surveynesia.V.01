<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="images/favicons.png">

	<title>Surveynesia | Register</title>

	<link rel="stylesheet" href="{{ asset('User/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css')}}">
	<link rel="stylesheet" href="{{ asset('User/assets/css/font-icons/entypo/css/entypo.css')}}">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="{{ asset('User/assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('User/assets/css/neon-core.css')}}">
	<link rel="stylesheet" href="{{ asset('User/assets/css/neon-theme.css')}}">
	<link rel="stylesheet" href="{{ asset('User/assets/css/neon-forms.css')}}">
	<link rel="stylesheet" href="{{ asset('User/assets/css/custom.css')}}">

	<script src="{{ asset('User/assets/js/jquery-1.11.3.min.js')}}"></script>

	<!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body login-page login-form-fall" data-url="http://neon.dev">


<!-- This is needed when you send requests via Ajax -->
<script type="text/javascript">
var baseurl = '';
</script>
	
<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="index.html" class="logo">
				<img src="{{ asset('User/assets/images/logos.png')}}" width="120" alt="" />
			</a>
			
			@yield('content')
			
		</div>
		
	</div>
	
</div>`


	<!-- Bottom scripts (common) -->
	<script src="{{ asset('User/assets/js/gsap/TweenMax.min.js')}}"></script>
	<script src="{{ asset('User/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js')}}"></script>
	<script src="{{ asset('User/assets/js/bootstrap.js')}}"></script>
	<script src="{{ asset('User/assets/js/joinable.js')}}"></script>
	<script src="{{ asset('User/assets/js/resizeable.js')}}"></script>
	<script src="{{ asset('User/assets/js/neon-api.js')}}"></script>
	<script src="{{ asset('User/assets/js/jquery.validate.min.js')}}"></script>
	<script src="{{ asset('User/assets/js/neon-register.js')}}"></script>
	<script src="{{ asset('User/assets/js/jquery.inputmask.bundle.js')}}"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="{{ asset('User/assets/js/neon-custom.js')}}"></script>


	<!-- Demo Settings -->
	<script src="{{ asset('User/assets/js/neon-demo.js')}}"></script>

</body>
</html>