<?php
session_start();
session_destroy();
setcookie("uNM","",time()-3600,"/");
header("Location:login.php");
?>