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

<form action="new.php" class="form" method="post"> <!--formulario - action=caminho - method=se vai pegar por post ou por get--> 
    <label for="">Escolha seu universo favsssorito: </label> <!--usado com form ao inves de h1 ou p-->
    <br>
    <input type="text" name="universo" placeholder="Digite o universo aqui">
    <br>
    <label for="">Clique no seu heroi favorito: </label>
    <div class="menu">
    <a href="new.php?heroi=batman" class="tecla batman">batman</a>
    <a href="new.php?heroi=superman" class="tecla superman">superman</a>
    <a href="new.php?heroi=coringa" class="tecla coringa">coringa</a>
    <a href="new.php?heroi=groot" class="tecla groot">groot</a>
    </div>
</form>
    
</body>
</html>