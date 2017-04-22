<?php
$sql3="select * from function01_cms_data where ( s4 like '%@@%||%||Y||%@@%@@%' or s4 like '%@@%||%||Y||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%@@%@@%' ) and cmsid in ($cmsid) and clientid='$clientid' and approved='Y' and status='A' and concat(yyyy,'',mm,'',dd,'',hh,'',ii,'',ss) < sysdate()+1-1 order by ord desc, yyyy desc, mm desc, dd desc, hh desc, ii desc, ss desc limit 0,3";
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

  $yyyy=$row3["yyyy"];
  $mm=$row3["mm"];
  $dd=$row3["dd"];

  if ($cmsid_temp=="2") {
    echo "<li><span>".$yyyy."/".$mm."/".$dd."</span><a href='activities_news_detail.php?id=".$itemid."'>".$item."</a></li>\n";
  } else {
    echo "<li><span>".$yyyy."/".$mm."/".$dd."</span><a href='news_detail.php?id=".$itemid."'>".$item."</a></li>\n";
  }
}
?>