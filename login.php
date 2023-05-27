<?php
include_once("php/config.php");
session_start();
if(isset($_SESSION['id'])){
    header("location: users.php");
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phoenix-ログインページ</title>
    <!-- css linked -->
    <link rel="stylesheet" href="css/login.css">
  
</head>
<body>
   <!-- <div class="circle"></div>-->
    <!-- <div class="circle circle2"></div>-->
    <div id="container">
    <img src="images/logo.png" class="center"  width="100" height="100" alt="profile_picture">         
        <h2>ログイン</h2>
        <form action="" autocomplete="off" id="loginForm">
            <div id="errors">入力されたメールアドレスが間違えました</div>
            <input type="email" name="email" id="email" placeholder="メールアドレス" required><br>
            <input type="password" name="password" id="password" placeholder="パスワード" required><br>
            <input type="submit" name="login" id="login" value="ログイン">
            <p>アカウントを作る? <a href="register.php">新規登録ページへ</a></p>
        </form>
    </div>
    <!-- jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/login.js"></script>
</body>
</html>