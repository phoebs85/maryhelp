<?php
include "../../../lib/dbconnect.php";
$cmsid="2";
$clientid="1";
$lang_no="1";
                    
if (!isset($_GET['year'])) {
	$sql1="select max(yyyy) from function01_cms_data where s4 like '%@@%||%||Y||%@@%@@%@@%' and cmsid in ($cmsid) and clientid='$clientid' and approved='Y' and status='A'";
  $result1=mysql_query($sql1);
  while ($row1=mysql_fetch_assoc($result1)) {
    $year=$row1['max(yyyy)'];
	}
//  $year=date('Y');
} else {
  $year=$_GET['year'];
}

if (!isset($_GET['month'])) {
	$sql2="select max(mm) from function01_cms_data where yyyy='$year' and s4 like '%@@%||%||Y||%@@%@@%@@%' and cmsid in ($cmsid) and clientid='$clientid' and approved='Y' and status='A'";
  $result2=mysql_query($sql2);
  while ($row2=mysql_fetch_assoc($result2)) {
    $month=$row2['max(mm)'];
	}
//  $month=date('m');
  $fullmonth=date("M", mktime(0, 0, 0, $month, 1, 1));
} else {
  $month=$_GET['month'];
  $fullmonth=date("M", mktime(0, 0, 0, $_GET['month'], 1, 1));
}

if ($month=="01") {
  $preyear=$year-1;
  $premonth="12";
  $nextyear=$year;
  $nextmonth="02";
} elseif ($month=="12") {
  $preyear=$year;
  $premonth="11";
  $nextyear=$year+1;
  $nextmonth="01";
} else {
  $preyear=$year;
  $premonth=$month-1;
  $nextyear=$year;
  $nextmonth=$month+1;
}

if (strlen($premonth)=="1") {
  $premonth="0".$premonth;
}
if (strlen($nextmonth)=="1") {
  $nextmonth="0".$nextmonth;
}
?>
