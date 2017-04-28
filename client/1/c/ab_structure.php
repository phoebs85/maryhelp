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
<?php include"include_top.php" ?>
<div class="content page">
  <div class="main wrap clearfix">
    <?php include"include_left_nav.php" ?>
    <div class="main_right">
      <div class="slide">
        <img src="../img/page_history_baner.jpg" width="720" height="135" />
      </div>
      <div class="page_box about">
        <div class="instructions">
          <span class="loca">主頁 <span class="lin">></span> 關於我們 <span class="lin">></span> <span class="now">總會及支會架構</span></span>
        </div>
        <div class="page_main">
          <h3><img src="img/ab_structure_h3.png" height="26" /></h3>

          <div class="text_tit">
             <ul>
                 <li class="hov" onmouseover="show(this,'cont','hov')" name="d_1"><a href="#">國際聯會組織</a></li>
                 <li onmouseover="show(this,'cont','hov')" name="d_2"><a href="#">支會內部架構</a></li>
             </ul>
          </div>
          <div class="clear"></div>

          <div class="text_cont" name="cont">
             <p><img src="../img/about_1.jpg"/></p>
          </div>

          <div class="text_cont" name="cont" style="display:none;">
           <p>幹事會由會員大會選舉產生，任期兩年，負責策劃及執行一般會務</p>
           <p><a href="ab_committee.php"><img src="../img/about_2.jpg"/></a></p>
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
