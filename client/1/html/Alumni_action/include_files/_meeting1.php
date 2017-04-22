<?php
if (!isset($_GET['year'])||($_GET['year']=="")){
  $sql1="select max(yyyy) from function01_cms_data where cmsid in ($cmsid) and clientid='$clientid' and approved='Y' and status='A' and concat(yyyy,'',mm,'',dd,'',hh,'',ii,'',ss) < sysdate()+1-1 order by yyyy desc, mm desc, dd desc, hh desc, ii desc, ss desc";
  $result1=mysql_query($sql1);
  while ($row1=mysql_fetch_assoc($result1)) {
    $yyyy=$row1['max(yyyy)'];
  }
} else {
  $yyyy=$_GET['year'];
}
?>