<?php
session_start();

if (isset($_SESSION["USERID"])) {
    $errorMessage = "ログアウトしました。";
} else {
    $errorMessage = "セッションがタイムアウトしました。";
}

// セッションの変数のクリア
$_SESSION = array();

// セッションクリア
@session_destroy();
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex" />
    <title>ログアウト</title>
</head>
<body>
    <div id="container">
        <h1>ログアウト画面</h1>
        <div><?php echo $errorMessage; ?></div>
        <ul>
            <li><a href="index.php">ログイン画面に戻る</a></li>
        </ul>
    </div>
</body>
</html>