<?php
SESSION_START();
session_destroy();
 ?>
 <html>
  <head>
    <meta charset="utf-8" />
    <title> 로그아웃 </title>
  </head>
  <body>
    <p style="text-align: center;">로그아웃 되었습니다.</p>
    <input type ="button" value="다시 로그인" onclick="location.href='http://localhost/register.html'"; />
  </body>
 </html>
