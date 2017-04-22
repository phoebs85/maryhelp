<?php
$sql2="select yyyy,count(yyyy) from function01_cms_data where cmsid in ($cmsid) and clientid='$clientid' and approved='Y' and status='A' and concat(yyyy,'',mm,'',dd,'',hh,'',ii,'',ss) < sysdate()+1-1 group by yyyy order by yyyy desc, mm desc, dd desc, hh desc, ii desc, ss desc";
$result2=mysql_query($sql2);
while ($row2=mysql_fetch_assoc($result2)) {
  $year=$row2['yyyy'];
  $counter++;
  
  if (!isset($_GET['year'])) {
    if ($counter=="1") {
      $class="first on";
    } else {
      $class="first";
    }    
  } else {
    if ($_GET['year']==$year){
      $class="first on";
    } else {
      $class="first";
    }
  }

  echo "<li class='".$class."' onclick=\"javascript:window.location.href='?year=".$year."'\"><a>".$year."年</a></li>\n";
}
?>
