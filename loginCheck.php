<h1>Login Result</h1>

<?php
    session_start(); //The head of php.

    $defaultName1="admin";
    $defaultPwd1="1234";
    
    $defaultName2="user";
    $defaultPwd2="5678";

    $userName=$_POST["userName"];
    $userPwd=$_POST["userPwd"];

    // echo "$userName <br> $userPwd";
    // echo $userName."<br>".$userPwd;

    if($userName==$defaultName1 && $userPwd==$defaultPwd1){
        // echo "<h1>Login Successfully.</h1>";
        $_SESSION["admin"]=1;
        $cookiedate=strtotime("+10 seconds", time());
        setcookie("userName",$defaultName1,$cookiedate);
        header("Location:admin.php");
    }else if($userName==$defaultName2 && $userPwd==$defaultPwd2){
        // echo "<h1>Login Successfully.</h1>";
        $_SESSION["user"]=1;
        $cookiedate=strtotime("+10 seconds", time());
        setcookie("userName",$defaultName1,$cookiedate);
        header("Location:user.php");
    }else{
        echo "<h1>Login Failed. Please try again after 3 seconds.</h1>";
        header("Refresh:3;url='index.php'");
    }
?>