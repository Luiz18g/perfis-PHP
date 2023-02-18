<?php include_once "header.php"?>
<form action="validar.php" method="post">
    Usuario:
    <input class="form-control" type="text" name="nome" required>
    Senha:
    <input class="form-control" type="password" name="senha" required>
    <button class="btn btn-info ms-2" type="submit">Entrar</button>
</form>
<?php include_once "footer.php"?>