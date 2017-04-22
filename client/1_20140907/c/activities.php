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
<?php if(!isset($_GET['year'])) $_GET['year'] = 2014; ?>
<div class="content page">
  <div class="main wrap clearfix">
    <?php include"include_left_nav.php"?>   
    <div class="main_right">
      <div class="slide">
        <img src="../img/page_activities_baner.jpg" width="720" height="135" /> 
      </div>
      <div class="page_box activity">
        <div class="instructions">
          <span class="loca">主頁 <span class="lin">></span> <span class="now">活動</span></span>          
        </div>
        <div class="page_main">
          <h3><img src="img/activities_h3.png" width="100" height="29" /></h3>

        
          
          <div class="text">
            <div class="last_event">
            <div class="calendar">
               <iframe src="calendar.php" frameborder="0"  width="100%" height="100%" scrolling="no" allowtransparency="true"> </iframe></div>
              
            </div>
<h4><img src="img/past_event_h3.png" width="84" height="18" /></h4><br />
<div class="annou">
	
        <?php include "include_files/_activities0.php"; ?>
        <?php include "include_files/_activities1.php"; ?>
              
<!--              <ul class="past_news">
              <li class="annou_date">2014年11月23日</li>
              <li class="annou_txt"><a href="#" target="_blank">2012年11月23日之舊生會燒烤晚會</a></li>
              </ul>
              <ul class="past_news">
              <li class="annou_date">2014年11月23日</li>
              <li class="annou_txt"><a href="#" target="_blank">2008聖母書院舊同學會周年聚餐相片</a></li>
              </ul>
              <ul class="past_news">
              <li class="annou_date">2014年11月23日</li>
              <li class="annou_txt"><a href="#" target="_blank">校園玫瑰經</a></li>
              </ul>
              <ul class="past_news">
              <li class="annou_date">2014年11月23日</li>
              <li class="annou_txt"><a href="#" target="_blank">2007年母佑舊同學會周年聚餐相片2007年母佑舊同學會周年聚餐相片2007年母佑舊同學會周年聚餐相片2007年母佑舊同學會周年聚餐相片2007年母佑舊同學會周年聚餐相片 </a></li>
              </ul>
              
               <ul class="past_news">
              <li class="annou_date">2014年11月23日</li>
              <li class="annou_txt"><a href="#" target="_blank">2012年11月23日之舊生會燒烤晚會</a></li>
              </ul>
              <ul class="past_news">
              <li class="annou_date">2014年11月23日</li>
              <li class="annou_txt"><a href="#" target="_blank">2008聖母書院舊同學會周年聚餐相片</a></li>
              </ul>
              <ul class="past_news">
              <li class="annou_date">2014年11月23日</li>
              <li class="annou_txt"><a href="#" target="_blank">校園玫瑰經</a></li>
              </ul>
              <ul class="past_news">
              <li class="annou_date">2014年11月23日</li>
              <li class="annou_txt"><a href="#" target="_blank">2007年母佑舊同學會周年聚餐相片 </a></li>
              </ul>
               <ul class="past_news">
              <li class="annou_date">2014年11月23日</li>
              <li class="annou_txt"><a href="#" target="_blank">2012年11月23日之舊生會燒烤晚會</a></li>
              </ul>
              <ul class="past_news">
              <li class="annou_date">2014年11月23日</li>
              <li class="annou_txt"><a href="#" target="_blank">2008聖母書院舊同學會周年聚餐相片</a></li>
              </ul>
              <ul class="past_news">
              <li class="annou_date">2014年11月23日</li>
              <li class="annou_txt"><a href="#" target="_blank">校園玫瑰經</a></li>
              </ul>
              <ul class="past_news">
              <li class="annou_date">2014年11月23日</li>
              <li class="annou_txt"><a href="#" target="_blank">2007年母佑舊同學會周年聚餐相片 </a></li>
              </ul>
               <ul class="past_news">
              <li class="annou_date">2014年11月23日</li>
              <li class="annou_txt"><a href="#" target="_blank">2012年11月23日之舊生會燒烤晚會</a></li>
              </ul>
              <ul class="past_news">
              <li class="annou_date">2014年11月23日</li>
              <li class="annou_txt"><a href="#" target="_blank">2008聖母書院舊同學會周年聚餐相片</a></li>
              </ul>
              <ul class="past_news">
              <li class="annou_date">2014年11月23日</li>
              <li class="annou_txt"><a href="#" target="_blank">校園玫瑰經</a></li>
              </ul>
              <ul class="past_news">
              <li class="annou_date">2014年11月23日</li>
              <li class="annou_txt"><a href="#" target="_blank">2007年母佑舊同學會周年聚餐相片 </a></li>
              </ul>-->
             
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
$(function(){

	if($(".year li").length > 5)
	{
		$(".go_next img").attr('src','../img/go_left_true.png');
	}

	  
  $(".go_next").click(function(){
	  var total = ($("#yearlist  li").length-5 )*133;
      if(Math.abs(parseInt($("#yearlist").css("left"))) < total)
      {
            $("#yearlist").animate({"left":"-="+133+"px"},150,'',function(){
		     if(Math.abs(parseInt($("#yearlist").css("left"))) == total)
			 {
                 $(".go_next img").attr('src','../img/go_left_false.png');
			 }
			 else
			 {
				 if($(".go_prev img").attr('src') != '../img/go_right_true.png')
				 {
                     $(".go_prev img").attr('src','../img/go_right_true.png');
				 }
			 }
		  });
      }
  });
  
  $(".go_prev").click(function(){
    var total = ($($("#yearlist li")).length-5 )*133;
	  if(Math.abs(parseInt($("#yearlist").css("left"))) != 0)
	  {
		 $("#yearlist").animate({"left":"+="+133+"px"},150,function(){
			 if(Math.abs(parseInt($("#yearlist").css("left"))) == 0)
			 {
                 $(".go_prev img").attr('src','../img/go_right_false.png');
			 }
             else
             {
                 if($(".go_next img").attr('src') != '../img/go_left_true.png')
                 {
                     $(".go_next img").attr('src','../img/go_left_true.png');
                 }
             }
         });
	  }      
  });
})
  

</script>
</body>
</html>