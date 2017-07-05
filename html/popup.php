<!DOCTYPE html>

<html>
<head>
  <meta name="viewport"  content="width=device-width, initial-scale=1.0,
  minimum-scale=1.0, user-scalabel=no" charset="utf-8" />

</head>
<body>

</body>
</html>

<?php

  $retMember = $_POST["Id"];
  if($retMember == '1')
  {
    echo("
      <script name=javascript>
     self.window.alert('로그인 정보가 잘못되었습니다.');
     location.replace('/');
      </script>
    ");
  }
  else {
    echo "괜찮아";
  }


 ?>
