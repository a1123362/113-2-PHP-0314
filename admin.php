<?php
    session_start();
    if(isset($_SESSION["admin"])){
        echo "<h1>Welcome admin!</h1><br>";
        echo "<h2>But it's nothing here!</h2><br>";
        echo "<h3>So just logout!</h3><br>";
        echo "<a href='logout.php'> Logout </a>";
        }else{
            echo "Illegal user detected!";
            header("Refresh:3;url='login.php'");
        }
?>