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



<body>

<?php include"alumni_top.php"?>

<div class="content page">

  <div class="main wrap clearfix">

    <?php include"alumni_left_nav.php"?>   

    <div class="main_right">

      <div class="slide">

        <img src="../../img/page_history_baner.jpg" width="720" height="135" /> 

      </div>

      <div class="page_box activity_page">

        <div class="instructions">

          <span class="loca">主頁 <span class="lin">></span> <span class="now">通告</span></span>          

        </div>

        <div class="page_main">

          <h3><img src="images/tit4.png" height="26" /></h3>



          <?php include "include_files/_alumni_news0.php"; ?>

          <?php include "include_files/_alumni_news_detail1.php"; ?>

          

          <div class="text" style="padding-top:15px;">

            <a class="prev_page" href="javascript:history.go(-1)"><img src="../../img/prev_03.png" width="56" height="17" /></a>

            

            <!--activities.php-->

            <h4><?php echo $item; ?><span><?php echo $yyyy."年".$mm."月".$dd."日"; ?></span></h4>

            <?php echo $desc; ?>



          </div>

        </div>

      </div>       

    </div>

  </div>

  <div class="content_bottom_img"></div>

</div>

<?php include"alumni_footer.php"?>

<script type="text/javascript">

<!--

$(function(){

	

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