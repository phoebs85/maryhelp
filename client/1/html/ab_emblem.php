<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mary Help of Christians Past Pupils Association</title>
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
        <img src="../img/page_history_baner.jpg" width="720" height="135" />
      </div>
      <div class="page_box">
        <div class="instructions">
          <span class="loca">Home <span class="lin">></span> About Us <span class="lin">></span> <span class="now">Emblem & Constitution</span></span>
        </div>
        <div class="page_main">
        	<h3><img src="img/ab_emblem_h3.png" height="26" /></h3>
          <div class="text">
          <div class="text_tit">
             <ul>
                 <li class="hov" onmouseover="show(this,'cont','hov')" name="d_1"><a href="#">Emblem</a></li>
                 <li onmouseover="show(this,'cont','hov')" name="d_2"><a href="#">Constitution</a></li>
                 <li onmouseover="show(this,'cont','hov')" name="d_3"><a href="#">Annual Assembly</a></li>
             </ul>
          </div>
          <div class="clear"></div>

          <div class="text_cont" name="cont">
            <p>During the Global Congress held in August 1997, the World Confederation of the Past Pupils of Daughters of Mary Help of Christians in Rome adopted a new design of the union emblem. “MA” which represent ‘Maria Ausilicatrica’ (‘Mary Help of Christians’) in Italian remains the theme of the new emblem. </p>
             <p><img src="../img/about_logo.jpg"/></p>
          </div>

          <div class="text_cont" name="cont"  style="display:none;">
           <p>
             <a href="../download/constitution.pdf" target="_blank">母佑舊同學會- 聖母書院支會會章 (日期: 2014年11月17日)</a><br>
             <a href="../download/CouncilElectionGuidelines.pdf" target="_blank">聖母書院法團校董會 – 校友校董選舉指引 (日期: 2014年11月17日)</a><br>
             <a href="../c/img/content.pdf" target="_blank">母佑會舊同學會會章</a><br>
           </p>
          </div>

          <div class="text_cont" name="cont">
            <p>Content Here</p>
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
