<?php
     session_start();
    $sqlConn = mysqli_connect("localhost","root","poo980408","user");
 
    $id = $_POST['loginID'];
    $pass = $_POST['loginPW'];
 
    $getID = "SELECT *FROM info WHERE id='$id'";
    $got = $sqlConn->query($getID);
    $An=$got->fetch_array(MYSQLI_BOTH);
    if($An['id'] == $id)
    {
        if($An['password']==$pass)
        {
                $_SESSION['id'] = $An['id'];
                $_SESSION['password'] = $An['password'];
                echo "<script>
            document.location.href='http://localhost/member.php';
            </script>";
        }
        else{
            echo "<script>alert(\"PASSWORD가 일치하지 않습니다.\");</script>";
        echo "<script>
        document.location.href='http://localhost/register.html';
        </script>";
        }
    }
    else {
        echo "<script>alert(\"ID와 PASSWORD가 일치하지 않습니다.\");</script>";
        echo "<script>
        document.location.href='http://localhost/register.html';
        </script>";
    }
    $got->free();
 
?>
