@extends('frontend/layouts/default')

{{-- Page title --}}
@section('title')
	Trang Chủ - @parent
@stop

{{-- Page content --}}
@section('content')
<div id="main" class="container">
	<article class="background-triangles">
		<div class="star">
			<h1>8</h1>
			<h2>69696</h2>
			<h3>69</h3>
		</div>
	</article>
	<article class="home-hot-member" style="padding: 0;">
		<h2>Thành Viên Nổi Bật</h2>
		<div id="foo2">
			<div class="col-md-4" style="width: 100%">
				<a href="#">
					<span>Khánh Linh</span>
					<img alt="Khánh Linh" src="./assets/img/thanhvien/hot/hot-member-1.jpg">
				</a>
			</div>
			<div class="col-md-4">
				<a href="#">
					<span>Kym</span>
					<img alt="Kym" src="./assets/img/thanhvien/hot/hot-member-2.jpg">
				</a>
			</div>
			<div class="col-md-4">
				<a href="#">
					<span>Diệu Linh</span>
					<img alt="Diệu Linh" src="./assets/img/thanhvien/hot/hot-member-3.jpg">
				</a>
			</div>
			<div class="col-md-4">
				<a href="#">
					<span>Út Duyên</span>
					<img alt="Út Duyên" src="./assets/img/thanhvien/hot/hot-member-4.jpg">
				</a>
			</div>
			<div class="col-md-4">
				<a href="#">
					<span>Thu Ngân</span>
					<img alt="Thu Ngân" src="./assets/img/thanhvien/hot/hot-member-5.jpg">
				</a>
			</div>
			<div class="col-md-4">
				<a href="#">
					<span>Luz</span>
					<img alt="Luz" src="./assets/img/thanhvien/hot/hot-member-6.jpg">
				</a>
			</div>
			<div class="col-md-4">
				<a href="#">
					<span>Nam Osin</span>
					<img alt="Nam Osin" src="./assets/img/thanhvien/hot/hot-member-7.jpg">
				</a>
			</div>
			<div class="col-md-4">
				<a href="#">
					<span>Puzz</span>
					<img alt="Puzz" src="./assets/img/thanhvien/hot/hot-member-8.jpg">
				</a>
			</div>
			<div class="col-md-4">
				<a href="#">
					<span>Lộc Nguyễn</span>
					<img alt="Lộc Nguyễn" src="./assets/img/thanhvien/hot/hot-member-9.jpg">
				</a>
			</div>
		</div>
	</article> <!-- / hot-member -->
	<article style="padding: 0;">
		<div class="quote-ghost">
			<h2 class="black">Tài năng để chiến thắng cuộc chơi, nhưng tinh thần đồng đội và sự thông minh mới giành được chức vô địch.</h2>
		</div>
	</article>
	<article class="home-ghost-star">
		<h2>Ghost's Star</h2>
		<!-- Nav tabs -->
		<ul class="nav nav-tabs2">
			<li class="active"><a href="#star-1" data-toggle="tab">Top Cống Hiến</a></li>
			<li><a href="#star-2" data-toggle="tab">Top Phồn Vinh</a></li>
		</ul>
		<div class="clearfix hidden-lg"></div>
		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane fade in active" id="star-1">
				<ul class="row list-unstyled">
				@foreach(Group::find(2)->getTopCongHien() as $user)
					<li class="col-md-3">
						<h4>{{{ $user->last_name }}}</h4>
						<p>{{{ $user->p_conghien }}} <sup>Cống Hiến</sup></p>
					</li>
				@endforeach
				</ul>
			</div>
			<div class="tab-pane fade" id="star-2">
				<ul class="row list-unstyled">
					@foreach(Group::find(3)->getTopPhonVinh() as $user)
					<li class="col-md-3">
						<h4>{{{ $user->last_name }}}</h4>
						<p>{{{ $user->p_phonvinh }}} <sup>Cống Hiến</sup></p>
					</li>
				@endforeach
				</ul>
			</div>
		</div><!-- / Tab Ghost's Star -->
	</article>
	<article style="border-top: none; padding: 0; margin-bottom: 150px;">
		<svg class="separator" preserveAspectRatio="none" viewBox="0 0 100 102" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<path class="separator-triangle-2" d="M0 0 L50 100 L100 0 Z" />
		</svg>
		<div class="home-ghost-blog">
			<ul class="list-unstyled">
			@foreach ($posts as $post)
				<li class="col-md-4">
					<h4><a href="{{ $post->url() }}">{{ $post->title }}</a></h4>
					<p class="pull-left"><i class="fa fa-user"></i> Bởi <span class="muted">{{ $post->author->first_name }}</span></p>
				</li>
			@endforeach
			</ul>
		</div>
	</article>
</div>
@stop
