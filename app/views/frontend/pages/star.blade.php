@extends('frontend/layouts/default')

{{-- Page title --}}
@section('title')
Star |
@parent
@stop

{{-- Page content --}}
@section('content')
<div id="main" class="container">
	<div class="ghost-star-header">
		<div class="text-info">
			<p>@lang('pages/star.text-info')</p>
		</div>
	</div>
	<div class="ghost-star-content text-left">
		<div class="ghost-star-box">
			<h1><span>01.</span> Góp Gió</h1>
			<ul class="list-unstyled">
			@foreach(Group::find(3)->getAllUsers() as $user)
				<li class="col-md-6">
					<a href="#">
						<img class="col-md-2 avatar" src="{{URL::to($user->avatar)}}" alt="">
					</a>
					<div class="col-md-8">
						<h2>{{{$user->first_name}}}</h2>
						<p><span>Uni: </span>{{{$user->uni}}}</p>
						<p class="rank">
							<a href="#" data-toggle="tooltip" title="Huy chương Góp Gió">
								<img src="http://cungbaobinh.com/static/image/common/medal1.gif" alt="">
							</a>
						</p>
					</div>
				</li>
			@endforeach
			</ul>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-6">
				<div class="ghost-star-box">
					<h1><span>02.</span> Cống Hiến</h1>
				</div>
				<div id="scroll-1" class="ghost-star-ranks">
					<ul class="list-unstyled">
						@foreach(Group::find(2)->getAllCongHien() as $user)
						<li>
							<a class="user" href="#" title="Neo Vũ">
								<span class="avatar">
									<img style="height: 80px; width: 80px" src="{{URL::to($user->avatar)}}" alt="">
								</span>
								<span class="name">{{{ $user->last_name }}}</span>
								<span class="pull-right">{{{ $user->p_conghien }}}</span>
							</a>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="ghost-star-box">
					<h1><span>03.</span> Phồn Vinh</h1>
				</div>
				<div id="scroll-2" class="ghost-star-ranks">
					<ul class="list-unstyled">
						@foreach(Group::find(3)->getAllPhonVinh() as $user)
						<li>
							<a class="user" href="#" title="Neo Vũ">
								<span class="avatar">
									<img style="height: 80px; width: 80px" src="{{URL::to($user->avatar)}}" alt="">
								</span>
								<span class="name">{{{ $user->last_name }}}</span>
								<span class="pull-right">{{{ $user->p_phonvinh }}}</span>
							</a>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@stop