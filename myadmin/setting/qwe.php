<?php
$dsn ='oci:dbname=10.33.74.25/siakdb';
$user ='SIAKOFF';
$pass = 'ora_off_05';
$conn = new PDO($dsn, $user, $pass);

if($conn){
echo "Koneksi berhasil";
}else{
$err=oci_error();
echo "Gagal tersambung ke ORACLE". $err['text'];
}
?>