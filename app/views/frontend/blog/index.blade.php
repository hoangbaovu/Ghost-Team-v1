@extends('frontend/layouts/default')

{{-- Page content --}}
@section('content')
<div id="main" class="container">
	@foreach ($posts as $post)
	<article class="col-md-12 text-left">
		<!-- Post Title -->
		<header>
			<h2><a href="{{ $post->url() }}">{{ $post->title }}</a></h2>
			<p class="entry-meta">
				<i class="fa fa-user"></i> Bởi <span class="muted">{{ $post->author->first_name }}</span>
				<span class="divider">/</span> <i class="fa fa-calendar"></i> {{ $post->created_at->diffForHumans() }}
				<span class="divider">/</span> <i class="fa fa-comments"></i> <a href="{{ $post->url() }}#comments">{{ $post->comments()->count() }} Bình luận</a>
			</p>
		</header>

		<!-- Post Content -->
		<section class="entry-content">
			<!-- <div class="col-md-2">
				<a href="{{ $post->url() }}" class="thumbnail"><img src="{{ $post->thumbnail() }}" alt=""></a>
			</div> -->
			<p>
				{{ strip_tags(Str::limit($post->content, 300)) }}
			</p>
		</section>

		<!-- Post Footer -->
		<footer>
			<p><a href="{{ $post->url() }}">Xem thêm...</a></p>
		</footer>
	</article>
	@endforeach
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12">
			{{ $posts->links() }}
		</div>
	</div>
</div>
@stop
