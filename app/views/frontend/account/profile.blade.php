@extends('frontend/layouts/account')

{{-- Page title --}}
@section('title')
	Thông tin cá nhân -
	@parent
@stop

{{-- Account page content --}}
@section('account-content')
<article class="text-left" style="border:none;">
	{{Form::open(array('url'=>URL::to('account/profile'),'files'=>true,'class'=>'form-vertical','autocomplete'=>"off"))}}

		<!-- Khai bao nay da bao gom ca csrf -->
		<!-- files = true de nhan thong tin upload -->

		<!-- Nav tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#profile-1" data-toggle="tab"><i class="fa fa-user"></i> Thông tin cá nhân</a></li>
			<li><a href="#profile-2" data-toggle="tab"><i class="fa fa-male"></i> Thông tin nhân vật</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane fade in active" id="profile-1">

				<label>Tải Lên Avatar</label>
				{{ Form::file('avatar') }}

				<!-- Trạng Thái -->
				<label>Trạng Thái</label>
				{{ Form::textarea('status', $user->status) }}
				{{ $errors->first('status', '<span class="alert alert-danger">:message</span>') }}

				<!-- Tên -->
				<label>Tên của bạn</label>
				{{ Form::text('first_name',  $user->first_name,  array('placeholder'=>'Tên của bạn')) }}
				{{ $errors->first('first_name', '<span class="alert alert-danger">:message</span>') }}

				<!-- Sinh Nhật -->
				<label>Sinh Nhật</label>
				{{ Form::text('birthday', $user->birthday) }}
				{{ $errors->first('birthday', '<span class="alert alert-danger">:message</span>') }}

				<!-- Nơi ở -->
				<label>Bạn sống ở đâu?</label>
				{{ Form::text('country', $user->country) }}
				{{ $errors->first('country', '<span class="alert alert-danger">:message</span>') }}

				<!-- Facebook ID -->
				<label>Facebook ID</label>
				{{ Form::text('facebook', $user->facebook) }}
				{{ $errors->first('facebook', '<span class="alert alert-danger">:message</span>') }}

				<!-- Website URL -->
				<label>Website URL</label>
				{{ Form::text('website', $user->website) }}
				{{ $errors->first('website', '<span class="alert alert-danger">:message</span>') }}

				<!-- Gravatar Email -->
				<!-- {{ Form::label('gravatar', 'Gravatar Email <small>(Private)</small>', array('class' => 'awesome', 'placeholder' => 'Gravatar Email')); }} -->
				<label class="control-label" for="gravatar">Gravatar Email <small>(Private)</small></label>
				{{ Form::text('gravatar', $user->gravatar) }}
				{{ $errors->first('gravatar', '<span class="alert alert-danger">:message</span>') }}

				<p>
					<img src="http://secure.gravatar.com/avatar/{{ md5(strtolower(trim($user->gravatar))) }}" width="30" height="30" />
					<a href="http://gravatar.com">Thay đổi ảnh đại diện của bạn tại Gravatar.com</a>.
				</p>

			</div> <!-- /Tab 1 -->
			<div class="tab-pane fade" id="profile-2">
				<!-- Tên nhân vật -->
				{{ Form::label('last_name', 'Tên nhân vật', array('class' => 'awesome')); }}
				{{ Form::text('last_name', $user->last_name) }}
				{{ $errors->first('last_name', '<span class="alert alert-danger">:message</span>') }}

				<!-- Tài khoản 2s -->
				<label>Tài khoản 2S</label>
				{{ Form::text('uni', $user->uni) }}
				{{ $errors->first('uni', '<span class="alert alert-danger">:message</span>') }}

				<!-- Kỹ năng - Đường đua -->
				<label>Đường đua</label>
				{{ Form::select('status', array('lv1' => '1 Sao', 'lv2' => '2 Sao', 'lv3' => '3 Sao', 'lv4' => '4 Sao', 'lv5' => '5 Sao'), $user->skill_race); }}
				<!-- Kỹ năng - Khiêu Vũ -->
				<label>Khiêu Vũ</label>
				{{ Form::select('status', array('lv1' => '1 Sao', 'lv2' => '2 Sao', 'lv3' => '3 Sao', 'lv4' => '4 Sao', 'lv5' => '5 Sao'), $user->skill_dance); }}
			</div> <!-- /Tab 2 -->
		</div>

		<!-- Form actions -->
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="submit">Cập nhật</button>
			</div>
		</div>
	</form>
</article>
@stop
