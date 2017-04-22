<div class="top">
  <div class="wrap">
    <a href="index.php" class="logo"><img src="../img/logo_e.png" height="89" /></a>
    <div class="top_link_e"><a href="index.php" class="home"></a><a href="sitemap.php" class="map"></a><a href="contact.php" class="con"></a><a href="#" class="facebook"></a></div>
    <a href="http://www.olc.edu.hk" class="m_link_e"></a>
    <img class="logo2" src="../img/top_logo2.png" width="63" height="64" /> 
    <div class="langage"><a class="en"></a><a class="c" href="../c/<?php $break = explode('/', $_SERVER["SCRIPT_NAME"]); echo $break[count($break) - 1]; ?><?php if (isset($_GET['year'])) { echo "?year=".$_GET['year']; } ?><?php if (isset($_GET['id'])) { echo "?id=".$_GET['id']; } ?>"></a></div>
  </div>
</div>