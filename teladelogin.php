<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conexao, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($senha, $user['senha'])) {
        $_SESSION['user'] = $user['nome'];
        header("Location: home.php");
        exit();
    } else {
        echo "Usuário ou senha inválidos.";
    }
}
?>
