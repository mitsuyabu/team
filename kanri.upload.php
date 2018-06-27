<?php
if(isset($FILES["upfile"]) && $_FILES["upfile"]["error"] == 0){
    $file_name = $_FILES["upfile"]["name"];
    $tmp_path = $FILES["upfile"]["tmp_name"];
    $file_dir_path = "upload/".$file_name;

    $img="";
    if(is_upload_file($tmp_path)){
        if(move_upload_file($tmp_path, $file_dir_path)){
            chmod($file_dir_path, 0644);
            $img = '<img src="'. $file_name . '">';
        }else{ 
            $img = "Error:アップロードできませんでした。";
        }
    }
}else{
    $img = "画像が送信されていません。";
}




?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pasha-Ri</title>
    <link rel="stylesheet" href="css/album.css">
</head>
<body>
    <header>
        <nav>
            <ul class="nav">
                <li class="nav_item logo">Pasha-Ri</li>
                <div class="nav_right">
                    <li class="nav_item pink"><a href="video.php">子どもの様子を見る</a></li>
                    <li class="nav_item green"><a href="album.php">アルバムを見る</a></li>
                    <li class="nav_item blue"><a href="">連絡帳</a></li>
                    <li class="nav_item yellow"><a href="">カレンダー</a></li>
                    <li class="nav_item orange"><a href="">献立表</a></li>
                </div>
            </ul>
        </nav>
        <hr class="border">
    </header>

    <main>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" accept="image/*" capture="camera" name="upfile">
            <input type="submit" value="Fileアップロード">
        </form>
    </main>

</body>
</html>