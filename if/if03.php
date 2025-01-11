<?php
echo "Masukkan Nama : ";
$nama = trim(fgets(STDIN));
echo "Masukkan nilai Kamuh? : ";
$nilai = trim(fgets(STDIN));

if($nilai>=80){
    echo "Selamat $nama Anda Pinta👌😘😘";
}else{
    echo "Maaf $nama, Anda Guoblok🤔🤔🤔";
}
?>