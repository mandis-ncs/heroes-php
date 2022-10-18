<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEROES</title>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
<?php

$pegar = $_GET["heroi"];

if($pegar == "batman"){
  echo "<img src='imgs/batman.jfif'>";
}

else if($pegar == "superman"){
  echo "<img src='imgs/superman.jpg'>";
}

else if($pegar == "coringa"){
  echo "<img src='imgs/joker.jpg'>";
}

else if($pegar == "groot"){
  echo "<img src='imgs/eu-sou-groot-online-gratis.webp'>";
}

else{
  echo "não é";
}
?>
</body>
</html>