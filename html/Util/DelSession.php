<html lang="ko">
<meta charset="utf-8" />

<?
session_start();
session_destroy();
echo("
  <script name=javascript>
 location.replace('/');
  </script>
");
?>
