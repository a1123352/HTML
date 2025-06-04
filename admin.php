<?php
session_start();
if(isset($_SESSION["ADMINISTRATOR"])){
    echo "<a href = 'form.php' target='new'>Form</a><br>";
    echo "<a href = 'info.php' target='new'>Info</a><br>";
    echo "<a href = 'logout.php'>Logout</a><br>";
}else{
    echo "You don't have the permissions";
    header("Location:login.php");
}
?>