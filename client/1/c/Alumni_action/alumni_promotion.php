<?php //April2017 - Deprecated. Moved to ab_promotion.php in main ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
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
        <a class="img"><img src="images/page_promotion.jpg"  width="720" height="135"/></a>
      </div>
      <div class="page_box alumni_about">
        <div class="instructions">
          <span class="loca">主頁 <span class="lin">></span> <span class="now">學術提升計劃</span></span>
        </div>
        <div class="page_main alumni_senior">
        	<h3><img src="images/tit2.png" width="211" height="26" /></h3>
          <div class="text">


            <p>「 學術提升計劃」 旨在協助解决和支援學生在學科學習上的困難, 以提升學術水平為目的。</p>

            <span  style="float:right; padding:0 0 30px 30px "><img src="images/alumni_promotion_1.jpg" width="185" height="139"/><br /><br /><img src="images/alumni_promotion_2.jpg" width="185" height="139"/></span>
<p>為配合學生在未來升學和就業的需要, 我們首兩年的計劃將專注於提升英語的運用(包括會話及寫作)。</p>

<p>我們邀請經驗豐富的專業導師, 包括知名海外教育家, 為高年級學生舉辦寫作技巧工作坊等活動, 希望學生透過實踐, 將學到的技巧運用在文章寫作上, 以改善書寫能力。 為提升初中學生的英語能力及協助她們以英語學習其他學科, 我們計劃為她們開設英語學習支援班。此外, 我們邀請專業導師培訓各級學生朗誦技巧, 藉以加強自信及提升英語表達能力。</p>

<p>詳情請<a href="../../download/academic_2013-2014.pdf" target="_blank">按此</a>參閱2013-2014年回顧。</p>


<p>如欲索取更多資料，請電郵至<a href="mailto:Alumnae-in-Action@olc.edu.hk" target="_blank">Alumnae-in-Action@olc.edu.hk</a> 與學術組組長Joice Lee 李佩霞或與聖母書院英文科科主任Rosanna Lo 盧秀娟老師聯絡。</p>


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
