<?php
$uName=$_GET["姓名"];
$uPwd=$_GET["學號"];
$uEmail=$_GET["EMAIL"];
$uBirth=$_GET["生日"];
$uGender=$_GET["sex"];
$uComment=$_GET["Comment"];

echo "Your name is:".$uName."<br>";
echo "Your password is:".$uPwd."<br>";
echo "Your Email is:".$uEmail."<br>";
echo "Your Birthday is:".$uBirth."<br>";
echo "Your Gender is:".$uGender."<br>";

echo "Your comments:".nl2br(htmlentities($uComment));

?>