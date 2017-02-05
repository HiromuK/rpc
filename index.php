<?php
require "password.php";   // password_verfy()の代わり
// セッション開始
session_start();
require "conf.php";
$error_message = "";

// ログインボタンが押された場合
if (isset($_POST["login"])) {
    // 1. 入力チェック
    if (empty($_POST["user"])) {  // emptyは値が空のとき
        $errorMessage = 'ユーザ名が未入力です。';
    } else if (empty($_POST["pass"])) {
        $errorMessage = 'パスワードが未入力です。';
    }
    // 2. 認証チェック
    if (!empty($_POST["user"]) && !empty($_POST["pass"])) {
        // 入力したユーザ名,passを格納
        $user = $_POST["user"];
        $pass = $_POST["pass"];

        // 3. エラー処理
        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            // SQL発行
            $stmt = $pdo->prepare("SELECT * FROM u_login WHERE id = ? AND user = ? AND pass = ? AND role = ?");
	        $stmt->bindValue(1, $i_id);
	        $stmt->bindValue(2, $i_user);
	        $stmt->bindValue(3, $i_pass);
            $stmt->bindValue(4, $i_role);
	        $stmt->execute();

            if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                if (password_verify($pass, $row["pass"])) {
                    session_regenerate_id(true);

                    // 入力したユーザー名のIDを取得
                    $sql = "SELECT * FROM u_login WHERE user = $user";  //入力した$userのユーザーIDを取得
                    $stmt = $pdo->query($sql);
                    foreach ($stmt as $row) {
                        $row["user"];   // ユーザー名
                        $row["role"];   // ユーザーキャラ
                    }
                    $_SESSION["USERID"] = $row['user'];
                    $_SESSION["USERROLE"] = $row["role"];
                    header("Location: main.php");  // メイン画面へ遷移
                    exit();  // 処理終了
                } else {
                    // 認証失敗
                    $errorMessage = 'ユーザ名あるいはパスワードに誤りがあります。';
                }
            } else {
                // 4. 認証成功なら、セッションIDを新規に発行する
                // 該当データなし
                $errorMessage = 'ユーザ名あるいはパスワードに誤りがあります。';
            }
        } catch (PDOException $e) {
            $errorMessage = 'データベースエラー';
            //$errorMessage = $sql;
            // $e->getMessage() でエラー内容を参照可能（デバック時のみ表示）
            // echo $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8" />
    <meta name="robots" content="noindex" />
	<title>RPC</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div id="container">
		<?php
			if ($error_message) {
			print '<font color="red">'.$error_message.'</font>';
			}
		?>
		<div class="box1">
			<h1>RPC</h1>
			<h2>理想のキャラを、演じよう</h2>
			<p>Let's chat away with playing a role.</p>
		</div>
		<form class="f-login" action="login.php" method="POST">
			<p><label>ユーザ名：<input type="text" name="user" value="" /></p>
			<p><label>パスワード：<input type="password" name="pass" value"" /></p>
			<input class="btn1" type="submit" name="login" value="ログイン" />
			<p class="sign-in"><a href="register.html">新規登録</a></p>
		</form>
	</div>
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/main.js"></script>
</body>
</html>