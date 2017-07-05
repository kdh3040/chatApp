<html>
<head>
  <meta charset="utf-8" />
</head>
<?php

//$retMember  = array($_POST["Id"]);

session_start();

  echo ($_SESSION["ID"]); echo " 님 어서오세요";
  echo "<br>";
  echo "<br>";

$retMember  = $_POST["Id"];

$MemberArr = explode(",", $retMember);

  $cnt = count($MemberArr);
/*
  for($i = 0; $i < $cnt; $i++)
  {
    echo $MemberArr[$i];
    echo "<br>";
  }
*/
  //echo "<form name = 'asss' method='post' name='re' action='popup.php'>";
//  echo "<input type='hidden' name='Id' value=1 />";
?>

<!-- <script>  document.asss.submit();</script> -->
