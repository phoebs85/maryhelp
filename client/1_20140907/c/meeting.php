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

        <img src="../img/newsletter.jpg" width="720" height="135" /> 

      </div>

      <div class="page_box activity">

        <div class="instructions"> 

          <span class="loca">主頁 <span class="lin">></span> <span class="now">會訊</span></span>          

        </div>

        

        <?php include "include_files/_meeting0.php"; ?>

        <?php include "include_files/_meeting1.php"; ?>

        

        <div class="page_main meeting">

          <h3><img src="img/meeting_h3.png" width="154" height="26" /></h3>



          <div class="go_prev" onclick="javascript:;" style="float: left; padding-top: 5px; cursor: pointer;"><img src="../img/go_right_false.png" ></div>

          <div class="top_year">

              <ul class="year" id="yearlist" style="left:0;">



        <?php include "include_files/_meeting2.php"; ?>



<!--                  <li class="<?php if(!$_GET["year"] || $_GET["year"]==2014) echo"first on";else echo "first"?>" onclick="javascript:window.location.href='meeting.php?year=2014'"><a>2014年</a></li>



                  <li class="<?php if($_GET["year"]==2013) echo"on"?>" onclick="javascript:window.location.href='meeting.php?year=2013'"><a>2013年</a></li>



                  <li class="<?php if($_GET["year"]==2012) echo"on"?>" onclick="javascript:window.location.href='meeting.php?year=2012'"><a>2012年</a></li>



                  <li class="<?php if($_GET["year"]==2011) echo"on"?>" onclick="javascript:window.location.href='meeting.php?year=2011'"><a>2011年</a></li>

                  <li class="<?php if($_GET["year"]==2010) echo"on"?>" onclick="javascript:window.location.href='meeting.php?year=2010'"><a>2010年</a></li>

                  <li class="<?php if($_GET["year"]==2009) echo"on"?>" onclick="javascript:window.location.href='meeting.php?year=2009'"><a>2009年</a></li>

                  <li class="<?php if($_GET["year"]==2008) echo"on"?>" onclick="javascript:window.location.href='meeting.php?year=2008'"><a>2008年</a></li>

-->

              </ul>

            </div>

          <div class="go_next" onclick="javascript:;" style="float: right; padding-top: 5px; margin-right:18px; cursor: pointer;"><img src="../img/go_left_false.png" ></div>

          <div class="text">

          

          <div class="text">



        <?php include "include_files/_meeting3.php"; ?>

          

<!--            <div class="model">

            	<div class="h_img"><a href="img/Oct12newsletter.pdf" target="_new"><img src="img/m_1.jpg" /> <br />二零一四年三月號會訊</a></div>

            </div>

-->            

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

$(".meeting .model .h_img img").mouseover(function(){

		$(this).css('border-color','#F00')

			});

			$(".meeting .model .h_img img").mouseout(function(){

				$(this).css('border-color','#ffffff')

		})

		$(".meeting .model .h_img a").mouseover(function(){

		$(this).parent().parent().find(".h_img img").css('border-color','#F00')

			});

			$(".meeting .model .h_img a").mouseout(function(){

				$(this).parent().parent().find(".h_img img").css('border-color','#ffffff')

		})

</script>

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