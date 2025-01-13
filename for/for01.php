<?php
echo "Masukan nilai awal :";
$awal = trim(fgets(STDIN));

echo "Masukan nilai akhir:";
$awal = trim(fgets(STDIN));

for($awal; $awal<=$akhir; $awal++){
    echo "Antrian ke-$awal \n";
}
?>