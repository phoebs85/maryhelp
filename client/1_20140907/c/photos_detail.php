<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>母佑舊同學會中華區聖母書院支會</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />

<link href="../css/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script>

<script type="text/javascript" src="../js/style.js"></script>

<script src="../js/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
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
      <div class="page_box activity">
        <div class="instructions">
          <span class="loca">主頁 <span class="lin">></span> <span class="now">相片集</span></span>          
        </div>
        <div class="page_main">
          <h3><img src="img/photos_h3.png" width="154" height="26" /></h3>          
         <div class="last_event photos">
	
	  <?php include "include_files/_photos_detail0.php"; ?>
	  
	
    <div class="clear"></div>
    <div class="p_cont">
        <a class="prev_page" href="photos.php"><img src="../img/prev_03.png" width="56" height="17" /></a>
        <h4><?php include "include_files/_photos_detail1.php"; ?></h4>
        <div class="clear"></div>
        <ul class="page_photos">
        	
        	  <?php include "include_files/_photos_detail2.php"; ?>
        	
<!--            <li><div class="box">
                <p class="img"><a class="photo" href="img/p1.1.jpg" ><img src="../img/newsletter.jpg"/></a></p>
            </div></li>
            
            <li><div class="box">
                <p class="img"><a class="photo" href="img/p1.1.jpg" ><img src="img/p1.jpg"/></a></p>
            </div></li>
            
            <li><div class="box">
                <p class="img"><a class="photo" href="img/p1.1.jpg" ><img src="img/p1.jpg"/></a></p>
            </div></li>
            
            <li><div class="box">
                <p class="img"><a class="photo" href="img/p1.1.jpg" ><img src="../img/ab_family_1_o.jpg"/></a></p>
            </div></li>
            
            <li><div class="box">
                <p class="img"><a class="photo" href="img/p1.1.jpg" ><img src="img/p1.jpg"/></a></p>
            </div></li>
            
            <li><div class="box">
                <p class="img"><a class="photo" href="img/p1.1.jpg" ><img src="img/p1.jpg"/></a></p>
            </div></li>
            
            <li><div class="box">
                <p class="img"><a class="photo" href="img/p1.1.jpg" ><img src="img/p1.jpg"/></a></p>
            </div></li>
            
            <li><div class="box">
                <p class="img"><a class="photo" href="img/p1.1.jpg" ><img src="img/p1.jpg"/></a></p>
            </div></li>-->
       
    	 </ul>
    </div>
    
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