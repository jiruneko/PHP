<?php
if (isset($_GET['message']) && !empty($_GET['message'])) {
    // フォントと画像を読み込む
    $font = dirname(__FILE__) . '/fonts/blazed.ttf';
    $size = 12;
    $imagePath = "button.png";

    if (!file_exists($font)) {
        die("エラー: フォントファイルが見つかりません。");
    }

    if (!file_exists($imagePath)) {
        die("エラー: 画像ファイルが見つかりません。");
    }

    $image = imagecreatefrompng($imagePath);
    if (!$image) {
        die("エラー: 画像の読み込みに失敗しました。");
    }

    // テキストサイズを取得
    $message = htmlspecialchars($_GET['message'], ENT_QUOTES, 'UTF-8'); // XSS対策
    $tsize = imagettfbbox($size, 0, $font, $message);

    if (!$tsize) {
        die("エラー: テキストサイズの計算に失敗しました。");
    }

    // 中央配置
    $dx = abs($tsize[2] - $tsize[0]);
    $dy = abs($tsize[5] - $tsize[3]);
    $x = (imagesx($image) - $dx) / 2;
    $y = (imagesy($image) - $dy) / 2 + $dy;

    // テキストを描画
    $black = imagecolorallocate($image, 0, 0, 0);
    imagettftext($image, $size, 0, $x, $y, $black, $font, $message);

    // Content-Type ヘッダーを設定し、画像を出力
    header("Content-type: image/png");
    imagepng($image);
    imagedestroy($image);
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ボタンフォーム</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8'); ?>" method="GET">
        ボタンに表示するメッセージを入力してください:
        <input type="text" name="message" required /><br />
        <input type="submit" value="Create Button" />
    </form>
</body>

</html>