<?php
session_start();

if (isset($_SESSION['usuario_id'])) {
    // Deslogar o usuário destruindo todas as variáveis de sessão
    session_unset();
    session_destroy();
}

// Redirecionar para a página de login
header('Location: ../');
exit();
?>
