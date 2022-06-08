<?php
session_start();

$email=$_POST["email"];
$password=$_POST["password"];
$url="http://localhost:8080/api/users/ambilDataById?email=".$email;

$content=file_get_contents($url);
$myjson=json_decode($content,true);


$emailAsli = $myjson["value"]["userEmail"];
$passAsli = $myjson["value"]["userPassword"];

if(!empty($myjson["value"])){
    if($password==$passAsli){
        $_SESSION["nama_lengkap"]=$myjson["value"]["userName"];
        $_SESSION["email"]=$myjson["value"]["userEmail"];
        $_SESSION["logged_in"]=true;
        if($myjson["value"]["userEmail"]=="admin@gmail.com"){
            header('Location: Admin/index.php');
        }
        else{
            header('Location: Consumer/index.php');
        }
        
    }
    else{
        header('Location: Login.php');
    }
}
else{
    header('Location: Login.php');
}
?>