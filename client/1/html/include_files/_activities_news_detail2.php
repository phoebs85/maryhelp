<?php
$cmsid="3";
$sql1="select * from function01_cms_data where linkage='$itemid' and cmsid in ($cmsid) and clientid='$clientid' and approved='Y' and status='A' order by ord desc";
$result1=mysql_query($sql1);
while ($row1=mysql_fetch_assoc($result1)) {
  $itemid=$row1["itemid"];
  $cmsid_temp=$row1["cmsid"];
  $content=$row1["s4"];
  $content_array=split('[@][@]', $content);
  $content_array2=split('[||][||]', $content_array[$lang_no]);
  $item=$content_array2[0];
  $image01=$content_array2[1];
  $image02=$content_array2[2];
  $image03=$content_array2[3];
  $image04=$content_array2[4];
  $image05=$content_array2[5];
  $image06=$content_array2[6];
  $image07=$content_array2[7];
  $image08=$content_array2[8];
  $image09=$content_array2[9];
  $image10=$content_array2[10];
  
  if (($image01!="")&&($image01!="##")) { $count++; 
    if ($count%4=="0") {
      echo "<li class='last'><a class='photo' href='../attachment/".$image01."'><img src='../attachment/".$image01."' width='162' height='99' /></a></li>\n";
    } else {
      echo "<li><a class='photo' href='../attachment/".$image01."'><img src='../attachment/".$image01."' width='162' height='99' /></a></li>\n";
    }
  }

  if (($image02!="")&&($image02!="##")) { $count++;
    if ($count%4=="0") {
      echo "<li class='last'><a class='photo' href='../attachment/".$image02."'><img src='../attachment/".$image02."' width='162' height='99' /></a></li>\n";
    } else {
      echo "<li><a class='photo' href='../attachment/".$image02."'><img src='../attachment/".$image02."' width='162' height='99' /></a></li>\n";
    }
  }

  if (($image03!="")&&($image03!="##")) { $count++;
    if ($count%4=="0") {
      echo "<li class='last'><a class='photo' href='../attachment/".$image03."'><img src='../attachment/".$image03."' width='162' height='99' /></a></li>\n";
    } else {
      echo "<li><a class='photo' href='../attachment/".$image03."'><img src='../attachment/".$image03."' width='162' height='99' /></a></li>\n";
    }
  }

  if (($image04!="")&&($image04!="##")) { $count++;
    if ($count%4=="0") {
      echo "<li class='last'><a class='photo' href='../attachment/".$image04."'><img src='../attachment/".$image04."' width='162' height='99' /></a></li>\n";
    } else {
      echo "<li><a class='photo' href='../attachment/".$image04."'><img src='../attachment/".$image04."' width='162' height='99' /></a></li>\n";
    }
  }

  if (($image05!="")&&($image05!="##")) { $count++;
    if ($count%4=="0") {
      echo "<li class='last'><a class='photo' href='../attachment/".$image05."'><img src='../attachment/".$image05."' width='162' height='99' /></a></li>\n";
    } else {
      echo "<li><a class='photo' href='../attachment/".$image05."'><img src='../attachment/".$image05."' width='162' height='99' /></a></li>\n";
    }
  }

  if (($image06!="")&&($image06!="##")) { $count++;
    if ($count%4=="0") {
      echo "<li class='last'><a class='photo' href='../attachment/".$image06."'><img src='../attachment/".$image06."' width='162' height='99' /></a></li>\n";
    } else {
      echo "<li><a class='photo' href='../attachment/".$image06."'><img src='../attachment/".$image06."' width='162' height='99' /></a></li>\n";
    }
  }

  if (($image07!="")&&($image07!="##")) { $count++;
    if ($count%4=="0") {
      echo "<li class='last'><a class='photo' href='../attachment/".$image07."'><img src='../attachment/".$image07."' width='162' height='99' /></a></li>\n";
    } else {
      echo "<li><a class='photo' href='../attachment/".$image07."'><img src='../attachment/".$image07."' width='162' height='99' /></a></li>\n";
    }
  }
  
  if (($image08!="")&&($image08!="##")) { $count++;
    if ($count%4=="0") {
      echo "<li class='last'><a class='photo' href='../attachment/".$image08."'><img src='../attachment/".$image08."' width='162' height='99' /></a></li>\n";
    } else {
      echo "<li><a class='photo' href='../attachment/".$image08."'><img src='../attachment/".$image08."' width='162' height='99' /></a></li>\n";
    }
  }

  if (($image09!="")&&($image09!="##")) { $count++;
    if ($count%4=="0") {
      echo "<li class='last'><a class='photo' href='../attachment/".$image09."'><img src='../attachment/".$image09."' width='162' height='99' /></a></li>\n";
    } else {
      echo "<li><a class='photo' href='../attachment/".$image09."'><img src='../attachment/".$image09."' width='162' height='99' /></a></li>\n";
    }
  }

  if (($image10!="")&&($image10!="##")) { $count++;
    if ($count%4=="0") {
      echo "<li class='last'><a class='photo' href='../attachment/".$image10."'><img src='../attachment/".$image10."' width='162' height='99' /></a></li>\n";
    } else {
      echo "<li><a class='photo' href='../attachment/".$image10."'><img src='../attachment/".$image10."' width='162' height='99' /></a></li>\n";
    }
  }
}
?>