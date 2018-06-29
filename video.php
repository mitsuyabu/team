<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
    <link rel="stylesheet" media="all" type="text/css" href="style.css" />
    <!-- ※デフォルトのスタイル（style.css） -->
    <link rel="stylesheet" media="all" type="text/css" href="tablet.css" />
    <!-- ※タブレット用のスタイル（tablet.css） -->
    <link rel="stylesheet" media="all" type="text/css" href="smart.css" />
    <!-- ※スマートフォン用のスタイル（smart.css） -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>映像（保護者）</title>
    <link rel="stylesheet" href="css/video.css">
</head>
<style>
    a{
        text-decoration: none;
    }
    .logo1{
        color: #000;
    }
</style>
<body>
    <header>
        <nav>
            <ul class="nav">
                    <li class="nav_item logo"><a href="user_page.php" class="logo1">Pasha-Ri</a></li>
                <div class="nav_right">
                    <li class="nav_item pink"><a href="video.php" class="pink">子どもの様子を見る</a></li>
                    <li class="nav_item green"><a href="album.php" class="green">アルバムを見る</a></li>
                    <li class="nav_item blue"><a href="" class="blue">連絡帳</a></li>
                    <li class="nav_item yellow"><a href="" class="yellow">カレンダー</a></li>
                    <li class="nav_item orange"><a href="" class="orange">献立表</a></li>
                </div>
            </ul>
        </nav>
        <hr class="border">
    </header>

    <main>
        <div class="real_video">
            <iframe width="900" height="540" src="http://192.168.43.129:8080/?action=stream" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen id="frame"></iframe>
        </div>
        <div class="btn"><button>写真を撮る</button></div>
    </main>
</body>
</html>