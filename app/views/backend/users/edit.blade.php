@extends('backend/layouts/default')

{{-- Page title --}}
@section('title')
User Update ::
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>
		User Update

		<div class="pull-right">
			<a href="{{ route('users') }}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> Back</a>
		</div>
	</h3>
</div>

<!-- Tabs -->
<ul class="nav nav-tabs">
	<li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
	<li><a href="#tab-permissions" data-toggle="tab">Permissions</a></li>
	<li><a href="#tab-info-char" data-toggle="tab">Thông tin nhân vật</a></li>
</ul>

<form class="form-horizontal" method="post" action="" autocomplete="off">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<!-- Tabs Content -->
	<div class="tab-content">
		<!-- General tab -->
		<div class="tab-pane active" id="tab-general">
			<!-- First Name -->
			<div class="control-group {{ $errors->has('first_name') ? 'error' : '' }}">
				<label class="control-label" for="first_name">First Name</label>
				<div class="controls">
					<input type="text" name="first_name" id="first_name" value="{{ Input::old('first_name', $user->first_name) }}" />
					{{ $errors->first('first_name', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Last Name -->
			<div class="control-group {{ $errors->has('last_name') ? 'error' : '' }}">
				<label class="control-label" for="last_name">Last Name</label>
				<div class="controls">
					<input type="text" name="last_name" id="last_name" value="{{ Input::old('last_name', $user->last_name) }}" />
					{{ $errors->first('last_name', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Email -->
			<div class="control-group {{ $errors->has('email') ? 'error' : '' }}">
				<label class="control-label" for="email">Email</label>
				<div class="controls">
					<input type="text" name="email" id="email" value="{{ Input::old('email', $user->email) }}" />
					{{ $errors->first('email', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Ảnh đại diện -->
			<div class="control-group">
				<label class="control-label" for="avatar">Ảnh đại diện</label>
				<div class="controls">
					{{ Form::text('avatar', $user->avatar) }}
					{{ $errors->first('avatar', '<span class="alert alert-danger">:message</span>') }}
				</div>
			</div>

			<!-- Sinh Nhật -->
			<div class="control-group">
				<label class="control-label" for="birthday">Sinh Nhật</label>
				<div class="controls">
					{{ Form::text('birthday', $user->birthday) }}
					{{ $errors->first('birthday', '<span class="alert alert-danger">:message</span>') }}
				</div>
			</div>

			<!-- Nơi ở -->
			<div class="control-group">
				<label class="control-label" for="country">Bạn sống ở đâu?</label>
				<div class="controls">
					{{ Form::text('country', $user->country) }}
					{{ $errors->first('country', '<span class="alert alert-danger">:message</span>') }}
				</div>
			</div>

			<!-- Facebook ID -->
			<div class="control-group">
				<label class="control-label" for="facebook">Facebook ID</label>
				<div class="controls">
					{{ Form::text('facebook', $user->facebook) }}
					{{ $errors->first('facebook', '<span class="alert alert-danger">:message</span>') }}
				</div>
			</div>

			<!-- Website URL -->
			<div class="control-group">
				<label class="control-label" for="website">Website URL</label>
				<div class="controls">
					{{ Form::text('website', $user->website) }}
					{{ $errors->first('website', '<span class="alert alert-danger">:message</span>') }}
				</div>
			</div>


			<!-- Password -->
			<div class="control-group {{ $errors->has('password') ? 'error' : '' }}">
				<label class="control-label" for="password">Password</label>
				<div class="controls">
					<input type="password" name="password" id="password" value="" />
					{{ $errors->first('password', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Password Confirm -->
			<div class="control-group {{ $errors->has('password_confirm') ? 'error' : '' }}">
				<label class="control-label" for="password_confirm">Confirm Password</label>
				<div class="controls">
					<input type="password" name="password_confirm" id="password_confirm" value="" />
					{{ $errors->first('password_confirm', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Activation Status -->
			<div class="control-group {{ $errors->has('activated') ? 'error' : '' }}">
				<label class="control-label" for="activated">User Activated</label>
				<div class="controls">
					<select{{ ($user->id === Sentry::getId() ? ' disabled="disabled"' : '') }} name="activated" id="activated">
						<option value="1"{{ ($user->isActivated() ? ' selected="selected"' : '') }}>@lang('general.yes')</option>
						<option value="0"{{ ( ! $user->isActivated() ? ' selected="selected"' : '') }}>@lang('general.no')</option>
					</select>
					{{ $errors->first('activated', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Groups -->
			<div class="control-group {{ $errors->has('groups') ? 'error' : '' }}">
				<label class="control-label" for="groups">Groups</label>
				<div class="controls">
					<select name="groups[]" id="groups[]" multiple>
						@foreach ($groups as $group)
						<option value="{{ $group->id }}"{{ (array_key_exists($group->id, $userGroups) ? ' selected="selected"' : '') }}>{{ $group->name }}</option>
						@endforeach
					</select>

					<span class="help-block">
						Chọn nhóm cho thành viên.
					</span>
				</div>
			</div>
		</div>

		<!-- Permissions tab -->
		<div class="tab-pane" id="tab-permissions">

			<div class="controls">
				<div class="control-group">

					@foreach ($permissions as $area => $permissions)
					<fieldset>
						<legend>{{ $area }}</legend>

						@foreach ($permissions as $permission)
						<div class="control-group">
							<label class="control-group">{{ $permission['label'] }}</label>

							<div class="radio inline">
								<label for="{{ $permission['permission'] }}_allow" onclick="">
									<input type="radio" value="1" id="{{ $permission['permission'] }}_allow" name="permissions[{{ $permission['permission'] }}]"{{ (array_get($userPermissions, $permission['permission']) === 1 ? ' checked="checked"' : '') }}>
									Allow
								</label>
							</div>

							<div class="radio inline">
								<label for="{{ $permission['permission'] }}_deny" onclick="">
									<input type="radio" value="-1" id="{{ $permission['permission'] }}_deny" name="permissions[{{ $permission['permission'] }}]"{{ (array_get($userPermissions, $permission['permission']) === -1 ? ' checked="checked"' : '') }}>
									Deny
								</label>
							</div>

							@if ($permission['can_inherit'])
							<div class="radio inline">
								<label for="{{ $permission['permission'] }}_inherit" onclick="">
									<input type="radio" value="0" id="{{ $permission['permission'] }}_inherit" name="permissions[{{ $permission['permission'] }}]"{{ ( ! array_get($userPermissions, $permission['permission']) ? ' checked="checked"' : '') }}>
									Inherit
								</label>
							</div>
							@endif
						</div>
						@endforeach

					</fieldset>
					@endforeach

				</div>
			</div>
		</div>
		<!-- Permissions tab -->
		<div class="tab-pane" id="tab-info-char">

			<div class="controls">
				<div class="control-group">
					<!-- Tên nhân vật -->
					<div class="control-group">
						{{ Form::label('last_name', 'Tên nhân vật', array('class' => 'awesome')); }}
						<div class="controls">
						{{ Form::text('last_name', $user->last_name) }}
						{{ $errors->first('last_name', '<span class="alert alert-danger">:message</span>') }}
						</div>
					</div>

					<!-- Tài khoản 2s -->
					<div class="control-group">
						<label class="control-label" for="uni">Tài khoản 2S</label>
						<div class="controls">
							{{ Form::text('uni', $user->uni) }}
							{{ $errors->first('uni', '<span class="alert alert-danger">:message</span>') }}
						</div>
					</div>

					<!-- Tài khoản 2s -->
					<div class="control-group">
						<label class="control-label">Cống Hiến</label>
						<div class="controls">
							{{ Form::text('p_conghien', $user->p_conghien) }}
							{{ $errors->first('p_conghien', '<span class="alert alert-danger">:message</span>') }}
						</div>
					</div>

					<!-- Tài khoản 2s -->
					<div class="control-group">
						<label class="control-label">Phồn Vinh</label>
						<div class="controls">
							{{ Form::text('p_phonvinh', $user->p_phonvinh) }}
							{{ $errors->first('p_phonvinh', '<span class="alert alert-danger">:message</span>') }}
						</div>
					</div>

					<!-- Kỹ năng - Đường đua -->
					<label>Đường đua</label>
					<div class="controls">
					{{ Form::select('status', array('lv1' => '1 Sao', 'lv2' => '2 Sao', 'lv3' => '3 Sao', 'lv4' => '4 Sao', 'lv5' => '5 Sao'), $user->skill_race); }}
					</div>
					<!-- Kỹ năng - Khiêu Vũ -->
					<label>Khiêu Vũ</label>
					<div class="controls">
					{{ Form::select('status', array('lv1' => '1 Sao', 'lv2' => '2 Sao', 'lv3' => '3 Sao', 'lv4' => '4 Sao', 'lv5' => '5 Sao'), $user->skill_dance); }}
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Form Actions -->
	<div class="control-group">
		<div class="controls">
			<a class="btn btn-link" href="{{ route('users') }}">Cancel</a>

			<button type="reset" class="btn">Reset</button>

			<button type="submit" class="btn btn-success">Update User</button>
		</div>
	</div>
</form>
@stop
