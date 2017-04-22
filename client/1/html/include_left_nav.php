<?php

$break = explode('/', $_SERVER["SCRIPT_NAME"]);

$location=$break[count($break) - 1];



$homeMenuArray = array("index.php");

$aboutMenuArray = array("ab_history.php","ab_committee.php","ab_members.php","ab_alumni.php","ab_family.php","ab_support.php");

$actionMenuArray = array("activities.php","activities_news_detail.php"); 

$newsMenuArray = array("news.php","news_detail.php"); 

$meetingMenuArray = array("meeting.php");

$photosMenuArray = array("photos.php","photos_detail.php");

$supportMenuArray = array("support.php");

$contactMenuArray = array("contact.php");

?> 

    <div class="main_left">

      <ul class="nav_e">

        <li class="<?php if(in_array($location, $homeMenuArray)) echo 'home on';else echo'home'?>"><a href="index.php" title="Home"></a></li>

        <li class="<?php if(in_array($location, $aboutMenuArray)) echo 'about on';else echo'about'?>"><a href="ab_family.php" title="About Us"></a>

           <ul>

           	<li><a href="ab_family.php"><span>-</span> FMA</a></li>

            <li><a href="ab_history.php"><span>-</span> History</a></li>

            <li><a href="ab_committee.php"><span>-</span> Committee Member</a></li>

            <li><a href="ab_members.php"><span>-</span> Membership</a></li>

            <li><a href="Alumni_action/alumni_index.php"><span>-</span> AinA</a></li>

            

          </ul>

        </li>

        <li class="<?php if(in_array($location, $newsMenuArray)) echo 'news on';else echo'news'?>"><a href="news.php" title="News and Announcements"></a></li>

        <li class="<?php if(in_array($location, $actionMenuArray)) echo 'action on';else echo'action'?>"><a href="activities.php" title="Activities"></a></li>

        <li class="<?php if(in_array($location, $meetingMenuArray)) echo 'meeting on';else echo'meeting'?>"><a href="meeting.php" title="News Letter"></a></li>

        <li class="<?php if(in_array($location, $photosMenuArray)) echo 'photos on';else echo'photos'?>"><a href="photos.php" title="Albums"></a></li>

        <li class="<?php if(in_array($location, $supportMenuArray)) echo 'support on';else echo'support'?>"><a href="support.php" title="Support"></a></li>

        <li class="<?php if(in_array($location, $contactMenuArray)) echo 'contact on';else echo'contact'?>"><a href="contact.php" title="Contact Us"></a></li>

      </ul>

      <a href="Alumni_action/alumni_index.php" class="friends" target="_self"><img src="img/friends.png" width="168" height="44" /></a>

      <div class="action_movies">

        <h3><img src="img/tv_title.png" /></h3>

        <div class="movies"><a href="../jwplayer/video.php" class="video_show"><img src="../img/tv_img.png" /></a></div>

        <ul>

        	

          	<?php include "include_files/_include_left_nav0.php"; ?>

          	<?php include "include_files/_include_left_nav1.php"; ?>

        	

<!--          <li><span>2012/11/28</span><a href="#" target="_blank">60週年校慶晚宴</a></li>

          <li class="last"><span>2012/11/28</span><a href="#" target="_blank">母佑舊同學會周年聚餐相片...</a></li>-->

        </ul>

      </div>

    </div>

<script type="text/javascript">

$(function(){  

  $(".nav_e > li:has(ul)").hover(function(){  

		$(this).addClass("hot")

		$(this).children("ul").stop(true,true).show();  

	},function(){

		$(this).removeClass("hot");   

		$(this).children("ul").stop(true,true).hide();   

  });

});

</script>  