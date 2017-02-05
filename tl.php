<?php

	require "conf2.php";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        // SQL発行
        $stmt = $pdo->prepare("SELECT * FROM u_data WHERE tid = ? AND date = ? AND name = ? AND talk = ?");
        $stmt->bindValue(1, $i_tid);
        $stmt->bindValue(2, $i_date);
        $stmt->bindValue(3, $i_name);
        $stmt->bindValue(4, $i_talk);
        $stmt->execute();

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            print "エラー";
        }else{
        	$sql = "SELECT * FROM u_data ORDER BY tid DESC";
            $stmt = $pdo->query($sql);
            foreach ($stmt as $row) {
            	print'<li class="talks"><p class="name">'.$row['name'].'</p><p class="date">'.$row['date'].'</p><p class="tl">'.$row['talk'].'</p></li>';
            }
        }
    }
    catch(PDOException $e) {
        print "Connection failed: " . $e->getMessage();
    }
    // close the connection
    $conn = null;

?>