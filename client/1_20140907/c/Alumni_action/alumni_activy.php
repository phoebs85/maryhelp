<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>母佑舊同學會中華區聖母書院支會</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<link href="../../css/alumni.css" rel="stylesheet" type="text/css" />
<script src="../../js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="../../js/jquery.soChange-min.js" type="text/javascript"></script>
<link href="../..、css/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />


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
        <a class="img"><img src="images/page_activities_baner.jpg"  width="720" height="135"/></a>
      </div>
      <div class="page_box alumni_about">
        <div class="instructions">
          <span class="loca">主頁 <span class="lin">></span> <span class="now">活動</span></span>          
        </div>
        <div class="page_main alumni_activy">
        	<h3><img src="images/tit6.png" width="100" height="29" /></h3> 
            <div class="text">
            <ul>
            	
            	<?php include "include_files/_alumni_activy0.php"; ?>
            	<?php include "include_files/_alumni_activy1.php"; ?>
            	
<!--            	<li><span>2014年3月8日</span><a href="alumni_activy_detail.php">「燃亮薪火起動同行」 步行籌款 2:30pm to 4:30pm</a></li>
                <li><span>2014年3月29日</span><a href="alumni_activy_detail.php">Career Talk 職業講座 2:30 to 4:00pm</a></li>-->
            </ul>
            
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