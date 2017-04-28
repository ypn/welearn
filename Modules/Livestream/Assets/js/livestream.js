(function(){
	console.log('play video');
	var player = videojs('video');
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