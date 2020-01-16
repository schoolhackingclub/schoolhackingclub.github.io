<!DOCTYPE html>
<html>
<head>
  <meta charset ="utf-8" />
  <title>회원가입</title>
</head>
  <body>
    <form name ='join' method="POST" action="php_check.php">
      <h1>input your information</h1>
      <table border="1">
        <label>ID : <input type="text" name="userid" /></label>
        <br />
        <label>PW : <input type="text" name="userpw" /></label>
        <br />
        <label>PW again: <input type="text" name="userpw_a" /></label>
        <br />
        <label>email : <input type="text" name="useremail" /></label>
        <br />
        <label>name : <input type="text" name="username" /></label>
        <br />
        <input type="submit" value="제출" onclick = "location.href='http://localhost/register.html'"; />
      </table>
    </form>
    <input type="reset" value="rewrite" />
  </body>
</html>
