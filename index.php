<?php
declare(strict_types=1);
session_start();
if(isset($_SESSION["error"])){
    echo $_SESSION["error"];
}
session_unset();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht_12</title>
</head>
<body>
<form
    action="main.php" method="POST">
    <label>Give me an url with an image pls:</label>
    <input type="text" name="search">
    <label>Give me the name of the image pls:</label>
    <input type="text" name="name">
    <input type="submit">
</form>
<button>
    <a href = "galary.php">
        Click here for the pictures
    </a>
</button>
</body>
</html>