<?php
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $query = "INSERT INTO usuarios (nome, email, senha, cep, endereco, cidade, estado) 
              VALUES ('$nome', '$email', '$senha', '$cep', '$endereco', '$cidade', '$estado')";

    if (mysqli_query($conexao, $query)) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }
}
?>
