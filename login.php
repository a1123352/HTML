<?php
if (isset($_COOKIE["uNM"])) {
    echo "<a href='logout.php'>Logout</a><br>";
    echo "Welcome back, " . $_COOKIE["uNM"];
} else {
    echo date('Y-m-d H:i:s') . "<br>";
    echo "<h1>Please login to use the system</h1>";
    echo '<form action="logincheck.php" method="POST">';
    echo "Please select your status: ";
    echo "<input type='radio' name='userStatus' value='administrator'>administrator";
    echo "<input type='radio' name='userStatus' value='user'>user<br>";
    echo 'Please input your username: <input type="text" name="userName" required><br>';
    echo 'Please input your password: <input type="password" name="userPwd" required><br>';
    echo '<input type="submit"><input type="reset">';
    echo '</form>';
}
?>