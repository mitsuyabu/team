
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理者ログインフォーム</title>
    <link rel="stylesheet" href="css/user_login.css">
</head>
<body>
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
    <form action="kanri_login_act.php" method="POST">
        <h2 class="title">管理者ログイン</h2>
        <ul class="form_ul">
            <li class="form_li"><input type="text" name="lid" placeholder="ID"></li>
            <li class="form_li"><input type="text" name="lpw" placeholder="パスワード"></li>
        </ul>
        <div class="soushin">
            <input type="submit">
        </div>
    </form>
</main>

</body>
</html>