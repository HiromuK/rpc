<?php
session_start();

// クッキー確認
if(isset($_COOKIE["TEMP_COOKIE"]) && $_COOKIE["TEMP_COOKIE"] != ""){     
    $_SESSION["TEMP"] = $_COOKIE["TEMP_COOKIE"];
}

// ログイン済みかどうかの変数チェックを行う
if (isset($_SESSION["TEMP"]) && $_SESSION["TEMP"] != null && sha1(PASSWORD) === $_SESSION["TEMP"]) {
	print "ログイン成功";
} else {
	session_destroy();				// セッション破棄
	header("Location:login.php");	// ログイン画面へリダイレクトさせる
	exit;
}

// ログアウトボタンが押されたとき
if(isset($_POST['logout'])){ 
	// セッション変数を全て解除する
	$_SESSION = array();
	// セッションを切断するにはセッションクッキーも削除する。
	// Note: セッション情報だけでなくセッションを破壊する。
	if (ini_get("session.use_cookies")) {
		$params = session_get_cookie_params();
		setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
	} else {
		//セッションを破壊してリダイレクト
		session_destroy();
		header("Location:login.php");
	}
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8" />
	<title>管理画面</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div id="container">
	<h1 id="pageTitle">管理画面</h1>
		<?php
    		if($message!=""){
    	    	print "<p class=\"message\">".$message."</p>\n";
    	    }
		?>
		<form action="" method="post">
			<p><button type="submit" name="logout">ログアウト</button></p>
		</form>
	</div>
</body>
</html>
