<?php
session_start();
?>
<html>
<head></head>
<body>
<?php
if(isset($_SESSION["USER"]) || isset($_SESSION["ADMINISTRATOR"])){
    echo "Welcome"."<br>";
    echo "<a href='logout.php'>Logout</a><br>";

    echo "<form action='info.php' method='GET' target='new'>";
    echo "Email: <input type='email' name='uML' required><br>";
    echo "Name: <input type='text' name='uNAME' required><br>";
    echo "Gender: <input type='radio' name='uGD' value='male'>Male";
    echo "<input type='radio' name='uGD' value='female'>Female<br>";
    echo "Password: <input type='password' name='uPW' required><br>";
    echo "Interests:<br>";
    echo "<input type='checkbox' name='uIT[]' value='music'>Music";
    echo "<input type='checkbox' name='uIT[]' value='sport'>Sport";
    echo "<input type='checkbox' name='uIT[]' value='painting'>Painting<br>";
    echo "City:";
    echo "<select name='uCT'>";
    echo "<option value='kaohsiung'>Kaohsiung</option>";
    echo "<option value='taipei'>Taipei</option>";
    echo "<option value='taichung'>Taichung</option>";
    echo "</select><br>";
    echo "How much do you like this webpage: <input type='range' name='uRG' required><br>";
    echo "Your website: <input type='url' name='uWP' required><br>";
    echo "Birthday: <input type='date' name='uDT' required><br>";
    echo "Favorite color: <input type='color' name='uCL' required><br>";
    echo "<input type='hidden' name='uSC' value='LOL' required>";
    echo "Comments:<br>";
    echo "<textarea cols='30' rows='10' name='uCM'></textarea><br>";
    echo "<input type='submit'><input type='reset'>";
    echo "</form>";
}else{
    echo "illigal user";
    header("Refresh:2;url='login.php'");
}
?>    
</body>
</html>