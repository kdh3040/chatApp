<html lang="ko">
<meta charset="utf-8" />

<?

session_start();

  if( $_POST["Id"] == $_SESSION["ID"] )
  {
    echo("
      <script name=javascript>
     location.href = 'http://chat3on3.dothome.co.kr/client/main.php';
      </script>
    ");
  }

else {
  echo("
    <script name=javascript>
   self.window.alert('로그인 정보가 잘못되었습니다.');
   location.replace('/');
    </script>
  ");
}
  //$retArray = array("asdasd", "rrwww", "1243123123" );
  //$retArray1 = implode(",", $retArray);
  //echo $retArray1;

//echo "<form name = 'asss' method='post' name='re' action='../receive.php'>";
//echo "<input type='hidden' name='Id' value=$retArray1 />";
?>
