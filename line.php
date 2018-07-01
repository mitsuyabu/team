<?php
#$message = $_POST['message'];
#$image_url = $_POST['url'];

# キャプチャ取得
exec('sudo wget http://localhost:8088/?action=snapshot -O s.jpg 2>&1', $o);
# print_r($o);

# LineへPOST
exec("curl https://notify-api.line.me/api/notify -X POST -H 'Authorization: Bearer 7tUrYXfIIgaqOZwXhyelkcHLZg4sos3FBsGMMHxU621' -F 'message=ベストショット' -F 'imageFile=@s.jpg'", $o2);
# print_r($o2);

# ファイルを削除
exec('rm s.jpg 2>&1', $o3);
# print_r($o3);

?>
