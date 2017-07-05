<html lang="ko">
<meta charset="utf-8" />

<?

  session_start();
  $_SESSION["Age"] = $_POST["Age"];
  $_SESSION["Loc"] = $_POST["Loc"];
  $_SESSION["Gender"] = $_POST["Gender"];
  $_SESSION["Religion"] = $_POST["Religion"];
  $_SESSION["Body"] = $_POST["Body"];

  echo("
    <script name=javascript>
   self.window.alert('회원 가입을 축하합니다.');
   location.href='http://chat3on3.dothome.co.kr/client/main.php';
    </script>
  ");


?>
