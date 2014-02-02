@extends('frontend/layouts/default')

{{-- Page title --}}
@section('title')
Thành Viên | @parent
@stop
{{-- Page content --}}
@section('content')
<div id="main" class="container">
	<div class="ghost-member-header">

	</div>
	<section id="ghost-member-index">
		<div class="col-md-12">
			<ul class="row list-unstyled">
				@foreach($users as $user)
				<li class="col-md-3 masonry-box">
					<a href="{{ URL::to('thanhvien')}}/{{ $user->id }} ">
						<div class="show-member-home">
							<img alt="{{ $user->last_name }}" src="{{ $user->avatar }}">
							<div class="caption">
								<h5>{{ $user->last_name }}</h5>
								<p><span>Uni:</span> {{ $user->uni }}</p>
							</div>
						</div>
					</a>
				</li>
				@endforeach
				<li class="col-md-3 masonry-box" style="margin: 20px 0;">
					<a href="{{ URL::to('thanhvien') }}/{{ $user->id }}">
						<div class="show-member-home">
							<img alt="Gia Nhập" src="{{ URL::to('assets/img') }}/logo-v1.png">
							<div class="caption">
								<h5>Có thể là bạn?</h5>
								<p>Gia Nhập</p>
							</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</section>
</div>
@stop
