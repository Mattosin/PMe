<?php
session_start();

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $conn->real_escape_string($_POST['email']);
    $senha = $conn->real_escape_string($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];

            header('Location: ../pages/home');
            exit();
        } else {
            // echo "Senha incorreta.";
            header('Location: ../pages/login');
        }
    } else {
        // echo "Nenhum usuário encontrado com esse e-mail.";
        header('Location: ../pages/login');
    }

    $conn->close();
}
?>
