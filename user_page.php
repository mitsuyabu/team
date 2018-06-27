<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pasha-Ri</title>
    <!-- <link rel="stylesheet" href="css/video.css"> -->
</head>
<style>
    body{
        font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", メイリオ, Meiryo, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
        letter-spacing: 2px;
    }
    a{
        text-decoration: none;
    }
    .cate_box{
        width: 508px;
        height: 338.98px;
        position: relative;
        border: solid 1px #484848;
    }
    .cate_box+.cate_box{
        margin: 0 48px;
    }
    .cate_list{
        text-decoration: none;
    }
    .cate_title{
        color: #fff;
        font-size: 48px;
        font-weight: inherit;
        position: absolute;
        top: 65px;
        right: 0;
        bottom: 0;
        left: 110px;
        margin: auto;
        cursor: pointer;
        z-index: 100;
        text-shadow: 2px  2px 5px #000,
                    -2px  2px 5px #000,
                    2px -2px 5px #000,
                    -2px -2px 5px #000;
    }
    .cate_text{
        color: #484848;
        width: 490px;
        margin: 12px auto;
    }
    main{
        width: 1100px;
        margin: 0 auto;
    }
    .all{
        display: flex;
        justify-content: space-between;
    }
    .box3{
        display: none;
    }

.nav{
    list-style: none;
    display: flex;
    justify-content: space-between;
    height: 104px;
}
.nav_item{
    text-align: center;
}
/* .nav_item+.nav_item{
    margin-left: 24px;
} */
.logo1{
    color: #000;
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
    margin-bottom: 48px;
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
        <div class="all">
            <div class="cate_box">
                <a href="video.php" class="cate_list">
                    <div><img src="images/kids20.jpg" alt="" width="508px" height="260.98px"><h2 class="cate_title">様子を見る</h2></div>
                    <div><p class="cate_text">今現在のお子さんの様子を映像で見ることができます。</p></div>
                    <div></div>
                </a>
            </div>

            <div class="cate_box box2">
                <a href="video.php" class="cate_list">
                    <div><img src="images/test3.jpg" alt="" width="508px" height="260.98px"><h2 class="cate_title">アルバムを見る</h2></div>
                    <div><p class="cate_text">今まで撮った写真をアルバムで見ることができます。</p></div>
                    <div></div>
                </a>
            </div>

            <div class="cate_box box3">
                <a href="video.php" class="cate_list">
                    <div><img src="images/kids21.jpg" alt="" width="508px" height="260.98px"><h2 class="cate_title">カレンダー</h2></div>
                    <div><p class="cate_text">カレンダーで学校の予定を見ることができます。</p></div>
                    <div></div>
                </a>
            </div>
        </div>
    </main>
</body>
</html>