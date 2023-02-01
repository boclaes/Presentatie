<?php
$directory = "images";
$images = glob($directory . "/*.jpg");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Opdracht_11</title>
</head>
<body>
<?php foreach ($images as $img): ?>
<img class="resize" src="<?=$img?>">
<?php endforeach;?>
<button>
    <a href = "index.php">
        Click Here to go back
    </a>
</button>
</body>
</html>