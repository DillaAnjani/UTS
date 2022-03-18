<?php
$hari = array(
        1=>"Senin",
        2=>"Selasa",
        3=>"Rabu",
        4=>"Kamis",
        5=>"Jumat",
        6=>"Sabtu",
        7=>"Minggu");
 
foreach ($hari as $kunci =>$isi)
{
   echo "Urutan ke-$kunci adalah $isi";
   echo "<br />";
}
?>