<?php
$datenow=date_default_timezone_set("Asia/Bangkok");
$datenow=date_create("now")->format("Y-m-d");
function chrdate($x){
    $d=explode("-",$x);
    $mth=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","กรกฎาคม","มิถุนายน","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
    return $d[2]." ".$mth[$d[1]-1]." ".$y=$d[0]+543;
}
echo chrdate($datenow);

?>
