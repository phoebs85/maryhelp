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
          <h3><img src="img/ab_emblem_h3.png" height="26" /></h3>

          <div class="text_tit">
             <ul>
                 <li class="hov" onmouseover="show(this,'cont','hov')" name="d_1"><a href="#">會徽</a></li>
                 <li onmouseover="show(this,'cont','hov')" name="d_2"><a href="#">會章</a></li>
                 <li onmouseover="show(this,'cont','hov')" name="d_3"><a href="#">週年大會</a></li>
             </ul>
          </div>
          <div class="clear"></div>

          <div class="text_cont" name="cont">
            <p>母佑舊同學會羅馬總會曾在一九九七年八月在羅馬召開全球代表大會，在會議上推出新設計的會徽： 新會徽仍以"MA"為主題（因為「聖母進教之佑」的意文是 Maria Ausilicatrice, 簡寫是MA）。</p>
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
            <p>母佑舊同學會- 聖母書院支會的週年會員大會於每年不遲於 8 月召開一次，當中包括幹事會對會員作出會務及財務報告，以及選出來屆幹事會成員及修改本會會章等等事項。另外，如有需要，幹事會亦可召開非常會員大會以處理於週年大會休會期間的特別議程。</p>
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
