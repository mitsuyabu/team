<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>映像（保護者）</title>
      <link rel="stylesheet" href="css/test1.css">
      <style>
          a{
              text-decoration: none;
          }
          .logo1{
              color: #000;
          }
      </style>
      <script src="js/jquery-2.1.3.min.js"></script>
  </head>
  <body>
      <header>
          <ul class="nav">
              <div class="lg">
                  <li class="nav_item logo"><a href="user_page.php" class="logo1">Pasha-Ri</a></li>
              </div>
              <div class="nav_right">
                  <li class="nav_item pink"><a href="video.php" class="pink">子どもの様子を見る</a></li>
                  <li class="nav_item green"><a href="album.php" class="green">アルバムを見る</a></li>
                  <li class="nav_item blue"><a href="" class="blue">連絡帳</a></li>
                  <li class="nav_item yellow"><a href="" class="yellow">カレンダー</a></li>
                  <li class="nav_item orange"><a href="" class="orange">献立表</a></li>
              </div>
          </ul>

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
          <hr class="border">
      </header>

      <main>
      <h2 class="name">○◯幼稚園</h2>
          <div class="real_video">
              <!-- <img class="frame" src="http://192.168.43.129:8088/?action=stream" width="900px" height="540px"  /> -->
              <img class="frame" src="http://192.168.11.13:8088/?action=stream" width="900px" height="540px"  />
          </div>
          <div class="btn" id="add"><button>シェア</button></div>
          <div id="list">
          </div>
      </main>

      <footer>
          <hr class="border2">
          <div class="footer_text">
              <!-- <p>Pasha-Riは、G's Academy lab5期のチーム開発の為に作られた製品です。</p> -->
              <p>©2018 G's Academy lab05., All rights reserved.</p>
          </div>
      </footer>

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
      //img.src = "http://192.168.11.13:8088/?action=snapshot&n=1"
      img.src = "http://192.168.11.13:8088/?action=snapshot&n=1"
      // let webcam = document.getElementById("list");
      // webcam.insertBefore(img, webcam.firstChild);

      $.ajax({
        type: 'POST',
        url: 'line.php',
        data: { 'message': 'test' },
        success: function(html){
  	      console.log('lineへ投稿');
        }
      });

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
