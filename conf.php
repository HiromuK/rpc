<?php

// 接続情報
$servername = "***********";	// サーバ名
$username = "*************";	// ユーザ名
$password = "*************";	// パスワード
$dbname = "***************";	// データベース名
// インプット値
$i_id = (int)filter_input(INPUT_POST, 'id');
$i_user = (string)filter_input(INPUT_POST, 'user');
$i_pass = (string)filter_input(INPUT_POST, 'pass');
$i_mail = (string)filter_input(INPUT_POST, 'mail');
$i_role = (int)filter_input(INPUT_POST, 'role');

?>