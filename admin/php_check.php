 <?php
  $sqlConn = mysqli_connect("localhost","root","poo980408","user");
 
  $user_id = $_POST['userid'];
  $user_pw = $_POST['userpw'];
  $user_pwa =$_POST['userpw_a'];
  $user_email = $_POST['useremail'];
  $user_name = $_POST['username'];
 
$select_query ="SELECT id FROM info";
$result_set = mysqli_query($sqlConn,$select_query);
while($row = mysqli_fetch_assoc($result_set))
{
  if($user_id == $row['id'])
  {
    $num = 1;
    break;
  }
}//아이디가 중복이면 변수 num에다가 1을 저장해 중복을 구별
 
if(($user_pw == $user_pwa) and $num!=1)
 {
   $result = mysqli_query($sqlConn,"INSERT INTO info (id, password, passwordA, email, name) VALUES('$user_id','$user_pw','$user_pwa','$user_email','$user_name')");
   header("Location: http://localhost/register.html");
 }
 else if (($user_pw != $user_pwa) and $num==1)
 {
   echo "<script>alert(\"아이디가 중복 되었습니다.비밀번호가 일치하지 않습니다.\");</script>";
   echo "<script>
   document.location.href='http://localhost/join.php';
   </script>";
 }
 else if($num == 1)
 {
   echo "<script>alert(\"아이디가 중복 되었습니다.\");</script>";
   echo "<script>
   document.location.href='http://localhost/join.php';
   </script>";
 }
 else
 {
    echo "<script>alert(\"비밀번호가 일치하지 않습니다.\");</script>";
    echo "<script>
    document.location.href='http://localhost/join.php';
    </script>";
 }
 ?>
