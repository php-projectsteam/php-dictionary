<?php
$tango = $_POST['tango'];
$servername = "mysql:host=127.0.0.1;dbname=dictionary;charset=utf8";
$username = "root";

try{
  $db = new PDO ($servername,$username,"root");
}catch(PDOException $e){
  echo 'db接続エラー：'.$e->getMessage();
}
$sql1 = $db->query("SELECT COUNT(id) FROM tango");
foreach ($sql1 as $count){
    $id = $count[0];
}
$id++;
$japanese = $_POST['japanese'];
$english = $_POST['english'];
$russian = $_POST['russian'];
if($id != $id or $japanese == "" or $english == "" or $russian == ""){
} else{
$sql = $db->exec("INSERT INTO tango VALUES ($id,'$japanese','$english','$russian')");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>新単語入力</title>
        <link rel="stylesheet" href="./src/css/jisho.css">
        <link rel="shortcut icon" href="./src/img/book.png">
    </head>
    <body>
        <script type="text/javascript">
            function check(){
                var jap = /^[\u30a0-\u30ff\u3040-\u309f\u3005-\u3006\u30e0-\u9fcf]+$/;
                var eng = /[^a-z]/gi;
                var rus = /[\u0400-\u04FF]/;
                var tes = jap.test(lang.japanese.value);
                var tes1 = eng.test(lang.english.value);
                var tes2 = rus.test(lang.russian.value);
                if(lang.japanese.value == ""){
                    alert("日本語が入力されてません。");
                    return false;
                }else if(tes == false){
                    alert("日本語ではありません。");
                    return false;
                }else if(lang.english.value == ""){
                    alert("英語が入力されてません。");
                    return false;
                }else if(tes1 == true){
                    alert("英語ではありません。");
                    return false;
                }else if(lang.russian.value == ""){
                    alert("ロシア語が入力されてません。");
                    return false;
                }else if(tes2 == false){
                    alert("ロシア語ではありません。");
                    return false;
                }else{
                    return true;
                }
            }
        </script>
        <div class="content2">
            <div class="box">
            <script type="text/javascript">
            function coloeSet(argObj){
                if(argObj.value==""){
                    argObj.style.backgroundColor = "";
                }else{
                    argObj.style.backgroundColor = "rgba(0, 179, 179, 0.20)";
                }
            }
            
            function colorReset(argObj){
                argObj.style.backgroundColor = "";
            }
            </script>
                <form action="create.html" method="post" name="lang">
                    <label class="text1">Japanese:</label>
                    <input type="text" name="japanese" id="in1"><br>
                    <label class="text1">English:</label>
                    <input type="text" name="english" id="in1"><br>
                    <label class="text1">Russian:</label>
                    <input type="text" name="russian" id="in1"><br>
                    <input type="button" onclick="location.href='index.html'" value="戻る" class="button">
                    <input type="submit" value="確定" onclick="return check()" class="button">
                </form>
            </div>
        </div>
    </body>
</html>
