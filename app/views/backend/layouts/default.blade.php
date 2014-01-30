<!DOCTYPE html>
<html lang="vi">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
				Administration
			@show
		</title>
		<meta name="keywords" content="your, awesome, keywords, here" />
		<meta name="author" content="Jon Doe" />
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS
		================================================== -->
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

		<style>
				body {
					padding: 60px 0;
				}
		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}">
		<link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}">
		<link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">
	</head>

	<body>
		<!-- Container -->
		<div class="container">
			<!-- Navbar -->
			<header role="banner" class="navbar navbar-inverse navbar-fixed-top bs-docs-nav">
			  <div class="container">
			    <div class="navbar-header">
			      <button data-target=".bs-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="/admin">Neo Blog</a>
			    </div>
			    <nav role="navigation" class="collapse navbar-collapse bs-navbar-collapse">
			      <ul class="nav navbar-nav">
			        <li{{ (Request::is('admin') ? ' class="active"' : '') }}><a href="{{ URL::to('admin') }}"><i class="icon-home icon-white"></i> Home</a></li>
					<li{{ (Request::is('admin/blogs*') ? ' class="active"' : '') }}><a href="{{ URL::to('admin/blogs') }}"><i class="icon-list-alt icon-white"></i> Blogs</a></li>
					<li class="dropdown{{ (Request::is('admin/users*|admin/groups*') ? ' active' : '') }}">
						<a class="dropdown-toggle" data-toggle="dropdown" href="{{ URL::to('admin/users') }}">
							<i class="icon-user icon-white"></i> Users <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li{{ (Request::is('admin/users*') ? ' class="active"' : '') }}><a href="{{ URL::to('admin/users') }}"><i class="icon-user"></i> Users</a></li>
							<li{{ (Request::is('admin/groups*') ? ' class="active"' : '') }}><a href="{{ URL::to('admin/groups') }}"><i class="icon-user"></i> Groups</a></li>
						</ul>
					</li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="{{ URL::to('/') }}">View Homepage</a></li>
					<li class="divider-vertical"></li>
					<li><a href="{{ route('logout') }}">Logout</a></li>
			      </ul>
			    </nav>
			  </div>
			</header>

			<!-- Notifications -->
			@include('frontend/notifications')

			<!-- Content -->
			@yield('content')
		</div>

		<!-- Javascripts
		================================================== -->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script>
				$('.nav-collapse').collapse({})
		</script>

		<script src="{{URL::to('assets/vendor/ckeditor')}}/ckeditor.js"></script>

		<script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>
	</body>
</html>
