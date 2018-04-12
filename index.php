<?php
    session_start();
    if (empty($_SESSION["key"])) {
        header("location: login.php"); 
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hello</title>
</head>
<body>
    <h1>Hello</h1>

    <p>Your have been logged in.</p>

<?php

    $yubi_key = $_SESSION["key"];
    $username = $_SESSION["userid"];

    echo "<b>Yubi Key Identity : </b>" . $yubi_key . "<br>\n";
    echo "<b>username : </b>" . $username . "<br><br>\n";

?>

<a href="example_page.php">Example Protected Page</a><br>
<a href="logout.php">Logout</a><br>

</body>
</html>	
	
