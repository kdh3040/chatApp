<html lang="ko">
<meta charset="utf-8" />

<?

  session_start();
  $_SESSION["ID"] = $_POST["Id"];
  $_SESSION["PW"] = $_POST["Pw"];


  echo("
    <script name=javascript>
   self.window.alert('회원 가입을 축하합니다.');
   location.href='http://chat3on3.dothome.co.kr/client/profile.php';
    </script>
  ");


?>
