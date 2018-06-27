<?php

session_start();

include("functions.php");
chkssid();

$pdo = db_con();

$stmt = $pdo->prepare("SELECT * FROM upload_table ORDER BY id DESC");
$status = $stmt->execute();

$view="";
if($status==false){
    querryError($stmt);
}else{
    while($r = $stmt->fetch(PDO::FETCH_ASSOC)){
        $view .= '<div class=bookmark_box>';
        $view .= $r["id"]."-".$r["image"];
        // $view .= '<span><img src="images/img8.jpg">';
        $view .= '</a>';  
        $view .= '<a href="user_henshu.php?id='.$r["id"].'">';
        $view .= '[編集]';
        $view .= '</a>';             
        $view .= '<a href="delete_user.php?id='.$r["id"].'">';
        $view .= '[削除]';
        $view .= '</a>';
        $view .= '<p class="date">';
        $view .= $r["indate"];
        $view .= '</p>';
        $view .= '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>写真一覧（管理者）</title>
<style>
    @charset "utf-8";

.nav{
    list-style: none;
    display: flex;
    justify-content: space-between;
    height: 104px;
}
.nav_item{
    text-align: center;
}
.logo{
    font-size: 48px;
}
.nav_right{
    font-size: 18px;
    display: flex;
    width: 800px;
}
.nav_item{
    line-height: 104px;
    margin-left: 48px;
    font-weight: bold;
}
.border{
    border-image: linear-gradient(to right, #e91e63, #07a82c, #4fb3ff, #f7ff00) 1/0 0 6px 0;
    border-style: solid;
}
.pink{
    color: #e91e63;
}
.green{
    color: #07a82c;
}
.blue{
    color: #4fb3ff;
}
.yellow{
    color: #f7ff00;
}
.orange{
    color: #ff8400;
}
</style>
</head>
<body id="main">

<header>
    <nav>
        <ul class="nav">
            <li class="nav_item logo">Pasha-Ri</li>
            <div class="nav_right">
                <li class="nav_item pink">映像を見る</li>
                <li class="nav_item green">写真管理</li>
                <li class="nav_item blue">登録者管理</li>
                <li class="nav_item yellow">カレンダー</li>
                <li class="nav_item orange">献立表</li>
            </div>
        </ul>
    </nav>
    <hr class="border">
</header>
<main>
    <nav class="navbar navbar-default">
        <div class="head">
            <a class="navbar-brand" href="kanri_page.php">戻る</a>
            <div class="kensaku">
            <input type="text" id="sar" placeholder="  写真を検索する">
            <button id="sbtn">検索</button>
            </div>
        </div>
    </nav>

<div>

    <h2>写真一覧</h2>
    
  <div class="house_list_box">
    <div class="container jumbotron" id="view"><?=$view?></div>
  </div>
</div>
</main>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>
  document.querySelector("#sbtn").onclick = function(){
    $.ajax({
      type: "post",
      url: "user_list.php",
      data:{
        sar: $("#sar").val(),
      },
      dataType: "html",
      success: function(data){
        if(data=="false"){
          alert("エラー");
        }else{
          $("#view").html(data);
        }
      }
    });
  }

</script>


</body>
</html>