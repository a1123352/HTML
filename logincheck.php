<?php
session_start();
$adminName = "NUK";
$adminPwd = "12345";
$userName = "nuk";
$userPwd = "54321";
$uName = $_POST["userName"];
$uPwd = $_POST["userPwd"];
$uStatus = $_POST["userStatus"];

if ($userName == $uName && $userPwd == $uPwd && $uStatus == "user") {
    $_SESSION["USER"] = 1;
    $_SESSION["ADMINISTRATOR"] = null;
    setcookie("uNM", $uName, time() + 5, "/");
    header("Location:form.php");
    exit;
} else if ($adminName == $uName && $adminPwd == $uPwd && $uStatus == "administrator") {
    $_SESSION["ADMINISTRATOR"] = 1;
    setcookie("uNM", $uName, time() + 5, "/");
    header("Location:admin.php");
    exit;
} else {
    echo "Login fail , will send you back to login";
    header("Refresh:3;url=login.php");
    exit;
}
?>