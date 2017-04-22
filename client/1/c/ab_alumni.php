<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>母佑舊同學會中華區聖母書院支會</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script>
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
        <img src="../img/page_history_baner.jpg" width="720" height="135" /> 
      </div>
      <div class="page_box about">        
        <div class="instructions">
          <!--<span class="loca">主頁 <span class="lin">></span> 關於我們 <span class="lin">></span> <span class="now">校友行動</span></span>-->
          <ul>
          	<li class="<?php if($location=='ab_family.php') echo'on'?>"><a href="ab_family.php">FMA母佑舊同學會資訊</a></li>
           <li class="<?php if($location=='ab_history.php') echo'on'?>"><a href="ab_history.php">歷 史</a></li>
            <li class="<?php if($location=='ab_committee.php') echo'on'?>"><a href="ab_committee.php">幹事成員</a></li>
            <li class="<?php if($location=='ab_members.php') echo'on'?>"><a href="ab_members.php">會 員</a></li>
            <li class="<?php if($location=='ab_alumni.php') echo'on'?>"><a href="ab_alumni.php">校友行動</a></li>
            <!--<li class="<?php if($location=='ab_support.php') echo'on'?>"><a href="ab_support.php">支持</a></li>-->
            
          </ul>
        </div>
        <div class="page_main">
          <h3><img src="img/ab_alumni_h3.png" width="154" height="26" /></h3>
          <div class="text">
            <p>即將推出</p>
            
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