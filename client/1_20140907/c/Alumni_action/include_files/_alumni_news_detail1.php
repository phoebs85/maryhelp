<?php
$itemid=$_GET['id'];
$sql3="select * from function01_cms_data where itemid='$itemid' and s4 like '%@@%||%||%||Y||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%||%@@%' and cmsid in ($cmsid) and clientid='$clientid' and approved='Y' and status='A' and concat(yyyy,'',mm,'',dd,'',hh,'',ii,'',ss) < sysdate()+1-1 order by ord desc, yyyy desc, mm desc, dd desc, hh desc, ii desc, ss desc";
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
  $desc=$content_array2[1];

  $attachment1_name=$content_array2[4];
  $attachment1=$content_array2[5];
  $attachment2_name=$content_array2[6];
  $attachment2=$content_array2[7];
  $attachment3_name=$content_array2[8];
  $attachment3=$content_array2[9];
  $attachment4_name=$content_array2[10];
  $attachment4=$content_array2[11];
  $attachment5_name=$content_array2[12];
  $attachment5=$content_array2[13];

  $link1_name=$content_array2[14];
  $link1=$content_array2[15];
  $link2_name=$content_array2[16];
  $link2=$content_array2[17];

  $image1=$content_array2[18];
  $image2=$content_array2[19];
  $image3=$content_array2[20];
  $image4=$content_array2[21];
  $image5=$content_array2[22];
  $image6=$content_array2[23];
  $image7=$content_array2[24];
  $image8=$content_array2[25];
  $image9=$content_array2[26];
  $image10=$content_array2[27];

  $yyyy=$row3['yyyy'];
  $mm=$row3['mm'];
  $dd=$row3['dd'];
  
  $attachment1_desc="<p><a href='../../attachment/".$attachment1."' target='_blank'>".$attachment1_name."</a></p>";
  $desc=str_replace("{ATTACHMENT1}",$attachment1_desc,$desc);
  $attachment2_desc="<p><a href='../../attachment/".$attachment2."' target='_blank'>".$attachment2_name."</a></p>";
  $desc=str_replace("{ATTACHMENT2}",$attachment2_desc,$desc);
  $attachment3_desc="<p><a href='../../attachment/".$attachment3."' target='_blank'>".$attachment3_name."</a></p>";
  $desc=str_replace("{ATTACHMENT3}",$attachment3_desc,$desc);
  $attachment4_desc="<p><a href='../../attachment/".$attachment4."' target='_blank'>".$attachment4_name."</a></p>";
  $desc=str_replace("{ATTACHMENT4}",$attachment4_desc,$desc);
  $attachment5_desc="<p><a href='../../attachment/".$attachment5."' target='_blank'>".$attachment5_name."</a></p>";
  $desc=str_replace("{ATTACHMENT5}",$attachment5_desc,$desc);

  $link1_desc="<p><a href='".$link1."' target='_blank'>".$link1_name."</a></p>";
  $desc=str_replace("{ATTACHMENT1}",$link1_desc,$desc);
  $link2_desc="<p><a href='".$link2."' target='_blank'>".$link2_name."</a></p>";
  $desc=str_replace("{ATTACHMENT2}",$link2_desc,$desc);

  $sizelimit="650";
  
  $image1size=getimagesize("../../attachment/".$image1);
  if ($image1size[0]>$sizelimit) {
    $image1_desc="<img src='../../attachment/".$image1."'/>";
  } else {
    $image1_desc="<img src='../../attachment/".$image1."' width='".$sizelimit."' />";
  }
  $desc=str_replace("{IMAGE1}",$image1_desc,$desc);

  $image2size=getimagesize("../../attachment/".$image2);
  if ($image2size[0]>$sizelimit) {
    $image2_desc="<img src='../../attachment/".$image2."'/>";
  } else {
    $image2_desc="<img src='../../attachment/".$image2."' width='".$sizelimit."' />";
  }
  $desc=str_replace("{IMAGE2}",$image2_desc,$desc);

  $image3size=getimagesize("../../attachment/".$image3);
  if ($image3size[0]>$sizelimit) {
    $image3_desc="<img src='../../attachment/".$image3."'/>";
  } else {
    $image3_desc="<img src='../../attachment/".$image3."' width='".$size3imit."' />";
  }
  $desc=str_replace("{IMAGE3}",$image3_desc,$desc);

  $image4size=getimagesize("../../attachment/".$image4);
  if ($image4size[0]>$sizelimit) {
    $image4_desc="<img src='../../attachment/".$image4."'/>";
  } else {
    $image4_desc="<img src='../../attachment/".$image4."' width='".$sizelimit."' />";
  }
  $desc=str_replace("{IMAGE4}",$image4_desc,$desc);

  $image5size=getimagesize("../../attachment/".$image5);
  if ($image5size[0]>$sizelimit) {
    $image5_desc="<img src='../../attachment/".$image5."'/>";
  } else {
    $image5_desc="<img src='../../attachment/".$image5."' width='".$sizelimit."' />";
  }
  $desc=str_replace("{IMAGE5}",$image5_desc,$desc);

  $image6size=getimagesize("../../attachment/".$image6);
  if ($image6size[0]>$sizelimit) {
    $image6_desc="<img src='../../attachment/".$image6."'/>";
  } else {
    $image6_desc="<img src='../../attachment/".$image6."' width='".$sizelimit."' />";
  }
  $desc=str_replace("{IMAGE6}",$image6_desc,$desc);

  $image7size=getimagesize("../../attachment/".$image7);
  if ($image7size[0]>$sizelimit) {
    $image7_desc="<img src='../../attachment/".$image7."'/>";
  } else {
    $image7_desc="<img src='../../attachment/".$image7."' width='".$sizelimit."' />";
  }
  $desc=str_replace("{IMAGE7}",$image7_desc,$desc);

  $image8size=getimagesize("../../attachment/".$image8);
  if ($image8size[0]>$sizelimit) {
    $image8_desc="<img src='../../attachment/".$image8."'/>";
  } else {
    $image8_desc="<img src='../../attachment/".$image8."' width='".$sizelimit."' />";
  }
  $desc=str_replace("{IMAGE8}",$image8_desc,$desc);

  $image9size=getimagesize("../../attachment/".$image9);
  if ($image9size[0]>$sizelimit) {
    $image9_desc="<img src='../../attachment/".$image9."'/>";
  } else {
    $image9_desc="<img src='../../attachment/".$image9."' width='".$sizelimit."' />";
  }
  $desc=str_replace("{IMAGE9}",$image9_desc,$desc);

  $image10size=getimagesize("../../attachment/".$image10);
  if ($image10size[0]>$sizelimit) {
    $image10_desc="<img src='../../attachment/".$image10."'/>";
  } else {
    $image10_desc="<img src='../../attachment/".$image10."' width='".$sizelimit."' />";
  }
  $desc=str_replace("{IMAGE10}",$image10_desc,$desc);
}
?>