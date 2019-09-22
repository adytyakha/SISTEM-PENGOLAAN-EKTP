<?php
//membangun koneksi
$="SYSTEM";
$password="ADYTYA";
$database="localhost/ADYTYA";
 
$koneksi=oci_connect($username,$password,$database);
 
if($koneksi){
echo "Koneksi berhasil";
}else{
$err=oci_error();
echo "Gagal tersambung ke ORACLE". $err['text'];
}
?>