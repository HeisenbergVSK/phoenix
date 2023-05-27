<?php
include_once('pdo_connect.php');
include_once('sanitize.php');


sanitize($_POST);
if(empty($_POST['name']) || empty($_POST['familyname']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirmPassword']) || empty($_FILES['image'])){
        echo "未入力データがあります";
}

 else
 {   

     $email=$_POST['email'];
     $password=$_POST['password'];
     $name=$_POST['name'];
     $family=$_POST['familyname'];
     $password2=$_POST['confirmPassword'];
     $image = $_FILES['image'];
     $imageName = $image['name'];
     $imageSize = $image['size'];
     $imageTempName = $image['tmp_name'];
     $imageType = $image['type'];
     $explode = explode(".", $imageName);
     $lowercase = strtolower(end($explode));
     $extension = ["png","jpg","jpeg"];
     $emailQuery = "SELECT * FROM users WHERE email =?";
     $stmt=$dbh->prepare($emailQuery);
     $stmt->bindValue(1,$email);
     $stmt->execute();
     $data=$stmt->fetch(PDO::FETCH_ASSOC);
    if($data)
    {
        echo "メールアドレス既に登録しました";
    }
    else if(strlen($password) < 8)
    {
        echo "パスワードを8文字以上入力してください";
    }
    else if($password!=$password2)
    {
        echo "パスワードがー致しますせん";
        
    }
    else if(in_array($lowercase,$extension) == false){
        echo "JPGかPNGの画像を選んでください.";
    }
    else
    {
        $password = md5($_POST["password"]);


        $random = rand(999999999,111111111);
        $time = time();
        $uniqueImageName = $random . $time . $imageName;
        move_uploaded_file($imageTempName, "../images/" . $uniqueImageName);
        $status = "Offline";
        $insertQuery='INSERT into users(firstName,lastName,email,password,image,status) value(?,?,?,?,?,?)';

        $stmt=$dbh->prepare($insertQuery);
        $stmt->bindValue(1,$name);
        $stmt->bindValue(2,$family);
        $stmt->bindValue(3,$email);
        $stmt->bindValue(4,$password);
        $stmt->bindValue(5,$uniqueImageName);
        $stmt->bindValue(6,$status);
       
        if(!$stmt->execute()){
            echo "Failed while entering data in database";
        }
        else
        {
            $dbh=null;
            echo "success";
        }
    }
      


 }

?>