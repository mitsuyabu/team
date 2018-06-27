<!-- ユーザー登録的な -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログインフォーム</title>
    <link rel="stylesheet" href="css/user_login.css">
</head>
<body>
<header>
    <nav>
        <ul class="nav">
        <li class="nav_item logo"><a href="home.php" class="logo1">Pasha-Ri</a></li>
            <div class="nav_right">
                <!-- <li class="nav_item pink">子どもの様子を見る</li>
                <li class="nav_item green">アルバムを見る</li>
                <li class="nav_item blue">連絡帳</li>
                <li class="nav_item yellow">カレンダー</li>
                <li class="nav_item orange">献立表</li> -->
            </div>
        </ul>
    </nav>
    <hr class="border">
</header>

<main>
    <form action="user_login_act.php" method="POST">
        <h2 class="title">保護者ログイン</h2>
        <ul class="form_ul">
            <li class="form_li"><input type="text" name="email" placeholder="Email"></li>
            <li class="form_li"><input type="text" name="lpw" placeholder="パスワード"></li>
        </ul>
        <div class="soushin">
            <input type="submit">
        </div>
    </form>
</main>

</body>
</html>