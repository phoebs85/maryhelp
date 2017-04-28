<?php //April2017 - Deprecated. Moved to ab_senior.php in main ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>母佑舊同學會中華區聖母書院支會</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<link href="../../css/alumni.css" rel="stylesheet" type="text/css" />
<script src="../../js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="../../js/jquery.soChange-min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){

  if($(window).innerWidth()<= 989){
    $("body").css("background","url(images/bg1.jpg) no-repeat left top");
	$(".top").css("background","url(images/top_bg1.jpg) no-repeat left top");
	$(".content_bottom_img").css("background","url(images/content_bg2.png) no-repeat left top");
  }else{
	 $("body").css("background","url(images/bg.jpg) no-repeat center top");
	 $(".top").css("background","url(images/top_bg.jpg) no-repeat center top");
	 $(".content_bottom_img").css("background","url(images/content_bg.png) no-repeat center top");
  }

  $(window).resize(function(){
    if($(window).innerWidth()<= 989){
      $("body").css("background","url(images/bg1.jpg) no-repeat left top");
	  $(".top").css("background","url(images/top_bg1.jpg) no-repeat left top");
	  $(".content_bottom_img").css("background","url(../c/Alumni%20action/images/content_bg2.png) no-repeat left top");
	}else{
	  $("body").css("background","url(images/bg.jpg) no-repeat center top");
	  $(".top").css("background","url(/images/top_bg.jpg) no-repeat center top");
	  $(".content_bottom_img").css("background","url(images/content_bg.png) no-repeat center top");
    }
  });
});
</script>
</head>
<style>
.loi{ background:url(images/bg.jpg)}
</style>
<body>
<?php include"alumni_top.php"?>
<div class="content page">
  <div class="main wrap clearfix">
    <?php include"alumni_left_nav.php"?>
    <div class="main_right">
      <div class="slide alumni_slide">
        <a class="img"><img src="images/page_share.jpg"  width="720" height="135"/></a>
      </div>
      <div class="page_box alumni_about">
        <div class="instructions">
          <span class="loca">主頁 <span class="lin">></span> <span class="now">分享</span></span>
        </div>
        <div class="page_main alumni_senior">
        	<h3><img src="images/tit7.png" width="88" height="26" /></h3>
          <div class="text">
		    <h2><a href="../../download/2016PaulaRachel.pdf" target="_blank">工作體驗活動</a></h2>
		    <h2><a href="../../download/28032015visit.pdf" target="_blank">2015 年 3 月 28 日參觀香港科學園</a></h2>
		    <h2><a href="../../download/marun.pdf" target="_blank">「馬雲與青年有約」之反思</a></h2>
            <h2><a href="../../download/Sharing_after_a_gathering_with_legal_mentor.pdf" target="_blank">Sharing after a gathering with legal mentor Sally Hung on April 21, 2014 - Nicole Poon </a></h2>

			<h2><a href="../../download/sharing_after.pdf" target="_blank">SHARING AFTER FIRST MENTORS MEETING - Alice Ho Siu Wan 何小雲</a></h2>

            <h2><a href="../../download/sharing_after_orientation.pdf" target="_blank">SHARING AFTER ORIENTATION - Alice Ho Siu Wan 何小雲</a></h2>

            <h2><a href="../../download/share_2014.pdf" target="_blank">娓娓動聽的學長故事 - 歐陽婉玲 - 1978 5C</a></h2>


            <h2><a href="../../download/second_career.pdf" target="_blank">Second Career Talk on Mar. 29, 2014 - Mrs. Bette Li</a></h2>

			<h2><a href="../../download/19785c.pdf" target="_blank">靠近不容易- 歐陽婉玲 - 1978 5C</a></h2>
			<h2><a href="../../download/1978_5C.pdf" target="_blank">「基本法」你看過了嗎？  林歐陽婉玲 (教育心理顧問)  1978   5C </a></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content_bottom_img"></div>
</div>
<?php include"alumni_footer.php"?>
</body>
</html>
