<!DOCTYPE html>
<TITLE> 심쿵 </TITLE>
<html lang="ko">
<head>
    <meta name="viewport"  content="width=device-width, initial-scale=1.0,
    minimum-scale=1.0, user-scalabel=no" charset="utf-8" />
</head>

<body>
</body>
</html>

<?php
  session_start();
  echo ($_SESSION["ID"]); echo " 님 어서오세요";
  echo "<br>";
  echo "<br>";
  echo ($_SESSION["Age"]); echo " 나이"; echo "<br>";
  echo ($_SESSION["Loc"]); echo " 지역"; echo "<br>";
  echo ($_SESSION["Gender"]); echo " 성별"; echo "<br>";
  echo ($_SESSION["Religion"]); echo " 종교"; echo "<br>";
  echo ($_SESSION["Body"]); echo " 체형"; echo "<br>";

?>
