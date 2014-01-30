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
										<a href="{{ Request::is('account/profile') }}"><i class="fa fa-user"></i>Thông tin cá nhân</a>
									</li>
									<li>
										<a href="{{ Request::is('account/change-password') }}"><i class="fa fa-keyboard-o"></i>Đổi Mật Khẩu</a>
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
	@include('frontend.layouts.cover')
	<div id="main" class="container">
		@yield('content')
	</div> <!--/ container -->
	@include('frontend.layouts.footer')
</body>
</html>
