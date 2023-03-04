<?php include_once "header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <div style="font-size: x-large">Nome:</div>
    <input type="text" name="nome_do_perfil">

    <div style="font-size: x-large">E-mail:</div>
    <input type="text" name="E-mail">

    <div style="font-size: x-large">Profissão:</div>
    <input type="text" name="Profissão">

    <div style="font-size: x-large">Descrição:</div>
    <input type="text" name="Descrição">

    <div style="font-size: x-large">Instagram:</div>
    <input type="text" name="Instagram">

    <div style="font-size: x-large">Twitter:</div>
    <input type="text" name="Twitter">

    <div style="font-size: x-large">Facebook:</div>
    <input type="text" name="Facebook">

    <div style="font-size: x-large">Linkedin:</div>
    <input type="text" name="Linkedin">

    <div style="font-size: x-large">Youtube:</div>
    <input type="text" name="Youtube">
    <br>

    <label>Foto:</label>
        <input type="file" name="arquivo">
        <br>
        
    <div style="font-size: x-large">Senha:</div>
    <input type="text" name="Senha">
    <button type="submit">Enviar</button>

</body>
</html>
<?php include_once "footer.php"?>