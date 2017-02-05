<?php
session_start();

// ログイン状態チェック
if (!isset($_SESSION["USERID"])) {
    header("Location: logout.php");
    exit;
}

$now = time();
$s1 = date('Y-m-d H:i', $now);
$loginid = $_SESSION["NUM"];
$name = $_SESSION["USERID"];
$role = $_SESSION["USERROLE"];

?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta http-equiv="refresh" content="3600">
  <script src="./components/loader.js"></script>
  <script src="./lib/onsenui/js/onsenui.min.js"></script>
  <script src="./js/jquery-3.1.1.min.js"></script>
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="./components/loader.css">
  <link rel="stylesheet" href="./lib/onsenui/css/onsenui.css">
  <link rel="stylesheet" href="./lib/onsenui/css/onsen-css-components.css">
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css"></link>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap-responsive.min.css"></link>
  <link rel="stylesheet" href="./css/style.css">

  <script>
    ons.ready(function() {
      console.log("Onsen UI is ready!");
    });

    document.addEventListener('show', function(event) {
      var page = event.target;
      var titleElement = document.querySelector('#toolbar-title');

      if (page.matches('#top-page')) {
        titleElement.innerHTML = 'RPC';
      } else if (page.matches('my-page')) {
        titleElement.innerHTML = 'My Page';
      }
    });
  </script>
</head>
<body>
</div>
  <ons-page>
    <ons-toolbar>
      <div class="center" id="toolbar-title"></div>
      <div class="sendbtn"><a class="sendA" href="#sendM" data-toggle="modal">Send Message</a></div>
    </ons-toolbar>

    <ons-tabbar position="auto">
      <ons-tab label="Timeline" page="timeline.php" active>
      </ons-tab>
      <ons-tab label="Room" page="room.php">
      </ons-tab>
      <ons-tab label="Mypage" page="mypage.php">
      </ons-tab>
    </ons-tabbar>
  </ons-page>

  <ons-template id="timeline.php">
    <ons-page id="top-page">
      <ul class="timeline">
        <?php
          require "tl.php";
        ?>
      </ul>
    </ons-page>
  </ons-template>
  
  <ons-template id="mypage.php">
    <ons-page id="my-page">
      <div id="prof">
        <p style="text-align: center;">
          <?php
            echo $name;
            if($role == 1) print "＠俺様";
            else if($role == 2) print "＠お嬢様";
            else if($role == 3) print "＠忍者";
            else if($role == 4) print "＠舎弟系後輩男子";
            else if($role == 5) print "＠あざと系後輩女子";
          ?>
        </p>
        <form class="f-logout" action="logout.php" method="POST">
          <input class="btn2" type="submit" name="logout" value="ログアウト" />
        </form>
      </div>
      <ul class="timeline">
        <?php
          require "my_room.php";
        ?>
      </ul>
    </ons-page>
  </ons-template>

  <div id="sendM" class="modal hide fade">
    <form class="f-sendM" action="message.php" method="POST">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Send your message</h3>
      </div>
      <div class="modal-body">
        <input type="hidden" name="tid" maxlength="9999" pattern="^[0-9]+">
        <input type="hidden" name="date" value="<?=$s1?>">
        <input type="hidden" name="name" value="<?=$name?>">
        <textarea name="talk" cols="36" rows="4" class="input-block-level" placeholder="今どんな気持ち？"></textarea>
      </div>
      <div class="modal-footer">
        <input class="btn btn-primary" type="submit" name="send" value="Send" />
      </div>
    </form>
  </div>
</body>
</html>
