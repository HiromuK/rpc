<?php
    session_start();
    $role = $_SESSION["USERROLE"];
	$talk_org = $_POST['talk'];
    require "conf2.php";
    if($role == 1) require 'role_oresama.php';
    else if($role == 2) require 'role_ojosama.php';
    else if($role == 3) require 'role_ninja.php';
    else if($role == 4) require 'role_kohai-danshi.php';
    else if($role == 5) require 'role_kohai-joshi.php';
    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        // SQL発行
        $stmt = $pdo->prepare("INSERT IGNORE INTO u_data (tid, date, name, talk) VALUES (?, ?, ?, ?)");
        $stmt->bindValue(1, $i_tid);
        $stmt->bindValue(2, $i_date);
        $stmt->bindValue(3, $i_name);
        $stmt->bindValue(4, $i_talk);
        $stmt->execute();
        if ($ms = $stmt->fetch(PDO::FETCH_ASSOC)) {
            print "エラー";
        }else{
            header("Location:main.php");
        }
    }
    catch(PDOException $e) {
        print "Connection failed: " . $e->getMessage();
    }
    // close the connection
    $conn = null;

?>