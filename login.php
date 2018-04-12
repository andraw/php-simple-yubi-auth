<html>
<head>
    <title>Simple PHP Session authentication using YubiKey</title>
</head>
<body>

<h1>Simple PHP Session authentication using YubiKey</h1>
<p>This example code allows you to create an authenticated session based on a YubiKey.</p>

<p>This code isn't intended to protect the world, but it should work fine for a small
service you'd like protected.  The file 'authenticate.php' needs to be edited and
details of the keys you would like to give access to entered.  You will also need to
install the <a href="https://github.com/Yubico/php-yubico">php-yubico</a> class.</p>

<h2>Welcome</h2>
<br>
<?php

    session_start();
    $auth_error = $_SESSION["error"];

?>

<form action="authenticate.php" method="post">
    <label>YubiKey :</label>

    <input id="yubi_otp" name="yubi_otp" type="password">
    <input name="submit" type="submit" value="Authenticate">
</form>

</body>
</html>
