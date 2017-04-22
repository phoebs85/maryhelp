<?php
$timestamp = mktime(0,0,0,$month,1,$year);
$maxday = date("t",$timestamp);
$thismonth = getdate ($timestamp);
$startday = $thismonth['wday'];
$endday=7-($maxday+$startday)%7;
if ($endday=="7") {
  $endday="0";
}

$sql1="select * from function01_cms_data where s4 like '%@@%||%||Y||%@@%' and cmsid in ($cmsid) and clientid='$clientid' and approved='Y' and status='A' and yyyy='$year' and mm='$month' order by dd desc";
$result1=mysql_query($sql1);
while ($row1=mysql_fetch_assoc($result1)) {
  $dd=$row1['dd'];
  $cmsid_temp=$row1['cmsid'];
  if (!is_array(${date.$dd})) {
    ${date.$dd}=array();
  }
  array_push(${date.$dd},$cmsid_temp);
}

$date_array=array();
for ($i=0; $i<($maxday+$startday+$endday); $i++) {
  $class1="";
  $class2="";
  if (($i % 7) == 0 ) {
    echo "<tr>\n";
  }

  if ((($i % 7) == 0 )||(($i % 7) == 6 )) {
    $class1="weekend";
  }

  if ($i < $startday) {
    echo "<td>&nbsp;</td>\n";
  } elseif ($i < $maxday+$startday) {
    $day=$i - $startday + 1;
    if (strlen($day)=="1") {
      $tipday="0".$day;
    } else {
      $tipday=$day;
    }

    $checksunday= date("w",mktime(0,0,0,$month,$day,$year));
    
    if (is_array(${date.$tipday})) {
    	array_push($date_array,$tipday);
    	$class2="on";

      echo "<td class='".$class1." ".$class2."' onmousemove=\"javascript:tabDiv('nlt',".$tipday.",31,'liover','liout')\">".$day."</td>\n";
    } else {
      echo "<td class='".$class1."'>".$day."</td>\n";
    }
  } elseif ($i < $maxday+$startday+$endday){
    echo "<td>&nbsp;</td>\n";
  }

  if (($i % 7) == 6 ) {
    echo "</tr>\n";
  }
} 
?>  