<?php
//include_once("config.php");
include_once("pdo_connect.php");
include_once("sanitize.php");
if(isset($_POST['send'])){
    //

    sanitize($_POST);
    $outgoing = $_POST['outgoing'];
    $incoming = $_POST['incoming'];
    $messages = $_POST['typingField'];
   


    $saveMsgQuery = "INSERT INTO messages(outgoing,incoming,messages)VALUES(?,?,?)";
    $stmt=$dbh->prepare($saveMsgQuery);
    $stmt->bindValue(1,$outgoing);
    $stmt->bindValue(2,$incoming);
    $stmt->bindValue(3,$messages);
    if(!$stmt->execute()){
        echo "クエリー実行失敗";
    }
    $dbh->null;

}
?>