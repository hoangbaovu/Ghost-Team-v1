@extends('frontend/layouts/default')

{{-- Page content --}}
@section('content')
<div class="ghost-member-header">

</div>
<div class="row" style="padding-top: 23px;">
	<div class="col-md-12">
		<div class="col-md-3 account-panel">
			<ul class="nav nav-list text-left">
				<li{{ Request::is('account/profile') ? ' class="active"' : '' }}><a href="{{ URL::route('profile') }}"><i class="fa fa-user"></i> Thông tin cá nhân</a></li>
				<li{{ Request::is('account/change-password') ? ' class="active"' : '' }}><a href="{{ URL::route('change-password') }}"><i class="fa fa-keyboard-o"></i> Đổi mật khẩu</a></li>
				<li{{ Request::is('account/change-email') ? ' class="active"' : '' }}><a href="{{ URL::route('change-email') }}"><i class="fa fa-envelope"></i> Đổi Email</a></li>
			</ul>
		</div>
		<div class="col-md-9">
			@yield('account-content')
		</div>
	</div>
</div>
@stop
