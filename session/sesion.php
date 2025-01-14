<?php
session_start();
$_SESSION["username"] = "joko";
$_SESSION["password"] = "tuu cek hp mu";

echo "berhasil membuat session";
echo "<br>";  

echo "<a href=cek_session.php
cek session</a>";


?>