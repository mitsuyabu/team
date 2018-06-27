<?php 
session_start();
include("functions.php");
chkssid();

$pdo = db_con();

$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

$sql = "SELECT * FROM kanri_table WHERE lid=:lid AND lpw=:lpw";
// $stmt = $pdo->prepare("SELECT * FROM user_table WHERE email=:email AND lpw=:lpw AND kanri_flg=0)
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid', $lid);
$stmt->bindValue(':lpw', $lpw);
$res = $stmt->execute();



if($res==false){
    queryError($stmt);
}

$val = $stmt->fetch();

if($val["id"] != ""){
    $_SESSION["chk_ssid"] = session_id();
    $_SESSION["name"] = $val["name"];
    header("Location: kanri_page.php");
}else{
    header("Location: kanri_login.php");
}

?>