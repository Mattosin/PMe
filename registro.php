<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $conn->real_escape_string($_POST['nome']);
    $email = $conn->real_escape_string($_POST['email']);
    $senha = password_hash($conn->real_escape_string($_POST['senha']), PASSWORD_BCRYPT);

    // Verifique se o e-mail já está registrado
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows > 0){
        // echo "Este e-mail já está sendo usado.";
        header('Location: ../'); 
        exit();
    }
    $stmt->close();

    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha);

    if ($stmt->execute()) {
        $_SESSION['usuario_id'] = $conn->insert_id;
        $_SESSION['usuario_nome'] = $nome;
        header('Location: ../pages/home');
        exit();
    } else {
        // echo "Ocorreu um erro durante o registro: " . $stmt->error;
        header('Location: ../');
    }

    $stmt->close();
}

$conn->close();
?>
