<?php
session_start();
if(isset($_SESSION["ADMINISTRATOR"])){
    echo "Welcome administrator"."<br>";
    $uML = $_GET["uML"];
    $uNAME = $_GET["uNAME"];
    $uGD = $_GET["uGD"];
    $uPW = $_GET["uPW"];
    $uIT = $_GET["uIT"];
    $uCT = $_GET["uCT"];
    $uRG = $_GET["uRG"];
    $uWP = $_GET["uWP"];
    $uDT = $_GET["uDT"];
    $uCL = $_GET["uCL"];
    $uSC = $_GET["uSC"];
    $uCM = $_GET["uCM"];

    echo "Your email is : ".$uML."<br>";
    echo "Your name is : ".$uNAME."<br>";
    echo "Your gender is : ".$uGD."<br>";
    echo "Your password is : ".$uPW."<br>";
    echo "Your interests are :<br>";
    foreach ($uIT as $i){
        echo $i."<br>";
    }
    echo "Your city is : ".$uCT."<br>";
    echo "Your grade about the web page is : ".$uRG."<br>";
    echo "Your website is : ".$uWP."<br>";
    echo "Your birthday is : ".$uDT."<br>";
    echo "Your color is : ".$uCL."<br>";
    echo "Your secret is : ".$uSC."<br>";
    echo "Your comments:".nl2br(htmlentities($uCM));
}else if(isset($_SESSION["USER"])){
    header("Location:form_success.php");
}else{
    echo "illigal user";
    header("Refresh:3;url='login.php'");
}
?>