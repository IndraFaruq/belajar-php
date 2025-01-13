<?php
echo "masukan nilai :";
$nilai = fgets(STDIN);

if($nilai<=0){
    echo "nilai = : $nilai\n";
    echo "grade = :E";
}if($nilai<60){
    echo "nilai = : $nilai\n";
    echo "grade = :E";
}elseif($nilai<70){
    echo "nilai = : $nilai\n";
    echo "grade = :D";
}elseif($nilai<80){
    echo "nilai = : $nilai\n";
    echo "grade = :C";
}elseif($nilai<90){
    echo "nilai = : $nilai\n";
    echo "grade = :B";
}elseif($nilai<100){
    echo "nilai = : $nilai\n";
    echo "grade = :A";
}else{
    echo "Maaf nilai tidak sah";
}
?>