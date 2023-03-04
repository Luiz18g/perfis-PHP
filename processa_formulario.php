<?php
if(isset($_POST['submit'])) {
    // Conecta ao banco de dados
    $conexao = mysqli_connect("127.0.0.1", "root", "", "bd_perfil");

    // Verifica se a conexão foi bem sucedida
    if(!$conexao) {
        die("Conexão falhou: " . mysqli_connect_error());
    }

    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $profissao = $_POST['profissao'];
    $descricao = $_POST['descricao'];
    $instagram = $_POST['instagram'];
    $linkedin = $_POST['linkedin'];
    $senha = $_POST['senha'];

    // Insere os dados no banco de dados
    $sql = "INSERT INTO tb_perfil (nome, email, profissao, descricao, instagram, linkedin, senha) VALUES ('$nome', '$email', '$profissao', '$descricao', '$instagram', '$linkedin', '$senha')";
    if(mysqli_query($conexao, $sql)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem: " . mysqli_error($conexao);
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($conexao);
}
?>