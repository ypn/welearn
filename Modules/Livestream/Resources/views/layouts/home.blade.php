<!DOCTYPE html>
<html lang="en">
		<head>
		<title>Videos</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />

{{Html::style('css/font-awesome.min.css')}}
<link href="//vjs.zencdn.net/5.11/video-js.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{Module::asset('livestream:css/style.css')}}">
<style type="text/css">
	#video{
		width: 100%;
		height: 100%;
	}
</style>
</head>
<body>
<!--button back top-->
<div id="back-top"><i class="fa fa-arrow-up"></i></div>    
<div class="main">
	<div class="div-content">  

<!--==============================header=================================-->
			<header>
				<div class="top_section">
					<div class="container">
						<div class="row">
							<div class="grid_3">
								<h1><a href="index.html"><img src="https://livedemo00.template-help.com/wt_49105/images/logo.png" alt="Visee"></a></h1>
							</div>
							<div class="grid_6">
								<form id="search1" action="search.php" method="GET" accept-charset="utf-8">
										<input type="text" name="s" value="Search millions of videos" onFocus="myFocus(this);" onBlur="myBlur(this);"/>
										<a onClick="document.getElementById('search1').submit()" class="more_btn3"></a>
									</form>
							</div>
							<div class="grid_3">
								<ul class="soc_icons">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>


						</div>
					</div>
				</div>



			<div id="stuck_container">
				<div class="menu_holder">
					<div class="container">
						<div class="row">
							<div class="grid_12">
								<nav>
									<ul class="sf-menu header_menu">
										<li class="current" id="first-li"><a href="index.html">Videos<strong></strong></a></li>
										<li><a href="index-1.html"><span></span>Movies<strong></strong></a>
												<ul class='submenu'>
													<li><a href="#">New</a></li>
													<li><a href="#">Archive</a></li>
													<li class='sub-menu'><a href="#">Top 10</a>
														 <ul class='submenu2'>
																<li><a href="#">Fresh</a></li>
																<li><a href="#">Archive</a></li>
														 </ul>
													</li>
												</ul>
										 </li>
										 <li><a href="index-2.html">Music<strong></strong></a></li>
										 <li><a href="index-3.html">Channels<strong></strong></a></li>
										 <li><a href="index-4.html">Groups<strong></strong></a></li>
										 <li id="last-li"><a href="index-5.html">Forums<strong></strong></a></li>
									</ul>
								</nav>
								
							</div>
						</div>
					</div>
				</div>
			</div>

		</header>

