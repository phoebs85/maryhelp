<?php
$break = explode('/', $_SERVER["SCRIPT_NAME"]);
$location=$break[count($break) - 1];

$aboutMenuArray = array("alumni_about.php");
$promotionMenuArray = array("alumni_promotion.php");
$seniorMenuArray = array("alumni_senior.php");
$newsMenuArray = array("alumni_news.php","alumni_news_detail.php");
$supportMenuArray = array("alumni_support.php");
$activyMenuArray = array("alumni_activy.php","alumni_activy_detail.php");
$shareMenuArray = array("alumni_share.php");
$contactMenuArray = array("alumni_contact.php");
?> 
    <div class="main_left">
      <ul class="nav alumni_nav_e">
        <li class="<?php if(in_array($location, $aboutMenuArray)) echo 'about on';else echo'about'?>"><a href="alumni_about.php" title="About Us"></a></li>
        <li class="<?php if(in_array($location, $promotionMenuArray)) echo 'promotion on';else echo'promotion'?>"><a href="alumni_promotion.php" title="Academic Enhancement Program"></a></li>
        <li class="<?php if(in_array($location, $seniorMenuArray)) echo 'senior on';else echo'senior'?>"><a href="alumni_senior.php" title="Mentorship Program"></a></li>
        <li class="<?php if(in_array($location, $newsMenuArray)) echo 'news on';else echo'news'?>"><a href="alumni_news.php" title="Announcements"></a></li>
        <li class="<?php if(in_array($location, $supportMenuArray)) echo 'support on';else echo 'support'?>"><a href="alumni_support.php" title="Support"></a></li>
        <li class="<?php if(in_array($location, $activyMenuArray)) echo 'activy on';else echo'activy'?>"><a href="alumni_activy.php" title="Events"></a></li>
        <li class="<?php if(in_array($location, $shareMenuArray)) echo 'share on';else echo'share'?>"><a href="alumni_share.php" title="Sharing"></a></li>
        <li class="<?php if(in_array($location, $contactMenuArray)) echo 'contact on';else echo'contact'?>"><a href="alumni_contact.php" title="Contact Us"></a></li>
      </ul>
      <a href="../index.php" class="friends" target="_self"><img src="images/btn1.png" /></a>
      
    </div>
<script type="text/javascript">
$(function(){  
  $(".nav > li:has(ul)").hover(function(){  
		$(this).addClass("hot")
		$(this).children("ul").stop(true,true).show();  
	},function(){
		$(this).removeClass("hot");   
		$(this).children("ul").stop(true,true).hide();   
  });
});
</script>    