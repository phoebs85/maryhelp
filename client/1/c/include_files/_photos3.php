<?php
$sql3="select * from function01_cms_data where yyyy='$yyyy' and cmsid in ($cmsid) and clientid='$clientid' and approved='Y' and status='A' and concat(yyyy,'',mm,'',dd,'',hh,'',ii,'',ss) < sysdate()+1-1 order by ord desc, yyyy desc, mm desc, dd desc, hh desc, ii desc, ss desc";
$result3=mysql_query($sql3);
$count3=mysql_num_rows($result3);
if ($count3=="0") {
  echo "即將推出\n";
}
while ($row3=mysql_fetch_assoc($result3)) {
  $itemid=$row3["itemid"];
  $cmsid_temp=$row3["cmsid"];
  $content=$row3["s4"];
  $content_array=split('[@][@]', $content);
  $content_array2=split('[||][||]', $content_array[$lang_no]);
  $item=$content_array2[0];
  if (mb_strlen($item, "utf-8")>28) {
    $item=mb_substr($item, 0, 28, "utf-8")." ...";
  } else {
    $item=$item;
  }
  $yyyy=$row3['yyyy'];
  $mm=$row3['mm'];
  $dd=$row3['dd'];

  echo "<div class='box p_box' style='height:200px;'>\n";
  echo "  <p class='img'><a href='photos_detail.php?id=".$itemid."'>\n";
  $sql4="select * from function01_cms_data where linkage='$itemid' and cmsid in ($cmsid2) and clientid='$clientid' and approved='Y' and status='A' and concat(yyyy,'',mm,'',dd,'',hh,'',ii,'',ss) < sysdate()+1-1 order by ord asc limit 0,1";
  $result4=mysql_query($sql4);
  $count4=mysql_num_rows($result4);
  if ($count4>"0") {
    while ($row4=mysql_fetch_assoc($result4)) {
      $content2=$row4["s4"];
      $content2_array=split('[@][@]', $content2);
      $content2_array2=split('[||][||]', $content2_array[$lang_no]);
      $image=$content2_array2[1];
    }
  } else {
    $image="";
  }
  echo "  <img src='../attachment/".$image."' width='160' height='120' />\n";
  
  echo "  <strong>".$item."</strong>".$yyyy."年".$mm."月".$dd."日</a></p>\n";
  echo "</div>\n";
}
?>