@extends('livestream::layouts.master')
@section('style')
<link href="//vjs.zencdn.net/5.11/video-js.min.css" rel="stylesheet">
<style type="text/css">
		.vjs-paused.vjs-has-started .vjs-big-play-button {
	  display: block;

</style>
@stop
@section('script')
<script src="//vjs.zencdn.net/5.11/video.min.js"></script>
<script type="text/javascript" src="{{Module::asset('livestream:js/livestream.js')}}"></script>
@stop
@section('content')
<div class="container">
	<div class="col-md-9">
	    <video
			id="video"
			class="video-js vjs-default-skin vjs-big-play-centered"
			controls
			preload="none"
			width="800"
			height="300"
			poster="https://static-cdn.jtvnw.net/ttv-boxart/League%20of%20Legends-272x380.jpg"
			data-setup='{"techOrder": ["flash", "html5", "other supported tech"], "nativeControlsForTouch": true, "controlBar": { "muteToggle": false, "volumeControl": false, "timeDivider": true, "durationDisplay": true, "progressControl": true } }'
		>
			<source src="rtmp://35.186.157.217:1935/myStream" type='rtmp/mp4'/>
		</video>
	</div>
	<div class="col-md-3">

	</div>
</div>
</div>
@stop
