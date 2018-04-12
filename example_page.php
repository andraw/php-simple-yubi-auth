<?php
    session_start();
    if (empty($_SESSION["key"])) {
        header("location: login.php"); 
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hello again</title>
</head>
<body>
    <h1>Hello again</h1>

    <p>This is an example protected page.</p>

<a href="index.php">Index page</a><br>
<a href="logout.php">Logout</a><br>

</body>
</html>	
	
