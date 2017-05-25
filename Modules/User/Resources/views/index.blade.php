@extends('user::layouts.master')
@section('script')
<!-- Videojs -->
<script src="//vjs.zencdn.net/5.11/video.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.5.3/videojs-contrib-hls.min.js"></script>
<script type="text/javascript">
(function(){
  var player = videojs('video');
  player.src({
    src: 'rtmp://35.186.157.217:1935/vod/mp4:sample.mp4',
    type: 'video/rtmp',
    withCredentials: true
  });
  player.on('pause', function() {
    this.bigPlayButton.show();

    // Now the issue is that we need to hide it again if we start playing
    // So every time we do this, we can create a one-time listener for play events.
    player.one('play', function() {
      this.bigPlayButton.hide();
      this.load();
      this.off('play');
    });
  });
  player.play();
})();
</script>
@stop
@section('content')
<!-- Stream preview -->
<div class="wln-stream-preview">
  <div>
		<div class="container" style="background:rgba(27,27,27,0.7);">

				<div class="col-md-8">
					<div>

            <video
             id="video"
              class="video-js vjs-default-skin vjs-big-play-centered vjs-16-9"
              controls ="false"
              preload="none"
              poster="http://www.hdwallpaper.nu/wp-content/uploads/2015/02/keep_calm_and_sleep.jpg"
              data-setup='{"techOrder": ["flash", "html5"], "nativeControlsForTouch": true, "controlBar": { "muteToggle": false, "volumeControl": false, "timeDivider": false, "durationDisplay": false, "progressControl": true } }'
              />

					</div>
				</div>

	      <div class="col-md-4 box-2">
          <div class="class-ownner-info">
            <div class="teacher-img">
              <img src="modules/user/css/avatar_01.png" alt="">
            </div>
            <div class="info">
              <h4>Phạm Như Ý</h4>
              <strong>Đang phát: </strong><span>Phương trình vi phân cấp II</span>
            </div>
          </div>

          <div class="lesson-title">
            <h3>
              Đạo hàm riêng cấp II
            </h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              In varius ut nisl vitae vestibulum. Phasellus vel eros a
              erat efficitur rutrum at et nisl. Donec sed leo suscipit,
              lobortis leo in, sodales nibh
              erat efficitur rutrum at et nisl. Donec sed leo suscipit,
              lobortis leo in, sodales nibh...
            </p>
          </div>

          <div class="require-action" style="margin-top:15px;">
            <a href="#" class="btn btn-success">Học thử</a>
            <a href="#" class="btn btn-danger">Đăng kí khóa học</a>
          </div>
				</div>

		</div>
	</div>



</div>
<!-- End stream preview -->

<!-- Current class online -->
<div class="container" style="margin-top:15px;">

  <section class="section">
    <h4 class="section-title"><strong>Lớp học đang diễn ra<strong></h4>
    <div>
			<div class="row">
          @for($i=0;$i<8;$i++)
					<div class="col-md-3">
						<figure class="figure_video">
              <a href="#">
                <div class="img-polaroid">
                  <span class="bagg">Đang trực tiếp</span>
                  <img src="https://static.unica.vn/uploads/images/Thaoptt/fbmkt_m.jpg" alt="">
                </div>
              </a>

              <div class="lesson-title">
                <a href="#">Phương trình tuyến tính</a>
              </div>
              <div class="lesson-teacher">
                <a href="#">Thầy: Nguyễn Mạnh Cường</a>
              </div>
              <div class="total-student">
                30 người đang học
              </div>
						</figure>
					</div>
          @endfor

			</div>
		</div>
  </section>

  <section class="section">
    <h4 class="section-title"><strong>Lớp học sắp bắt đầu</strong></h4>
    <div>
			<div class="row">
          @for($i=0;$i<8;$i++)
					<div class="col-md-3">
						<figure class="figure_video">
              <a href="#">
                <div class="img-polaroid">
                  <span class="bagg">Đang trực tiếp</span>
                  <img src="https://staticedm.r.worldssl.net/uploads/images/courses/ts-le-tham-duong-lanh-dao-la-mot-nghe-phai-hoc.png" alt="">
                </div>
              </a>

              <div class="lesson-title">
                <a href="#">Phương trình tuyến tính</a>
              </div>
              <div class="lesson-teacher">
                <a href="#">Thầy: Nguyễn Mạnh Cường</a>
              </div>
              <div class="total-student">
                30 người đang học
              </div>
						</figure>
					</div>
          @endfor

			</div>
		</div>
  </section>

</div>
<!-- end current class online -->
@stop
