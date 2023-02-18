<?php
include_once "menu.php";
include_once "login.php";
include_once "header.php";

if(isset($_SESSION['usuario'])){
    echo "usuario não está logado";
    }else{
        echo "usuario logado";
    }
?>
<a href="logout.php"> <?php echo $_SESSION["nome"]; ?> [ Sair ]
</a>
<h1>Painel</h1>