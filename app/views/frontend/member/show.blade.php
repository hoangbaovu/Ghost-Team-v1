{{-- Page title --}}
@section('title')
{{{ $user->first_name }}} - @parent
@stop
@section('content')
	<div class="row">
		<div class="show-member-skill-dance pull-left">
			<span style="padding-right: 50px;"><i class="fa fa-music"></i> Khiêu vũ</span>
			<span class="rating">
				<span class="star {{{ $user->skill_dance }}}"></span>
			</span>
		</div>
		<div class="show-member-skill-race pull-left">
			<span style="padding-right: 21px;"><i class="fa fa-tachometer"></i> Đường đua</span>
			<span class="rating">
				<span class="star {{{ $user->skill_race }}}"></span>
			</span>
		</div>
		<div class="show-member-avatar">
			<img src="{{{ URL::to($user->avatar) }}}" alt="" />
		</div>
	</div>
	<section id="show-member">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h2>{{{ $user->first_name }}}</h2>
					<p class="status">{{{ $user->status }}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 show-member-profile text-left">
						<h3>Thông Tin Cá Nhân</h3>
						<p>Nhân Vật: {{{ $user->last_name }}}</p>
						<p>Tài khoản 2S: {{{ $user->uni }}}</p>
						<p>Sống tại: {{{ $user->country }}}</p>
						<p>Sinh Nhật: {{{ $user->birthday }}}</p>
				</div>
				<div class="col-md-8 text-left">
					<h3>Bài Đăng</h3>
					<p>{{{ $user->email }}}</p>	
				</div>
			</div>
		</div>
	</section>
@stop