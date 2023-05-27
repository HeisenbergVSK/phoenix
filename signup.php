<?php
include_once("php/pdo_connect.php");
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
    <title>Phoenix -新規登録</title>
    <!-- css linked -->
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="circle"></div>
    <div class="circle circle2"></div>
    <div id="container">
        <h2>Sign Up</h2>
        <form action=""  id="register">
            <div id="errors">Invalid Email Address</div>
            <input type="text" name="name" id="name"  class="name" placeholder="名" required>
            <input type="text" name="familyname" id="familyname"  class="name" placeholder="名字" required><br>
            <input type="email" name="email" id="email" placeholder="メールアドレス" required><br>
            <input type="password" name="password" id="password" placeholder="パスワード" required><br>
            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="パスワード(再）" required><br>
            <input type="file" name="image" id="image" required><br>
            <input type="submit" name="signup" id="signup" value="新規登録">
            <p>既に登録しまた？？ <a href="login.php">ログイン</a></p>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/signup.js"></script>
</body>
</html> 