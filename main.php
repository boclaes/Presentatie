<?php
session_start();
$url = htmlspecialchars($_POST["search"]);
$img = htmlspecialchars($_POST["name"]);
if (!$url){
    $_SESSION["error"] = "I needed to use sessions so here it is XD + you need to fill in an url";
    header("Location: http://website.int/");
}
elseif (!$img){
    $_SESSION["error"] = "I needed to use sessions so here it is XD + you need to fill in a name";
    header("Location: http://website.int/");
}
elseif (!$url and !$img){
    $_SESSION["error"] = "I needed to use sessions so here it is XD + you need to fill in a name and an url";
    header("Location: http://website.int/");
}
else{
    // Function to write image into file
    file_put_contents("images/".$img .".jpg", file_get_contents($url));
    echo "File downloaded!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht_11</title>
</head>
<body>
<button>
    <a href = "index.php">
        Click Here to go back
    </a>
</button>
</body>
</html>