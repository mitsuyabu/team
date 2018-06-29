<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>映像（保護者）</title>
    <link rel="stylesheet" href="css/smart.css">
    <script src="js/jquery-2.1.3.min.js"></script>
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
            <button class="btn-trigger">
                <svg viewBox="0 0 44 44" xmlns:xlink="http://www.w3.org/1999/xlink" role="img" aria-labelledby="menuButtonTitle">
                    <title id="menuButtonTitle">Menu</title>
                    <symbol id="bar">
                    <rect width="28" height="2" fill="#000"></rect>
                    </symbol>
                    <use xlink:href="#bar" x="8" y="14"></use>
                    <use xlink:href="#bar" x="8" y="24"></use>
                    <use xlink:href="#bar" x="8" y="34"></use>
                </svg>
            </button>


            <ul class="nav">
                    <li class="nav_item"><h2 class="logo">Pasah-Ri</h2></li>
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
        <h2>○◯幼稚園</h2>
        <div class="real_video">
            <!-- <img width="900" height="540" src="http://192.168.43.129:8080/?action=stream" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen id="frame"> -->
        </div>
        <div class="btn"><button>写真を撮る</button></div>
    </main>
    <fotter>
    <hr class="border2">
        <div class="fotter_text">
            <!-- <p>Pasha-Riは、G's Academy lab5期のチーム開発の為に作られた製品です。</p> -->
            <p>©2018 G's Academy lab05., All rights reserved.</p>
        </div>
    </fotter>

    <script>
    $(function() {
    $('.btn-trigger').click(function() {
        $(this).toggleClass('active');
 
        if ($(this).hasClass('active')) {
            $('.nav_right').addClass('active');
        } else {
            $('.nav_right').removeClass('active');
        }
    });
});
    </script>
</body>
</html>