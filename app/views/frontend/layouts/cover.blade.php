@if(Request::is('/'))
<div class="container">
	<div id="intro">
		<div class="row">
			<div class="intro-welcome col-md-5">
				<h1 class="purple">The Ghost</h1>
				<h2 class="red">Power In The World!</h2>
				<!-- <p class="azure">Nơi Hội Tụ Những Bóng Ma 2S</p>
				<p class="azure">Nơi Không Tồn Tại Dấu Chân Member!</p> -->
			</div>
			<div class="intro-btn .hidden-xs">
				<!-- Button trigger modal -->
				<a data-toggle="modal" href="#intro-video" class="btn btn-primary"><i class="fa fa-youtube-play"></i> Xem Intro</a>
				<!-- Modal -->
				<div class="modal fade" id="intro-video" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div class="video-container">
								<embed src="http://www.youtube.com/v/lGMG8OnPlDE" wmode="Opaque" />
							</div>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			</div><!-- /.intro-btn -->
		</div><!-- /#intro -->
	</div><!-- /.row -->
</div><!-- /.container -->
@elseif(Request::is('thanhvien/1'))
<div class="show-member-cover-video">
	<div class="overlay overlay-pattern"></div>
	<div id="video-container">
		<iframe src="//www.youtube.com/embed/{{ Sentry::getUser()->youtube }}?loop=1&amp;wmode=transparent&amp;showinfo=0&amp;ps=docs&amp;iv_load_policy=3&amp;vq=large&amp;modestbranding=1&amp;nologo=1&amp;autoplay=1" class="fillWidth" frameborder="0"></iframe>
	</div><!-- /video-container -->
</div><!-- /show-member-cover-video -->
@elseif(Request::is('thanhvien/*'))
<div class="show-member-cover-video">
	<div class="overlay overlay-pattern"></div>
	<div id="video-container">
		<video id="video1" class="fillWidth" autoplay muted loop>
		<source src="{{URL::to('assets/videos')}}/1.mp4" type="video/mp4"/>
		Trình duyệt của bạn không hỗ trợ HTML5, vui lòng nâng cấp trình duyệt.
		</video>
	</div><!-- /video-container -->
</div><!-- /show-member-cover-video -->
@else

@endif