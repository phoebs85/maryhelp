<?php
$itemid=$_GET['id'];
$sql3="select * from function01_cms_data where itemid='$itemid' and cmsid in ($cmsid) and clientid='$clientid' and approved='Y' and status='A' and concat(yyyy,'',mm,'',dd,'',hh,'',ii,'',ss) < sysdate()+1-1 order by ord desc, yyyy desc, mm desc, dd desc, hh desc, ii desc, ss desc";
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

  echo $item;
}
?>