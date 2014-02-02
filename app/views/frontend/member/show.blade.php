{{-- Page title --}}
@section('title')
{{{ $user->first_name }}} - @parent
@stop

@section('content')
<div class="show-member-cover-video">
	<div class="overlay overlay-pattern"></div>
	<div id="video-container">
		<iframe src="//www.youtube.com/embed/{{{ $user->youtube }}}?loop=1&amp;wmode=transparent&amp;showinfo=0&amp;ps=docs&amp;iv_load_policy=3&amp;vq=large&amp;modestbranding=1&amp;nologo=1&amp;autoplay=1" class="fillWidth" frameborder="0"></iframe>
	</div><!-- /video-container -->
</div><!-- /show-member-cover-video -->

<!-- <div class="show-member-cover-video">
	<div class="overlay overlay-pattern"></div>
	<div id="video-container">
		<video id="video1" class="fillWidth" autoplay muted loop>
		<source src="{{URL::to('assets/videos')}}/1.mp4" type="video/mp4"/>
		Trình duyệt của bạn không hỗ trợ HTML5, vui lòng nâng cấp trình duyệt.
		</video>
	</div>
</div>
 -->

<div id="main" class="container">
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
</div>
@stop