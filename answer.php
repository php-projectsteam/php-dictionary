<?php
$tango = $_POST['tango'];
$tango = mb_strtolower($tango, 'UTF-8');
$tango = mb_convert_kana($tango, 'c', 'UTF-8');
$servername = "mysql:host=127.0.0.1;dbname=dictionary;charset=utf8";
$username = "root";

try{
  $db = new PDO ($servername,$username,"root");
}catch(PDOException $e){
  echo 'db接続エラー：'.$e->getMessage();
}
$records = $db->query("SELECT * FROM tango WHERE english = '$tango' OR japanese = '$tango' OR russian = '$tango'");
$count = $records -> rowCount();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf8">
    <title>検索結果</title>
    <link rel="stylesheet" href="./src/css/jisho.css">
    <link rel="shortcut icon" href="./src/img/book.png">
  </head>
  <body>
    <div class="content1">
      <div class="box">
        <?php if($count > 0){ ?>
          <?php foreach ($records as $record) { ?>
            <?php if($tango == $record['english']){ ?>
              <p>japanese:<?php echo $record['japanese']?></p>
              <p>russian:<?php echo $record['russian']?></p>
              <?php break; ?>
            <?php } else if($tango == $record['japanese']){ ?>
              <p>english:<?php echo $record['english']?></p>
              <p>russian:<?php echo $record['russian']?></p>
              <?php break; ?>
            <?php } else if($tango == $record['russian']){?>
              <p>japanese:<?php echo $record['japanese']?></p>
              <p>english:<?php echo $record['english']?></p>
              <?php break; ?>
            <?php } ?>
          <?php } ?>
        <?php } else {?>
          <p>データがありません。</p>
          <script type="text/javascript">
            alert("データがありません。");
          </script>
          <input type="button" onclick="location.href='insert.php'" value="新規入力" class="button">
        <?php } ?>
          <input type="button" onclick="history.back()" value="戻る" class="button">
      </div>
    </div>
  </body>
</html>
