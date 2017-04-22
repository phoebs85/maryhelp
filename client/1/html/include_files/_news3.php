<?php

$sql3="select * from function01_cms_data where s4 like '%@@%||%||Y||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%@@%' and yyyy='$yyyy' and cmsid in ($cmsid) and clientid='$clientid' and approved='Y' and status='A' and concat(yyyy,'',mm,'',dd,'',hh,'',ii,'',ss) < sysdate()+1-1 order by ord desc, yyyy desc, mm desc, dd desc, hh desc, ii desc, ss desc";

$result3=mysql_query($sql3);

$count3=mysql_num_rows($result3);

if ($count3=="0") {

  echo "Coming Soon\n";

}

while ($row3=mysql_fetch_assoc($result3)) {

  $itemid=$row3["itemid"];

  $cmsid_temp=$row3["cmsid"];

  $content=$row3["s4"];

  $content_array=split('[@][@]', $content);

  $content_array2=split('[||][||]', $content_array[$lang_no]);

  $item=$content_array2[0];

  $image=$content_array2[1];

  $attachment=$content_array2[2];



  $yyyy=$row3['yyyy'];

  $mm=$row3['mm'];

  $dd=$row3['dd'];



  echo "<ul class='past_news'>\n";

  echo "  <li class='annou_date'>".$yyyy."年".$mm."月".$dd."日</li>\n";

  echo "  <li class='annou_txt'><a href='news_detail.php?id=".$itemid."'>".$item."</a></li>\n";

  echo "</ul>\n";

}

?>