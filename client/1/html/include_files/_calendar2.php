<?php 
$count="0";
rsort($date_array);
foreach ($date_array as $date) {
	$count++;
  $sql1="select * from function01_cms_data where s4 like '%@@%||%||Y||%@@%' and cmsid in ($cmsid) and clientid='$clientid' and approved='Y' and status='A' and yyyy='$year' and mm='$month' and dd='$date' order by dd asc";
  $result1=mysql_query($sql1);
  
  if ($count=="1") {
    echo "<div id='nlt".$date."' style='display:block;' class='last_news'>\n";
  } else {
    echo "<div id='nlt".$date."' style='display:none;' class='last_news'>\n";
  }

  while ($row1=mysql_fetch_assoc($result1)) {
    $itemid=$row1["itemid"];
    $cmsid_temp=$row1["cmsid"];
    $content=$row1["s4"];
    $content_array=split('[@][@]', $content);
    $content_array2=split('[||][||]', $content_array[$lang_no]);
    $item=$content_array2[0];
    $desc=strip_tags($content_array2[1]);

    if (mb_strlen($desc, "utf-8")>100) {
      $desc=mb_substr($desc, 0, 100, "utf-8")." ...";
    } else {
      $desc=$desc;
    }
      
    $yyyy=$row1['yyyy'];
    $mm=$row1['mm'];
    $dd=$row1['dd'];

    echo "  <h4><img src='img/last_event_h3.png' width='93' height='20' /></h4>\n";
    echo "  <h5><a href='activities_news_detail.php?id=".$itemid."' target='_parent'>".$item."</a><span>".$yyyy."年".$mm."月".$dd."日</span></h5>\n";
    echo "  <p>".$desc."</p>\n";
    echo "  <p><a href='activities_news_detail.php?id=".$itemid."' class='more' target='_parent'>+ 更多</a></p>\n";
   
  }
  
  echo "            </div>\n";
}
?>