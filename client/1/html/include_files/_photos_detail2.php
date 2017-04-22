<?php
$sql4="select * from function01_cms_data where linkage='$itemid' and cmsid in ($cmsid2) and clientid='$clientid' and approved='Y' and status='A' and concat(yyyy,'',mm,'',dd,'',hh,'',ii,'',ss) < sysdate()+1-1 order by ord asc";
$result4=mysql_query($sql4);
$count4=mysql_num_rows($result4);
if ($count4>"0") {
  while ($row4=mysql_fetch_assoc($result4)) {
    $content2=$row4["s4"];
    $content2_array=split('[@][@]', $content2);
    $content2_array2=split('[||][||]', $content2_array[$lang_no]);
    $image01=$content2_array2[1];
    $image02=$content2_array2[2];
    $image03=$content2_array2[3];
    $image04=$content2_array2[4];
    $image05=$content2_array2[5];
    $image06=$content2_array2[6];
    $image07=$content2_array2[7];
    $image08=$content2_array2[8];
    $image09=$content2_array2[9];
    $image10=$content2_array2[10];
  
    if (($image01!="")&&($image01!="##")) {
      echo "<li><div class='box'>\n";
      echo "  <p class='img'><a class='photo' href='../attachment/".$image01."'><img src='../attachment/".$image01."' /></a></p>\n";
      echo "</div></li>\n";
    }

    if (($image02!="")&&($image02!="##")) {
      echo "<li><div class='box'>\n";
      echo "  <p class='img'><a class='photo' href='../attachment/".$image02."'><img src='../attachment/".$image02."' /></a></p>\n";
      echo "</div></li>\n";
    }

    if (($image03!="")&&($image03!="##")) {
      echo "<li><div class='box'>\n";
      echo "  <p class='img'><a class='photo' href='../attachment/".$image03."'><img src='../attachment/".$image03."' /></a></p>\n";
      echo "</div></li>\n";
    }

    if (($image04!="")&&($image04!="##")) {
      echo "<li><div class='box'>\n";
      echo "  <p class='img'><a class='photo' href='../attachment/".$image04."'><img src='../attachment/".$image04."' /></a></p>\n";
      echo "</div></li>\n";
    }

    if (($image05!="")&&($image05!="##")) {
      echo "<li><div class='box'>\n";
      echo "  <p class='img'><a class='photo' href='../attachment/".$image05."'><img src='../attachment/".$image05."' /></a></p>\n";
      echo "</div></li>\n";
    }

    if (($image06!="")&&($image06!="##")) {
      echo "<li><div class='box'>\n";
      echo "  <p class='img'><a class='photo' href='../attachment/".$image06."'><img src='../attachment/".$image06."' /></a></p>\n";
      echo "</div></li>\n";
    }

    if (($image07!="")&&($image07!="##")) {
      echo "<li><div class='box'>\n";
      echo "  <p class='img'><a class='photo' href='../attachment/".$image07."'><img src='../attachment/".$image07."' /></a></p>\n";
      echo "</div></li>\n";
    }

    if (($image08!="")&&($image08!="##")) {
      echo "<li><div class='box'>\n";
      echo "  <p class='img'><a class='photo' href='../attachment/".$image08."'><img src='../attachment/".$image08."' /></a></p>\n";
      echo "</div></li>\n";
    }

    if (($image09!="")&&($image09!="##")) {
      echo "<li><div class='box'>\n";
      echo "  <p class='img'><a class='photo' href='../attachment/".$image09."'><img src='../attachment/".$image09."' /></a></p>\n";
      echo "</div></li>\n";
    }

    if (($image10!="")&&($image10!="##")) {
      echo "<li><div class='box'>\n";
      echo "  <p class='img'><a class='photo' href='../attachment/".$image10."'><img src='../attachment/".$image10."' /></a></p>\n";
      echo "</div></li>\n";
    }

  }  
}
?>