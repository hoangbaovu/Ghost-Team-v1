@extends('frontend/layouts/default')

{{-- Page title --}}
@section('title')
{{ $post->title }} ::
@parent
@stop

{{-- Update the Meta Title --}}
@section('meta_title')

@parent
@stop

{{-- Update the Meta Description --}}
@section('meta_description')

@parent
@stop

{{-- Update the Meta Keywords --}}
@section('meta_keywords')

@parent
@stop

{{-- Page content --}}
@section('content')
<div id="main" class="container">
	<article class="col-md-8 text-left">
		<header>
			<h2><a href="{{ $post->url() }}">{{ $post->title }}</a></h2>
			<p class="entry-meta">
				<i class="fa fa-user"></i> Bởi <span class="muted">{{ $post->author->first_name }}</span>
				<span class="divider">/</span> <i class="fa fa-calendar"></i> {{ $post->created_at->diffForHumans() }}
				<span class="divider">/</span> <i class="fa fa-comments"></i> <a href="{{ $post->url() }}#comments">{{ $post->comments()->count() }} Bình luận</a>
			</p>
		</header>
		
		<section>
			<p>{{ $post->content() }}</p>
		</section>
		
		<footer>
			<span class="badge badge-info" title="{{ $post->created_at }}">Đăng lúc {{ $post->created_at->diffForHumans() }}</span>
		</footer>
		<hr />

		<a id="comments"></a>

		<h4><i class="fa fa-comments"></i> {{ $comments->count() }} Bình Luận</h4>

		@if ($comments->count())
		@foreach ($comments as $comment)
			<div class="row">
				<div class="comments">
					<div class="col-md-2">
						<img class="thumbnail" src="{{ $comment->author->gravatar() }}" alt="">
					</div>
					<div class="col-md-10">
						<div class="view-comment">
							<span class="muted"><i class="fa fa-user"></i> {{ $comment->author->fullName() }}</span>
							&bull;
							<span title="{{ $comment->created_at }}">{{ $comment->created_at->diffForHumans() }}</span>

							<p>{{ $comment->content() }}</p>
						</div>
					</div>
				</div>
			</div>
			<hr />
		@endforeach
		@else
		<hr />
		@endif

		@if ( ! Sentry::check())
		Bạn cần đăng nhập để bình luận<br /><br />
		Nhấn <a href="{{ route('signin') }}">vào đây</a> để đăng nhập.
		@else
		<h4>Gửi bình luận</h4>
		<form method="post" action="{{ route('view-post', $post->slug) }}">
			<!-- CSRF Token -->
			<input type="hidden" name="_token" value="{{ csrf_token() }}" />

			<!-- Comment -->
			<div class="control-group{{ $errors->first('comment', ' error') }}">
				<textarea class="input-block-level" rows="4" name="comment" id="comment">{{ Input::old('comment') }}</textarea>
				{{ $errors->first('comment', '<span class="help-inline">:message</span>') }}
			</div>

			<!-- Form actions -->
			<div class="control-group">
				<div class="controls">
					<input type="submit" class="btn" id="submit" value="Submit" />
				</div>
			</div>
		</form>
		@endif
	</article>
	<aside class="col-md-4">
		<div class="widget visible-lg">
			<!-- <div class="widget-title">
				<h2>Facebook</h2>
			</div> -->
			<div class="widget-content">
				<iframe src="//www.facebook.com/plugins/likebox.php?href=http://www.facebook.com/FacebookDevelopers&amp;width&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="background: #fff; margin-left: -196px; border:none; overflow:hidden; height:213px; width: 391px; z-index: 9; " allowTransparency="true"></iframe>
			</div>
		</div> <!-- / Widget Facebook-->
	</aside>
</div>
@stop
