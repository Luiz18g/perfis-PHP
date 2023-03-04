<?php include_once "processa_formulario.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="processa_formulario.php">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required>

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required>

    <label for="profissao">Profissão:</label>
    <input type="text" name="profissao" id="profissao" required>

    <label for="descricao">Descrição:</label>
    <input type="text" name="descricao" id="descricao" required>

    <label for="instagram">Instagram:</label>
    <input type="text" name="instagram" id="instagram" required>

    <label for="linkedin">Linkedin:</label>
    <input type="text" name="linkedin" id="linkedin" required>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" required>

    <input type="submit" name="submit" value="Enviar">
</form>
</body>
</html>