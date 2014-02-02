@extends('frontend/layouts/account')

{{-- Page title --}}
@section('title')
Đổi Email | @parent
@stop

{{-- Account page content --}}
@section('account-content')
<div id="main" class="container">
	<article class="text-left" style="border:none;">
		<header>
			<h4>Thay đổi Email</h4>
		</header>

		<form method="post" action="" class="form-horizontal" autocomplete="off">
			<!-- CSRF Token -->
			<input type="hidden" name="_token" value="{{ csrf_token() }}" />

			<!-- Form type -->
			<input type="hidden" name="formType" value="change-email" />

			<!-- New Email -->
			<div class="control-group{{ $errors->first('email', ' error') }}">
				<label class="control-label" for="email">Email mới</label>
				<div class="controls">
					<input type="text" name="email" id="email" value="" />
					{{ $errors->first('email', '<span class="help-block">:message</span>') }}
				</div>
			</div>

			<!-- Confirm New Email -->
			<div class="control-group{{ $errors->first('email_confirm', ' error') }}">
				<label class="control-label" for="email_confirm">Nhập lại Email mới</label>
				<div class="controls">
					<input type="text" name="email_confirm" id="email_confirm" value="" />
					{{ $errors->first('email_confirm', '<span class="help-block">:message</span>') }}
				</div>
			</div>

			<!-- Current Password -->
			<div class="control-group{{ $errors->first('current_password', ' error') }}">
				<label class="control-label" for="current_password">Nhập mật khẩu</label>
				<div class="controls">
					<input type="password" name="current_password" id="current_password" value="" />
					{{ $errors->first('current_password', '<span class="help-block">:message</span>') }}
				</div>
			</div>

			<!-- Form actions -->
			<button type="submit" class="submit">Cập nhật mật khẩu</button>
		</form>
	</article>
</div>
@stop
