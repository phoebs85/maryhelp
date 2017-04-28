<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mary Help of Christians Past Pupils Association</title>
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
<?php include"include_top.php"?>
<div class="content page">
  <div class="main wrap clearfix">
    <?php include"include_left_nav.php"?>
    <div class="main_right">
      <div class="slide">

        <a class="img"><img src="Alumni_action/images/page_activities_baner.jpg"  width="720" height="135"/></a>

      </div>

      <div class="page_box">

        <div class="instructions">

          <span class="loca">Home <span class="lin">></span> Mentorship Program <span class="lin">></span> <span class="now">Events</span></span>

        </div>

        <div class="page_main alumni_activy">

        	<h3><img src="Alumni_action/images/tit6.png" height="29" /></h3>

            <div class="text">

            <ul>

            	<?php include "Alumni_action/include_files/_alumni_activy0.php"; ?>

            	<?php include "Alumni_action/include_files/_alumni_activy1.php"; ?>


            </ul>



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
