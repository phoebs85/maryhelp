<?php
$count="0";
$cmsid="3";
$sql1="select * from function01_cms_data where linkage='$itemid' and cmsid in ($cmsid) and clientid='$clientid' and approved='Y' and status='A' order by ord desc";
$result1=mysql_query($sql1);
while ($row1=mysql_fetch_assoc($result1)) {
	$count++;
  $itemid=$row1["itemid"];
  $cmsid_temp=$row1["cmsid"];
  $content=$row1["s4"];
  $content_array=split('[@][@]', $content);
  $content_array2=split('[||][||]', $content_array[$lang_no]);
  $item=$content_array2[0];
  $image=$content_array2[1];

  if ($count%4=="0") {
    echo "<li class='last'><a class='photo' href='../../attachment/".$image."'><img src='../../attachment/".$image."' width='162' height='99' /></a></li>\n";
  } else {
    echo "<li><a class='photo' href='../../attachment/".$image."'><img src='../../attachment/".$image."' width='162' height='99' /></a></li>\n";
  }
}
?>