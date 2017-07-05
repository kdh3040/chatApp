<!DOCTYPE html>
<TITLE> 심쿵 개인 정보</TITLE>
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

  echo "<form name ='asss' method='post' name='re' action='../server/AddProfile.php'>";   echo "<br>";
  echo "나이  "; echo "<input type='text' name='Age'  />";   echo "<br>";
  echo "지역  "; echo "<input type='text' name='Loc' />";   echo "<br>";
  echo "성별  "; echo "<input type='text' name='Gender' />";   echo "<br>";
  echo "종교  "; echo "<input type='text' name='Religion'  />";   echo "<br>";
  echo "체형  "; echo "<input type='text' name='Body'  />";   echo "<br>";
  echo "<input type = 'submit'>";   echo "<br>";

  ?>
