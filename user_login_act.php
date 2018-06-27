<?php 
session_start();
include("functions.php");
chkssid();

$pdo = db_con();

$email = $_POST["email"];
$lpw = $_POST["lpw"];

$sql = "SELECT * FROM user_table WHERE email=:email AND lpw=:lpw AND kanri_flg=0";
// $stmt = $pdo->prepare("SELECT * FROM user_table WHERE email=:email AND lpw=:lpw AND kanri_flg=0)
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':lpw', $lpw);
$res = $stmt->execute();



if($res==false){
    queryError($stmt);
}

$val = $stmt->fetch();

if($val["id"] != ""){
    $_SESSION["chk_ssid"] = session_id();
    $_SESSION["kanri_flg"] = $val["kanri_flg"];
    $_SESSION["name"] = $val["name"];
    header("Location: user_page.php");
}else{
    header("Location: user_login_form.php");
}

?>