<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>母佑舊同學會中華區聖母書院支會</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script>
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
      <div class="page_box sitemap">
        <div class="instructions">
          <span class="loca">主頁 <span class="lin">></span> <span class="now">網站地圖</span></span>          
        </div>
        <div class="page_main">
          <h3><img src="img/sitemap_h3.png" width="150" height="26" /></h3> 
          <div class="map_text">         
          	<div class="text">
          	<div class="map_top">
                <p><a href="index.php">主頁</a></p>
                <img src="../img/sitmap.png" />
             </div>
            <ul class="spe">
                <li class="sitmap_title"><a href="ab_family.php">關於我們</a></li>
                <li><a href="ab_family.php">FMA母佑舊同學會資訊</a></li>  
                <li><a href="ab_history.php">歷史</a></li>
                <li><a href="ab_committee.php">幹事成員</a></li>
                <li><a href="ab_members.php">會員</a></li>
                <li><a href="Alumni_action/alumni_index.php">校友行動</a></li>
                <!--<li><a href="ab_support.php">支持</a></li>-->
                   
            </ul>
            <ul>
                <li class="sitmap_title"><a href="activities.php">活動</a></li>
                <li><a href="activities.php">活動</a></li>   
            </ul>
            <ul>
                <li class="sitmap_title"><a href="meeting.php">會訊</a></li>
                <li><a href="meeting.php">會訊</a></li>    
            </ul>
            <ul>
                <li class="sitmap_title"><a href="photos.php">相片集</a></li>
                <li><a href="photos.php">相片集</a></li>                    
            </ul>
            <ul>
                <li class="sitmap_title"><a href="support.php">支持</a></li>
                <li ><a href="support.php">支持</a></li>                    
            </ul>
            <ul>
                <li class="sitmap_title"><a href="contact.php">聯絡我們</a></li>
                <li ><a href="contact.php">聯絡我們</a></li>                    
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
</body>
</html>