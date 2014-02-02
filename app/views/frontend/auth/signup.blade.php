@extends('frontend/layouts/default')

{{-- Page title --}}
@section('title')
Account Sign up ::
@parent
@stop

{{-- Page content --}}
@section('content')
<div id="main" class="container">
	<article class="col-md-4 col-md-offset-4">
		<div class="page-header">
			<h3>Sign up</h3>
		</div>
		<div class="row">
			<form method="post" action="{{ route('signup') }}" class="form-horizontal" autocomplete="off">
				<!-- CSRF Token -->
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />

				<!-- First Name -->
				<div class="control-group{{ $errors->first('first_name', ' error') }}">
				<label class="control-label" for="first_name">Bạn tên gì?</label>
					<div class="controls">
						<input type="text" name="first_name" id="first_name" value="{{ Input::old('first_name') }}" />
						{{ $errors->first('first_name', '<span class="help-block">:message</span>') }}
					</div>
				</div>

				<!-- Last Name -->
				<div class="control-group{{ $errors->first('last_name', ' error') }}">
					<label class="control-label" for="last_name">Tên Nhân Vật</label>
					<div class="controls">
						<input type="text" name="last_name" id="last_name" value="{{ Input::old('last_name') }}" />
						{{ $errors->first('last_name', '<span class="help-block">:message</span>') }}
					</div>
				</div>

				<!-- Email -->
				<div class="control-group{{ $errors->first('email', ' error') }}">
					<label class="control-label" for="email">Email</label>
					<div class="controls">
						<input type="text" name="email" id="email" value="{{ Input::old('email') }}" />
						{{ $errors->first('email', '<span class="help-block">:message</span>') }}
					</div>
				</div>

				<!-- Email Confirm -->
				<div class="control-group{{ $errors->first('email_confirm', ' error') }}">
					<label class="control-label" for="email_confirm">Nhập lại Email</label>
					<div class="controls">
						<input type="text" name="email_confirm" id="email_confirm" value="{{ Input::old('email_confirm') }}" />
						{{ $errors->first('email_confirm', '<span class="help-block">:message</span>') }}
					</div>
				</div>

				<!-- Password -->
				<div class="control-group{{ $errors->first('password', ' error') }}">
					<label class="control-label" for="password">Mật Khẩu</label>
					<div class="controls">
						<input type="password" name="password" id="password" value="" />
						{{ $errors->first('password', '<span class="help-block">:message</span>') }}
					</div>
				</div>

				<!-- Password Confirm -->
				<div class="control-group{{ $errors->first('password_confirm', ' error') }}">
					<label class="control-label" for="password_confirm">Nhập Lại Mật Khẩu</label>
					<div class="controls">
						<input type="password" name="password_confirm" id="password_confirm" value="" />
						{{ $errors->first('password_confirm', '<span class="help-block">:message</span>') }}
					</div>
				</div>

				<hr>

				<!-- Form actions -->
				<div class="control-group">
					<div class="controls">
						<a class="btn" href="{{ route('home') }}">Hủy</a>

						<button type="submit" class="btn">Đăng Kí</button>
					</div>
				</div>
			</form>
		</div>
	</article>
</div>
@stop
