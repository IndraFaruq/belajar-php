<?php
$file = fopen("halo.txt","w");

$teks = "hai \n";
fwrite($file,$teks);

$teks = "saya sedang ngantok";
fwrite($file,$teks);

fclose($file);
?>
