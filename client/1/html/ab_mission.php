<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mary Help of Christians Past Pupils Association</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="../js/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
<script src="../js/tab.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){

  if($(window).innerWidth()<= 989){
    $("body").css("background","url(../img/bg1.jpg) no-repeat left top");
	$(".top").css("background","url(../img/top_bg1.jpg) no-repeat left top");
	$(".content_bottom_img").css("background","url(../img/content_bg1.png) no-repeat left top");
  }else{
	 $("body").css("background","url(../img/bg.jpg) no-repeat center top");
	 $(".top").css("background","url(../img/top_bg.jpg) no-repeat center top");
	 $(".content_bottom_img").css("background","url(../img/content_bg.png) no-repeat center top");
  }

  $(window).resize(function(){
    if($(window).innerWidth()<= 989){
      $("body").css("background","url(../img/bg1.jpg) no-repeat left top");
	  $(".top").css("background","url(../img/top_bg1.jpg) no-repeat left top");
	  $(".content_bottom_img").css("background","url(../img/content_bg1.png) no-repeat left top");
	}else{
	  $("body").css("background","url(../img/bg.jpg) no-repeat center top");
	  $(".top").css("background","url(../img/top_bg.jpg) no-repeat center top");
	  $(".content_bottom_img").css("background","url(../img/content_bg.png) no-repeat center top");
    }
  });
});
</script>
</head>

<body>
<?php include"include_top.php"?>
<div class="content page">
  <div class="main wrap clearfix">
    <?php include"include_left_nav.php"?>
    <div class="main_right">
      <div class="slide">
        <img src="../img/page_senior.jpg" />
      </div>
      <div class="page_box about">
        <div class="instructions">
          <span class="loca">Home <span class="lin">></span> About Us <span class="lin">></span> <span class="now">Mission and Vision</span></span>
        </div>
        <div class="page_main">
          <h3><img src="img/ab_mission_h3.png" height="26" /></h3>
          <div class="text">
              <ol>
                  <li>To promote and maintain friendships among past pupils</li>
                  <li>To express concern for our past pupils who are playing different roles in society</li>
                  <li>To encourage and support past pupils who are in difficulties</li>
                  <li>To promote the friendship  between our past students and the sisters in Mary Help of Christians as well as the Salesian Family</li>
                  <li>To keep up the spirits of Our Lady’s College</li>
              </ol>
              <p></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content_bottom_img"></div>
</div>
<?php include"include_footer.php"?>
<script type="text/javascript">
<!--
$(function(){
  $(".pics li a").hover(function(){
     var src1 = $("img",this).attr("src");
	 src2 = src1.replace(/ash/,"small");
	 $("img",this).attr("src",src2);
  },function(){
	 var src1 = $("img",this).attr("src");
	 src2 = src1.replace(/small/,"ash");
	 $("img",this).attr("src",src2);

  });


  $("a.photo").fancybox({
	'padding' : 0,
	'overlayShow'	: true,
	'transitionIn'	: 'elastic',
	'transitionOut'	: 'elastic'
  });

});
//-->
</script>
</body>
</html>
