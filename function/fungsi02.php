<?php
function sapa($nama){
    echo "selamat pagi $nama".PHP_EOL;
}

sapa ("cekgu");
sapa ("tini");

echo "Masukan nama:";
$awal = trim(fgets(STDIN));

?>