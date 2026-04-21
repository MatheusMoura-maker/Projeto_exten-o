<?php
require_once 'conexao.php';

// Sistema de Mensagens
$status = $_GET['msg'] ?? '';
$mensagens = [
    'sucesso' => 'Ação realizada com sucesso!',
    'excluido' => 'Usuário removido do sistema.',
    'erro' => 'Erro ao processar solicitação.',
    'tabela_pronta' => 'Banco de dados configurado!'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
    $stmt->execute([$_POST['id']]);
    header("Location: show_user.php?msg=excluido");
    exit;
    $stmt = $pdo->prepare("DELETE FROM carros WHERE id = ?");
    $stmt->execute([$_POST['id']]);
    header("Location: show_car.php?msg=excluido");
    exit;
}
?>