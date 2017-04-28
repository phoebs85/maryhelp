<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>母佑舊同學會中華區聖母書院支會</title>
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
          <span class="loca">主頁 <span class="lin">></span> 關於我們 <span class="lin">></span> <span class="now">歷史</span></span>
          <!--
          <ul>
          	 <li class="<?php if($location=='ab_family.php') echo'on'?>"><a href="ab_family.php">FMA母佑舊同學會資訊</a></li>
            <li class="<?php if($location=='ab_history.php') echo'on'?>"><a href="ab_history.php">歷 史</a></li>
            <li class="<?php if($location=='ab_committee.php') echo'on'?>"><a href="ab_committee.php">幹事成員</a></li>
            <li class="<?php if($location=='ab_members.php') echo'on'?>"><a href="ab_members.php">會 員</a></li>
            <li class="<?php if($location=='ab_alumni.php') echo'on'?>"><a href="Alumni_action/alumni_index.php">校友行動</a></li>
          </ul>
          //-->
        </div>
        <div class="page_main">
          <h3><img src="img/ab_history_h3.png" width="104" height="26" /></h3>
          <div class="text">
          	<p>聖母進教之佑舊同學會創立於一九零八年，由聖鮑思高神父的第四位繼任人真福李納德神父指導成立。目的是發揚鮑思高神父給當時舊同學的勸勉：「你們要團結起來，互相幫助。」</p>
            <p>母佑舊同學會是一個國際性的組織，現今會員分佈全球六十多個國家，人數達數十萬。母佑會的總會議員中有一位會長修女是專責舊同學的。</p>
            <p>聖母書院支會於1965 年六月成立，由古凱儀同學擔任第一屆的會長，現仍在聯絡網內的舊生約有二千多位。</p>
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
