@extends('user::layouts.dashboard.user_dashboard_master')
@section('script')
<script  src="{{Module::asset('user:videojs/video.min.js')}}"></script>
<script src="{{Module::asset('user:build/js/discuss-room.js')}}"></script>
<script type="text/javascript">
(function(){
  var player = videojs('video');
    player.src({
    src: 'rtmp://35.186.157.217:1935/vod/mp4:sample.mp4',
    type: 'video/rtmp'

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
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{Module::asset('user:videojs/video-js.min.css')}}">
@stop
@section('content')
<div class="container">
  <h3 class="title"><span class="glyphicon glyphicon-facetime-video" style="top:6px;color:red;"></span> Cài đặt phòng học trực tuyến</h3>
  <div class="panel panel-default">
    <div class="panel-body">
      <!-- preview stream -->
      <div class="row">
        <div class="col-md-12">
          <div class="">
            <i class="fa fa-refresh fa-spin" style="font-size:20px;color:#4CAF50"></i><span style="color:red;"> Đang phát trực tiếp <span class="glyphicon glyphicon-question-sign"></span>
          </div>
        </div>
        <div class="col-md-8">
          <!--video -wrapper -->
          <div class="video-wrapper">
            <video
             id="video"
              class="video-js vjs-default-skin vjs-big-play-centered vjs-16-9"
              controls="true"
              preload
              poster="http://www.hdwallpaper.nu/wp-content/uploads/2015/02/keep_calm_and_sleep.jpg"
              data-setup='{"techOrder": ["flash", "html5"], "nativeControlsForTouch": true, "controlBar": { "muteToggle": false, "volumeControl": false, "timeDivider": false, "durationDisplay": false, "progressControl": true } }'
              />
          </div>
          <!--stop-->

          <!--streaming information seting-->
          <div class="room-streaming-information">
            <h6><span class="	glyphicon glyphicon-cog"></span> Thiết lập bộ mã hóa</h6>
            <div class="form-group">
              <label for="server-url">URL máy chủ</label>
              <input style="color:#34495e;" type="text" name="server-url" id="server-url" value="rtmp://35.186.157.217:1935/live" class="form-control" readonly>
            </div>
            <div class="form-group">
              <label for="key-stream-name">Tên khóa luồng</label>
              <input style="color:#34495e;" type="text" name="key-stream-name" class="form-control" value="rc56-qb42-6wgj-6v04" readonly>
              <i style="font-size:13px;">Bất kỳ ai có khóa này đều có thể phát trực tiếp trên kênh của bạn. Hãy giữ bí mật.</i>
            </div>
          </div>
          <!--stop-->

        </div>

        <div class="col-md-4">
          <!-- section for discuss -->
          <div id ="wln-discuss-room" style="border:1px solid #ddd;"></div>
          <!-- stop -->
          <hr style="width:100%;height:1px;background:#bbb;display:block;"/>
            <h6><span class="glyphicon glyphicon-info-sign"></span> Thông tin bài học</h6>
            <form class="" action="index.html" method="post">
              <!--chọn khóa hoc -->
              <div class="form-group">
                <label for="course-name">Chọn khóa học</label>
                <select class="form-control" name="course-name" id="course-name">
                  <option >Lập trình PHP căn bản</option>
                  <option >Wordpress nâng cao</option>
                </select>
              </div>
              <!--stop-->

              <!-- chọn bài học dựa trên khóa học đã chọn -->
              <div class="form-group">
                <label for="lesson-name">Chọn bài học.</label>
                <select class="form-control" name="lesson-name" id="lesson-name">
                  <option value="">Bài 1: Giới thiệu về ngôn ngữ PHP</option>
                  <option value="">Bài 2: Cài đặt môi trường lập trình với XAMPP</option>
                  <option value="">Bài 3: Bootstrap và giao diện responsive</option>
                </select>
              </div>
              <!--stop-->

              <!-- Giới thiệu ngắn gọn về bài học -->
              <div class="form-group">
                <label for="lesson-short-desc">Giới thiệu ngắn gọn về bài học.</label>
                <textarea style="height:250px;" name="lesson-short-desc" class="form-control" id="lesson-short-desc" placeholder="Hãy mô tả ngắn gọn về bài học hôm nay của bạn cho học viên biết. Tối đa 200 từ."></textarea>
              </div>
              <!--stop-->

              <div class="pull-right">
                <button type="button" name="button" class="btn btn-success">Cập nhật</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
