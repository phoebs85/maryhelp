<?php
$itemid=$_GET['id'];
$sql1="select * from function01_cms_data where itemid='$itemid' and s4 like '%@@%||%||%||Y@@%@@%@@%' and cmsid in ($cmsid) and clientid='$clientid' and approved='Y' and status='A'";
$result1=mysql_query($sql1);
while ($row1=mysql_fetch_assoc($result1)) {
  $itemid=$row1["itemid"];
  $cmsid_temp=$row1["cmsid"];
  $content=$row1["s4"];
  $content_array=split('[@][@]', $content);
  $content_array2=split('[||][||]', $content_array[$lang_no]);
  $item=$content_array2[0];
  $desc=$content_array2[1];
    
  $yyyy=$row1['yyyy'];
  $mm=$row1['mm'];
  $dd=$row1['dd'];
}
?>