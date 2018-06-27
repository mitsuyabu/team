<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>映像（保護者）</title>
    <link rel="stylesheet" href="css/video.css">
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
            <img class="frame" src="http://192.168.43.129:8088/?action=stream" />
        </div>
        <div class="btn" id="add"><button>写真を撮る</button></div>
        <div id="list">
        </div>
    </main>
    <!-- <script src=“./test.js”></script> --> 
    <script>
        let imageNr = 0;
    // Serial number of current image
    //  let finished = new Array(); // References to img objects which have finished downloading
    // let paused = false;

    function createImageLayer() {
    var img = new Image();
    // img.style.position = “absolute”;
    // img.style.zIndex = -1;
    img.onload = imageOnload;
    img.onclick = imageOnclick;
    //img.src = "http://192.168.43.129:8080/?action=snapshot&n=" + (++imageNr);
    img.src = "http://192.168.43.129:8088/?action=snapshot&n=4"
    let webcam = document.getElementById("list");
    webcam.insertBefore(img, webcam.firstChild);
    //$('#list').append(img);
    }

    // Two layers are always present (except at the very beginning), to avoid flicker
    function imageOnload() {
    this.style.zIndex = imageNr; // Image finished, bring to front!
    while (1 < finished.length) {
        var del = finished.shift(); // Delete old image(s) from document
        del.parentNode.removeChild(del);
    }
    finished.push(this);
    if (!paused) createImageLayer();
    }

    function imageOnclick() { // Clicking on the image will pause the stream
    paused = !paused;
    if (!paused) createImageLayer();
    }

    $('#add').on('click',function(){
    createImageLayer();
    });
    </script>

</body>
</html>