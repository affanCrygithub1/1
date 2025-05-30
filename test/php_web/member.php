<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
</head>

<body>
    <h1>Login</h1>
    <?php
    if ($error != "") {
        echo "<p>$error</p>";
    }
    ?>

    <form action="login.php" method="post">
        <label>Username :
            <input type="text" name="username">
        </label>
        <br>
        <label>Password :
            <input type="text" name="password">
        </label>
        <br>
        <input type="submit" value="Login">
    </form>
</body>

</html>