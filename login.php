<?php
require "password.php";   // password_verfy()の代わり
// セッション開始
session_start();
require "conf.php";
try {
  // DB接続
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  // SQL発行
  $stmt = $pdo->prepare("SELECT * FROM u_login WHERE user = ? AND pass = ?");
  $stmt->bindValue(1, $i_user);
  $stmt->bindValue(2, $i_pass);
  $stmt->bindValue(3, $i_role);
  $stmt->execute();
  // 結果の取得
  if($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
      $_SESSION["USERID"] = $row["user"];
      $_SESSION["USERROLE"] = $row["role"];
      header("Location:main.php");
  }else{
    header("Location:index.php");
    echo <<< EOM
    	<script type="text/javascript">alert("TEST");</script>
EOM;
  }
}
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
// DB切断
$pdo = null;
?>