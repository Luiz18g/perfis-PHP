<?php
$nome = $_POST['nome'];
$senha = $_POST['senha'];

include_once "conexao.php";

$sql = "SELECT * FROM tb_validar WHERE email = '$nome' and senha = '$senha'";

$dados = mysqli_query($conexao, $sql);

if($dados->num_rows > 0) {
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("location:perfil-painel.php");
}else{
    header("location:login.php?msg=Invalido");
    }
?>