<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head><meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>母佑舊同學會中華區聖母書院支會</title>

<link href="../css/style.css" rel="stylesheet" type="text/css" />

<script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script>

<script src="../js/jquery.soChange-min.js" type="text/javascript"></script>


<link type="text/css" rel="stylesheet" href="../css/overlay/fancybox.css" />
     
<script type="text/javascript" src="../js/overlay/jquery.easing.pack.js"></script>
<script type="text/javascript" src="../js/overlay/jquery.fancybox.js"></script>
<script type="text/javascript" src="../js/overlay/jquery.mousewheel.pack.js"></script>

   <script>
$(document).ready(function(){

	$("a.video_show").fancybox({
			'titleShow'     : false,
			'transitionIn'	: 'elastic',
			'transitionOut'	: 'elastic',
			'easingIn'      : 'easeOutBack',
			'easingOut'     : 'easeInBack'
		});

	})

</script>
<script type="text/javascript">

$(function(){  

  $('.slide .a_bigImg').soChange({

	overStop:false,

	thumbObj:'.slide .ul_change li',

	thumbNowClass:'on',   

	changeTime:4000  

  });

  

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

<div class="content">

  <div class="main wrap clearfix">

    <?php include"include_left_nav.php"?>   

    <div class="main_right">

      <div class="slide">

        <a class="a_bigImg"></a>

        <a class="a_bigImg a1"></a>

        <a class="a_bigImg a2"></a>

        <ul class="ul_change">

          <li class=""></li>

          <li class=""></li>

          <li class="last"></li>

        </ul>

      </div>

      <div class="infos">

        <div class="index_about">

          <h3><img src="img/index_about.png" width="181" height="26" /> </h3>

          <p>聖母進教之佑舊同學會創立於一九零八年，由聖鮑思高神父的第四位繼任人真福李納德神父指導成立。目的是發揚鮑思高神父給當時舊同學的勸勉：「你們要團結起來，互相幫助。」</p>

          <p>母佑舊同學會是一個國際性的組織，現今會員分佈全球六十多個國家，人數多達數十萬。母佑會的總會議員中有一位會長修女是專責舊同學會的。</p>

          <p>聖母書院支會於1965 年六月成立，由古凱儀同學擔任第一屆的會長，現仍在聯絡網內的舊生約有五千多位。</p>

         </div>

        <div class="index_news">

          <div class="news_tit">

        

             <h3><img src="img/index_new_title.png" width="118" height="21" /> </h3>

             <div class="link"><a href="news.php">+ 更多</a></div>

        

          </div>

          <div class="clear"></div>

          <ul>

          	

          	<?php include "include_files/_index0.php"; ?>

          	<?php include "include_files/_index1.php"; ?>

          	

<!--            <li><span>2012/11/28</span><a href="#" target="_blank">60週年校慶晚宴</a></li>

            <li><span>2012/11/28</span><a href="#" target="_blank">母佑舊同學會周年聚餐相片及股東週年大會日期</a></li>

            <li><span>2012/11/28</span><a href="#" target="_blank">60週年校慶晚宴</a></li>-->

          </ul>

        </div>

      </div>

    </div>

  </div>

  <div class="content_bottom_img"></div>

</div>

<?php include"include_footer.php"?>


</body>

</html>