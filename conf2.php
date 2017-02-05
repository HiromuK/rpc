<?php

// 接続情報
$servername = "***********";	// サーバ名
$username = "*************";	// ユーザ名
$password = "*************";	// パスワード
$dbname = "***************";	// データベース名
// インプット値
$i_tid = (int)filter_input(INPUT_POST, 'tid');
$i_date = (string)filter_input(INPUT_POST, 'date');
$i_name = (string)filter_input(INPUT_POST, 'name');
$i_talk = (string)filter_input(INPUT_POST, 'talk');

?>