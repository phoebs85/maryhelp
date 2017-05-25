<?php

$break = explode('/', $_SERVER["SCRIPT_NAME"]);

$location=$break[count($break) - 1];



$homeMenuArray = array("index.php");

$aboutMenuArray = array("ab_history.php","ab_committee.php","ab_members.php","ab_alumni.php","ab_family.php","ab_support.php");

$actionMenuArray = array("activities.php","activities_news_detail.php");

$newsMenuArray = array("news.php","news_detail.php");

$promotionMenuArray = array("ab_promotion.php");

$seniorMenuArray = array("ab_senior.php");

$meetingMenuArray = array("meeting.php");

$photosMenuArray = array("photos.php","photos_detail.php");

$supportMenuArray = array("support.php");

$shareMenuArray = array("ab_share.php");

$contactMenuArray = array("contact.php");

?>

    <div class="main_left">

      <ul class="nav">

        <li class="<?php if(in_array($location, $homeMenuArray)) echo 'home on';else echo'home'?>"><a href="index.php" title="主頁"></a></li>

        <li class="<?php if(in_array($location, $aboutMenuArray)) echo 'about on';else echo'about'?>"><a href="ab_aboutus.php" title="關於我們"></a>

          <ul>

            <li><a href="ab_aboutus.php"><span>-</span> 關於聖母書院舊生會</a></li>

            <li><a href="ab_history.php"><span>-</span> 歷史</a></li>

            <li><a href="ab_mission.php"><span>-</span> 宗旨</a></li>

            <li><a href="ab_structure.php"><span>-</span> 總會及支會架構</a></li>

            <li><a href="ab_emblem.php"><span>-</span> 會徽、會章 及週年大會</a></li>

            <li><a href="ab_committee.php"><span>-</span> 幹事會成員</a></li>

            <li><a href="ab_members.php"><span>-</span> 會員</a></li>

            <li><a href=""><span>-</span> 聖母書院校友會基金有限公司</a></li>
            
          </ul>

        </li>

        <li class="<?php if(in_array($location, $newsMenuArray)) echo 'news on';else echo'news'?>"><a href="news.php" title="最新消息"></a></li>

        <li class="<?php if(in_array($location, $promotionMenuArray)) echo 'promotion on';else echo'promotion'?>"><a href="ab_promotion.php" title="學術提升計劃"></a></li>

        <li class="<?php if(in_array($location, $seniorMenuArray)) echo 'senior on';else echo'senior'?>"><a href="ab_senior.php" title="學長計劃"></a>

          <ul>

            <li><a href="ab_senior.php"><span>-</span> 計劃簡介</a></li>

            <li><a href="ab_activy.php"><span>-</span> 活動</a></li>

          </ul>

        </li>

        <li class="<?php if(in_array($location, $actionMenuArray)) echo 'action on';else echo'action'?>"><a href="activities.php" title="活動"></a></li>

        <li class="<?php if(in_array($location, $meetingMenuArray)) echo 'meeting on';else echo'meeting'?>"><a href="meeting.php" title="會訊"></a></li>

        <li class="<?php if(in_array($location, $photosMenuArray)) echo 'photos on';else echo'photos'?>"><a href="photos.php" title="相片集"></a></li>

        <li class="<?php if(in_array($location, $supportMenuArray)) echo 'support on';else echo'support'?>"><a href="support.php" title="支持"></a></li>

        <li class="<?php if(in_array($location, $shareMenuArray)) echo 'share on';else echo'share'?>"><a href="ab_share.php" title="校友分享"></a></li>

        <li class="<?php if(in_array($location, $contactMenuArray)) echo 'contact on';else echo'contact'?>"><a href="contact.php" title="聯絡我們"></a></li>

      </ul>

      <!--<a href="Alumni_action/alumni_index.php" class="friends" target="_self"><img src="img/friends.png" width="168" height="44" /></a>//-->

      <div class="action_movies">

        <h3><img src="img/tv_title.png" width="120" height="19" /></h3>

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

  $(".nav > li:has(ul)").hover(function(){

		$(this).addClass("hot")

		$(this).children("ul").stop(true,true).show();

	},function(){

		$(this).removeClass("hot");

		$(this).children("ul").stop(true,true).hide();

  });

});

</script>
