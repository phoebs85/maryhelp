<script type='text/javascript' src='../jwplayer/jwplayer.js'></script>

<div id='mediaspace'>This text will be replaced</div>
 <style>
 .vedio_box{
	position:absolute;
	width:720px;
	height:435px;
	border:1px solid #ccc;
	background:#fff;
	top:100px;
	left:50%;
	margin-left:-370px;
	display:none;
	padding:5px 10px;
	z-index:100;
	border-radius:10px;
	-moz-border-radius:10px;
	-mz-border-radius:10px;
	-o-border-radius:10px;
}
.vedio_box .close{
	float:right;
	cursor:pointer;
	background:url(../img/overlay/fancy_close.png) no-repeat;
	width: 30px;
	height: 30px;
	text-indent: -9999px;
}
 </style>
<script type='text/javascript'>
  jwplayer('mediaspace').setup({
    'flashplayer': '../jwplayer/player.swf',
    'file': '../jwplayer/video.mp4',
    'controlbar': 'bottom',
    'playlist': 'none',
	'autostart': 'true',
    'dock': 'true',
    'icons': 'true',
    'quality': 'true',
    'stretching': 'exactfit',
    'width': '720',
    'height': '405'
  });
</script>
<!--
<script type='text/javascript'>
	jwplayer('mediaspace').setup({
	height: 193,
	width: 345,
	modes: [
    { type: 'flash',
			src: 'player.swf',
			config: {
		      		autostart: 'false',
		      		mute: 'true',
					  	file: 'pingan_07ir/video.mp4',
						  streamer: 'rtmp://streaming.todayir.com/video/',
						  provider: 'rtmp',
						  }
		},
		{ type: 'html5',
			config: {
		  			  autostart: 'false',
		      		mute: 'true',
						  file: 'http://cdn1.todayir.com/vod/ccre_13ir/video_e.mp4',
						  }
		}
	]
	});
</script>-->