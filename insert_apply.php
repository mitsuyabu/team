<?php
include('functions.php');

if(
    !isset($_POST["name"]) || $_POST["name"] == "" ||
    !isset($_POST["c_name"]) || $_POST["c_name"] == "" ||
    !isset($_POST["email"]) || $_POST["email"] == "" ||
    !isset($_POST["lpw"]) || $_POST["lpw"] == "" 
){
    exit('ParamError');
}

$name = $_POST["name"];
$c_name = $_POST["c_name"];
$email = $_POST["email"];
$lpw = $_POST["lpw"];

$pdo = db_con();

$stmt = $pdo->prepare("INSERT INTO user_table(id, name, c_name, email, lpw, indate)VALUES(NULL, :name, :c_name, :email, :lpw, sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':c_name', $c_name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
    queryError($stmt);
}else{
    header("Location: user_login_form.php");
}
?>