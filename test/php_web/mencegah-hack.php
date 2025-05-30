<?php
if (!isset($_GET["name"])) {
    http_response_code(400);
    echo "Name is required";
    exit();
}

//gunakan htmlspecialchars() untuk mencegah input javasript dari url / agar tidak terkena hack
$say = "Hello " . htmlspecialchars($_GET['name']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query Parameter</title>
</head>

<body>
    <h1><?= $say ?></h1>
</body>

</html>