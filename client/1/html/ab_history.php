<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mary Help of Christians Past Pupils Association</title>
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
          <span class="loca">Home <span class="lin">></span> About Us <span class="lin">></span> <span class="now">History</span></span>
          <!--
          <ul>
          	<li class="<?php if($location=='ab_family.php') echo'on'?>"><a href="ab_family.php">FMA</a></li>
            <li class="<?php if($location=='ab_history.php') echo'on'?>"><a href="ab_history.php">History</a></li>
            <li class="<?php if($location=='ab_committee.php') echo'on'?>"><a href="ab_committee.php">Committee Member</a></li>
            <li class="<?php if($location=='ab_members.php') echo'on'?>"><a href="ab_members.php">Membership</a></li>
            <li class="<?php if($location=='ab_alumni.php') echo'on'?>"><a href="Alumni_action/alumni_index.php">AinA</a></li>
            <li class="<?php if($location=='ab_support.php') echo'on'?>"><a href="ab_support.php">支持</a></li>
          </ul>
          //-->
        </div>
        <div class="page_main">
          <h3><img src="img/ab_history_h3.png" height="26" /></h3>
          <div class="text">
          	 <p>The World Confederation of the Past Pupils of Daughters of Mary Help of Christians was founded in 1908 by Father Rinaldi, the fourth successor of San Giovanni Bosco . The mission of the association  is to promote the teachings of San Giovanni Bosco on unity: "You have to unite and help each other." </p>
            <p>The Assoicationis now an international organization, serving several hundred thousands of people in over sixty countries. One of the Superior Generals from the General Council of the Daughters of Mary Help of Christians is in charge of the affairs concerning the Association. </p>
            <p>Our Lady College’s Past Pupils Association was established in June 1965.We currently have more than 5,000 past pupils in our network.</p>

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
