<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex" />
    <title>register</title>
</head>
<body>
    <?php
    require "conf.php";
    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        // SQL発行
        $stmt = $pdo->prepare("INSERT IGNORE INTO u_login (id, user, pass, mail, role) VALUES (?, ?, ?, ?, ?)");
        $stmt->bindValue(1, $i_id);
        $stmt->bindValue(2, $i_user);
        $stmt->bindValue(3, $i_pass);
        $stmt->bindValue(4, $i_mail);
        $stmt->bindValue(5, $i_role);
        $stmt->execute();
        if ($stmt->rowCount()===0) {
            print "既に存在するユーザです。";
        }else{
            print "新規ユーザとして登録しました。";
        }
    }
    catch(PDOException $e) {
        print "Connection failed: " . $e->getMessage();
    }
    // close the connection
    $conn = null;
    ?>
    <a href="./"><input type="button" value="戻る"></a>
</body>
</html>