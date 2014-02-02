@include('frontend.layouts.head')

<body>
	@if(Request::is('thanhvien*', 'account*', 'auth*'))
	@elseif(Request::is('*'))
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	@else
	@endif
	<header>
		<div class="navbar">
			<div class="container">
				<div class="navbar-header">
					<button data-target=".bs-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
					<ul class="navbar-left list-unstyled">
						<li class="navbar-text-menu {{ Request::is('/') ? 'selected' : '' }} pull-left">
							<a href="/" title="Trang Chủ">Trang Chủ</a>
						</li>

						<li class="navbar-text-menu {{ Request::is('thanhvien*') ? 'selected' : '' }} pull-left">
							<a href="{{ URL::to('thanhvien') }}" title="Thành Viên">Thành Viên</a>
						</li>

						<li class="navbar-text-menu {{ Request::is('blog*') ? 'selected' : '' }} pull-left">
							<a href="{{ URL::to('blog') }}" title="Bài Viết">Bài Viết</a>
						</li>
						
					</ul><!--/ Navbar Right-->

					<ul class="navbar-left list-unstyled pull-right">
						<li class="navbar-text-menu {{ Request::is('star') ? 'selected' : '' }} pull-left">
							<a href="{{ URL::to('star') }}" title="Bảng Vàng">Bảng Vàng</a>
						</li>

						<li class="navbar-text-menu pull-left">
							<a href="{{ URL::to('/') }}" title="Thư Viện">Thư Viện</a>
						</li>

						<li class="navbar-text-menu {{ Request::is('account*', 'auth*') ? 'selected' : '' }} pull-left">
							@if(Sentry::check())
							<div class="clearfix"></div>
							<div class="dropdown">
								<a data-toggle="dropdown" href="#">Tài Khoản</a>
								<ul class="dropdown-menu" role="menu">
									<li>
										<a href="{{ URL::to('account/profile') }}"><i class="fa fa-user"></i>Thông tin cá nhân</a>
									</li>
									<li>
										<a href="{{ URL::to('account/change-password') }}"><i class="fa fa-keyboard-o"></i>Đổi Mật Khẩu</a>
									</li>
									<li>
										<a href="{{ route('logout') }}"><i class="fa fa-power-off"></i>Đăng Xuất</a>
									</li>
								</ul>
							</div>
							@else
							<a data-toggle="modal" data-target="#myModal">Đăng Nhập</a>
							<!-- Modal -->
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title" id="myModalLabel" style="color: #222;">Đăng Nhập</h4>
										</div>
										{{ Form::open(array('url'=>URL::to('auth/signin') )) }}
										<div class="modal-body">
											<p>Địa chỉ Email: {{ Form::text('email') }}</p>
											{{ $errors->first('email', '<span class="help-block">:message</span>') }}
											<p>Mật Khẩu: {{Form::password('password')}}</p>			
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
											<button type="submit" class="btn btn-primary">Đăng Nhập</button>
										</div>
										{{ Form::close() }}
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
							@endif
						</li>
					</ul><!--/ Navbar Left-->
				</nav>
			</div> <!--/ Container-->
		</div>
		<div class="navbar-menu-logo"></div>
		<div class="menu-nav"></div>
	</header>
	@if(Request::is('/'))
	<div class="container">
		<div id="intro">
			<div class="row">
				<div class="intro-welcome col-md-5">
					<h1 class="purple">The Ghost</h1>
					<h2 class="red">Power In The World!</h2>
					<!-- <p class="azure">Nơi Hội Tụ Những Bóng Ma 2S</p>
					<p class="azure">Nơi Không Tồn Tại Dấu Chân Member!</p> -->
				</div>
				<div class="intro-btn .hidden-xs">
					<!-- Button trigger modal -->
					<a data-toggle="modal" href="#intro-video" class="btn btn-primary"><i class="fa fa-youtube-play"></i> Xem Intro</a>
					<!-- Modal -->
					<div class="modal fade" id="intro-video" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
								<div class="video-container">
									<embed src="http://www.youtube.com/v/lGMG8OnPlDE" wmode="Opaque" />
								</div>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
				</div><!-- /.intro-btn -->
			</div><!-- /#intro -->
		</div><!-- /.row -->
	</div><!-- /.container -->
	@endif
	@yield('content')
	@include('frontend.layouts.footer')
</body>
</html>