<!--=======content================================-->

		<div class="box-1">
			<div class="container">
				<div class="col1">
					<div class="fw_video">
						{{-- <iframe src="https://player.vimeo.com/video/37582150?byline=0&amp;portrait=0&amp;color=ffffff"></iframe> --}}

					<video 
						id="video" 
						class="video-js vjs-default-skin vjs-big-play-centered" 
						controls 
						preload="none" 					
						poster="https://static-cdn.jtvnw.net/ttv-boxart/League%20of%20Legends-272x380.jpg" 
						data-setup='{"techOrder": ["flash", "html5", "other supported tech"], "nativeControlsForTouch": true, "controlBar": { "muteToggle": false, "volumeControl": false, "timeDivider": true, "durationDisplay": true, "progressControl": true } }'
						>
						<source src="rtmp://127.0.0.1:1935/live/ypn" type='rtmp/mp4'/>
					</video>
					</div>

					<div class="wrapper">
						<p class="txt1"> My Secret to Long, Healthy and Thick Hair! <span class="txt2"><i class="fa fa-eye icon1"></i>243,321</span></p>
						<p class="txt2"></p>
					</div>
					<p class="txt3">
						<span class="color1">by:</span> <a href="#" class="link2 color2">fashionTV</a>
						<span class="vline1"></span>
						<a href="#" class="link2 color3">3,332 videos »</a>
						<span><i class="fa fa-chevron-circle-down icon2"></i><a href="#">share</a></span>
						<span><i class="fa fa-cog icon2"></i><a href="#">subscribe</a></span>
						<span class="fright">
							<i class="fa fa-thumbs-up icon2"></i><span class="color1">27,453</span>
							<span class="color4"><i class="fa fa-thumbs-down icon2 v2 color4"></i>243</span>
						</span>
					</p>
					<div class="wrapper">
						<p class="txt4">Published on <time datetime="2013-01-01">Oct 31, 2013</time></p>
					</div>
				</div>

				<div class="col2">
					<div class="box-2">
						<div class="hline2">
							<h2>You May Like</h2>
						</div>
						<div id="owl1">

							<div class="item">
								<div class="wrapper">
									<figure class="img-polaroid figure_video">
										<a class="various iframe fancybox2 lightbox-video" href="https://www.youtube.com/embed/2kodXWejuy0?rel=0">
											<img src="https://livedemo00.template-help.com/wt_49105/images/page1_pic1.jpg" alt="" />
											<span class="video_icon"></span>
											<span class="video_title">14:24 </span>
										</a>
									</figure>
									<p class="txt5">Get Beautiful Hair Overnight!</p>

									<figure class="img-polaroid figure_video">
										<a class="various iframe fancybox2 lightbox-video" href="https://www.youtube.com/embed/2kodXWejuy0?rel=0">
											<img src="https://livedemo00.template-help.com/wt_49105/images/page1_pic1.jpg" alt="" />
											<span class="video_icon"></span>
											<span class="video_title">15:10 </span>
										</a>
									</figure>
									<p class="txt5">15 TIPS TO BEAUTIFUL HAIR</p>
								</div>
							</div>

							<div class="item">
								<div class="wrapper">
									<figure class="img-polaroid figure_video">
										<a class="various iframe fancybox2 lightbox-video" href="https://www.youtube.com/embed/2kodXWejuy0?rel=0">
											<img src="https://livedemo00.template-help.com/wt_49105/images/page1_pic1.jpg" alt="" />
											<span class="video_icon"></span>
											<span class="video_title">15:10 </span>
										</a>
									</figure>
									<p class="txt5">15 TIPS TO BEAUTIFUL HAIR</p>


									<figure class="img-polaroid figure_video">
										<a class="various iframe fancybox2 lightbox-video" href="https://www.youtube.com/embed/2kodXWejuy0?rel=0">
											<img src="https://livedemo00.template-help.com/wt_49105/images/page1_pic1.jpg" alt="" />
											<span class="video_icon"></span>
											<span class="video_title">14:24 </span>
										</a>
									</figure>
									<p class="txt5">Get Beautiful Hair Overnight!</p>

								</div>
							</div>


						</div>
						<div class="clear"></div>
					</div>
				</div>

			</div>
		</div>


		<div class="box-title-1">
			<div class="container">
				<h2>Fresh videos</h2>
			</div>
		</div>

		<div class="box-3">
			<div class="container">
				<div class="row">

					<div class="grid_3">
						<figure class="img-polaroid figure_video">
							<a class="various iframe fancybox2 lightbox-video" href="https://www.youtube.com/embed/2kodXWejuy0?rel=0">
								<img src="https://livedemo00.template-help.com/wt_49105/images/page1_pic3.jpg" alt="" />
								<span class="video_icon"></span>
								<span class="video_title">8:50</span>
							</a>
						</figure>
						<p>Ersvitaertyas nemosera secaerat nipades keytaseas goetayse.</p>
					</div>

					<div class="grid_3">
						<figure class="img-polaroid figure_video">
							<a class="various iframe fancybox2 lightbox-video" href="https://www.youtube.com/embed/2kodXWejuy0?rel=0">
								<img src="https://livedemo00.template-help.com/wt_49105/images/page1_pic3.jpg" alt="" />
								<span class="video_icon"></span>
								<span class="video_title">12:40</span>
							</a>
						</figure>
						<p>Cervisera secaerat nipades keytaseas go volernatur.</p>
					</div>

					<div class="grid_3">
						<figure class="img-polaroid figure_video">
							<a class="various iframe fancybox2 lightbox-video" href="https://www.youtube.com/embed/2kodXWejuy0?rel=0">
								<img src="https://livedemo00.template-help.com/wt_49105/images/page1_pic3.jpg" alt="" />
								<span class="video_icon"></span>
								<span class="video_title">5:30</span>
							</a>
						</figure>
						<p>Secaerat nipades keytaseas goetaymias semrtyas nemosera.</p>
					</div>

					<div class="grid_3">
						<figure class="img-polaroid figure_video">
							<a class="various iframe fancybox2 lightbox-video" href="https://www.youtube.com/embed/2kodXWejuy0?rel=0">
								<img src="https://livedemo00.template-help.com/wt_49105/images/page1_pic3.jpg" alt="" />
								<span class="video_icon"></span>
								<span class="video_title">10:38</span>
							</a>
						</figure>
						<p>Vervimosera secaerat nipades eytaseas etayse vose.</p>
					</div>

				</div>
			</div>
		</div>




			<div class="container">
				<div class="row">

					<div class="grid_3">
						<div class="hline3">
							<h2>What to watch</h2>
						</div>

						<ul class="listWithMarker">
							<li><a href="#">Watch Movies Online For Free</a></li>
							<li><a href="#">Free TV Episodes Online</a></li>
							<li><a href="#">Watch New Movies Online</a></li>
							<li><a href="#">Anime Videos</a></li>
							<li><a href="#">Watch Anime Movies</a></li>
							<li><a href="#">Watch Horror Movies</a></li>
							<li><a href="#">Watch Full Movies Online</a></li>
							<li><a href="#">Watch Free Streaming Movies</a></li>
						</ul>
					</div>

					<div class="grid_4 preffix_1">
						<div class="hline3">
							<h2>About us</h2>
						</div>
						<h3>Meuctusera aloe caseagna oncumsan erahaysesas maleases</h3>
						<p>Vasre quaera ptatemast esenim ad minima veniam scipiases laboriosam asuis autem vel eum iure reprase henderit, qui in ea voluptate:</p>

						<table class="table-1">
								<tr>
										<td class="col-1">History</td>
										<td class="col-2">Creators &amp; Partners</td>
								</tr>
								<tr>
										<td class="col-1">Press &amp; Blogs</td>
										<td class="col-2">Advertising</td>
								</tr>
								<tr>
										<td class="col-1">Copyright</td>
										<td class="col-2">Developers</td>
								</tr>
						</table>

					</div>

					<div class="grid_3 preffix_1">
						<div class="hline3">
							<h2>best of the day</h2>
						</div>
						<figure class="img-polaroid figure_video">
							<a class="various iframe fancybox2 lightbox-video" href="https://www.youtube.com/embed/2kodXWejuy0?rel=0">
								<img src="https://livedemo00.template-help.com/wt_49105/images/page1_pic7.jpg" alt="" />
								<span class="video_icon"></span>
								<span class="video_title">10:38</span>
							</a>
						</figure>
						<div class="video_txt_section">
							<p>by: <a href="#" class="link3">danaberry</a>                  <span class="fright">39,989 views</span></p>
							<div class="clear"></div>
						</div>

						<p class="txt6">Secaerat nipades keytaseas gos volnatur bierwasa.</p>
					</div>

				</div>
			</div>




			<div class="box-title-2">
				<div class="container">
					<h2>latest news</h2>
				</div>
			</div>

		<div class="box-4">
			<div class="container">
				<div class="row">

					<div class="grid_4">
						<div class="wrapper">
							<p class="txt7"><time datetime="2013-01-01"><a href="#">14/10</a></time></p>
							<div class="box2">
								<p class="txt8"><a href="#">Meuctusera aloe case aumsan erahaysesas maleases</a></p>
							</div>
						</div>
						<p class="color5">Measre quaera ptatasesenim ainima veniam scipiases lariosam asuis autemeum iure reprase voluptate bitreasase.</p>
					</div>

					<div class="grid_4">
						<div class="wrapper">
							<p class="txt7"><time datetime="2013-01-01"><a href="#">15/10</a></time></p>
							<div class="box2">
								<p class="txt8"><a href="#">caseagna ocumsan erahas maleas es Meuctusera aloe </a></p>
							</div>
						</div>
						<p class="color5">Satasesenim ainima veniam deasre quaerade henderiqui in ea voluptate.</p>
					</div>

					<div class="grid_4">
						<div class="wrapper">
							<p class="txt7"><time datetime="2013-01-01"><a href="#">16/10</a></time></p>
							<div class="box2">
								<p class="txt8"><a href="#">oncumsan erahays euctusera cagna aleases</a></p>
							</div>
						</div>
						<p class="color5">Acipiases lariosam asuis autemeum iure reprase voluptate henderiqui indela.</p>
					</div>
					<div class="clear"></div>

					<div class="grid_12">
						<div class="wrapper hline4">
							<a href="#" class="more_btn fright">read more news</a>
						</div>
					</div>

				</div>
			</div>
		</div>


	 </div>
	 
