<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>母佑舊同學會中華區聖母書院支會</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script>
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
         <span class="loca">主頁 <span class="lin">></span> 關於我們 <span class="lin">></span>  <span class="now">宗旨</span></span>
        </div>
        <div class="page_main">
           <h3><img src="img/ab_mission_h3.png" height="26" /></h3>
           <div class="text">
              <ol>
                 <li>維繫舊同學間的友誼</li>
                 <li>關心舊同學在社會上不同崗位中的需要</li>
                 <li> 在精神、物質上彼此扶持，彼此鼓勵</li>
                 <li>繼續舊同學與母佑會修女及慈幼大家庭之間的友誼</li>
                 <li>發揚母校的精神</li>
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
</body>
</html>
