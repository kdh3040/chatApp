<!DOCTYPE html>
<html lang="ko">
<head>
  <meta name="viewport"  content="width=device-width, initial-scale=1.0,
  minimum-scale=1.0, user-scalabel=no" charset="utf-8" />
  <title>
    회원가입페이지
  </title>
</head>

<body>

  <form name="frm1" action="server/join.php"  method="post">
      이메일<input type ="text" name="Id" />
      <input type = "button" value="이메일체크"><br>
      비밀번호<input type ="text" name="Pw" /><br>
      비밀번호 확인<input type ="text" name="Pw" /><br>
      <input type = "submit">
    </form>

</body>
