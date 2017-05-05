@extends('master')
@section('style')
<link rel="stylesheet" href="/css/app.css">
<link href="//vjs.zencdn.net/5.11/video-js.min.css" rel="stylesheet">
@stop
@section('script')
<script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
<script type="text/javascript" src="js/app.js"> </script>
<script src="//vjs.zencdn.net/5.11/video.min.js"></script>
<script type="text/javascript" src="{{Module::asset('livestream:js/components/Chat.js')}}"></script>

<script type="text/javascript">
var socketId = Echo.socketId();
Echo.channel('test-channel')
	.listen('Module\Livestream\Events\ChatEvent', (e) => {
			document.getElementsByTagName("body")[0].append('Hello World') ;
	});
</script>
@stop
@section('content')
<div class="container-fluid">
	<div class="col-md-9">
		<video
			id="video"
			class="video-js vjs-default-skin vjs-big-play-centered vjs-16-9"
			controls
			preload="auto"
			poster="https://static-cdn.jtvnw.net/ttv-boxart/League%20of%20Legends-272x380.jpg"
			data-setup='
				{"techOrder": ["flash", "html5", "other supported tech"],nativeControlsForTouch": true, "controlBar": { "muteToggle": false, "volumeControl": false, "timeDivider": true, "durationDisplay": true, "progressControl": true } }'
			>
			<source src="rtmp://35.186.157.217:1935/live/myStrem" type='rtmp/mp4'/>
		</video>
	</div>
	<div class="col-md-3">
		<div id="wln-chat-room"></div>
	</div>
</div>
@stop
