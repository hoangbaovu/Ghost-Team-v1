@extends('frontend/layouts/default')

{{-- Page title --}}
@section('title')
Đăng nhập - @parent
@stop

{{-- Page content --}}
@section('content')
<article>
	<div class="col-md-12">
		<header>
			<h3>Đăng Nhập</h3>
		</header>
		<div class="row">
			<form class="col-md-4 col-md-offset-4" method="post" action="{{ route('signin') }}">
				<!-- CSRF Token -->
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />

				<!-- Email -->
				<div class="control-group{{ $errors->first('email', ' error') }}">
					<label class="control-label" for="email">Email</label>
					<div class="controls">
						<input type="text" name="email" id="email" value="{{ Input::old('email') }}" />
						{{ $errors->first('email', '<span class="help-block">:message</span>') }}
					</div>
				</div>

				<!-- Password -->
				<div class="control-group{{ $errors->first('password', ' error') }}">
					<label class="control-label" for="password">Mật khẩu</label>
					<div class="controls">
						<input type="password" name="password" id="password" value="" />
						{{ $errors->first('password', '<span class="help-block">:message</span>') }}
					</div>
				</div>

				<!-- Remember me -->
				<div class="control-group">
					<div class="controls">
					<label class="checkbox"></label>
					<input type="checkbox" name="remember-me" id="remember-me" value="1" />Nhớ đăng nhập
					</div>
				</div>

				<hr>

				<!-- Form actions -->
				<div class="control-group">
					<div class="controls">
						<a class="btn btn-default" href="{{ route('home') }}">Hủy</a>

						<button type="submit" class="btn btn-primary">Đăng nhập</button>

						<a href="{{ route('forgot-password') }}" class="btn btn-link">Quên mật khẩu?</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</article>
@stop
