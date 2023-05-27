<?php
// configure your server
// 1=> server name
// 2=> username
// 3=> password
// 4=> database name

$host='mysql205.phy.lolipop.lan';
$user='LAA1422305';
$password='12345678';
$dbname='LAA1422305-san';
$conn = mysqli_connect($host,$user,$password,$dbname);

if(!$conn){
    echo "Connection Failed";
}
?>