</div>
<!--=======footer=================================-->
			<footer>
				<div class="footer_priv">
					<div class="container">
						<p class="txt_priv">&copy; <span id="copyright-year"></span> &bull; <a href="index-6.html" class="link2">Privacy Policy</a><br><!--{%FOOTER_LINK} --></p>
					</div>
				</div>
			</footer>
<script type="text/javascript" src="{{Module::asset('livestream:js/jquery.js')}}"></script>

<script type="text/javascript" src="https://livedemo00.template-help.com/wt_49105/js/owl.carousel.js"></script>
<script src="//vjs.zencdn.net/5.11/video.min.js"></script>
<script type="text/javascript" src="{{Module::asset('livestream:js/livestream.js')}}"></script>

 <script>
	 $(document).ready(function(){
		/*carousel*/
		var owl = $("#owl1"); 
		owl.owlCarousel({
		items : 1, //10 items above 1000px browser width
		itemsDesktop : [995,1], //5 items between 1000px and 901px
		itemsDesktopSmall : [767, 1], // betweem 900px and 601px
		itemsTablet: [700, 1], //2 items between 600 and 0
		itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
		navigation : true,
		pagination :  false
		});  

		function myFocus(element){
			if (element.value == element.defaultValue){
							 element.focus();
						 element.value = '';
				}
			}
			function myBlur(element){
				if (element.value == ''){
					 element.blur();
					 element.value = element.defaultValue;
				}
			}

			$('.lightbox-video').hover(
            function(){
                $(this).find("span.video_icon").stop().animate({opacity:'1'},400)
            },
            function(){
                $(this).find("span.video_icon").stop().animate({opacity:'0'},400)
            }
        )


 }); 
			
 </script>
</html>