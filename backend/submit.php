<?php
require_once __DIR__ . '/../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php');
    exit;
}

$nome = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');
$telefone = trim($_POST['telefone'] ?? '');
$mensagem = trim($_POST['mensagem'] ?? '');

if (!$nome || !$email) {
    die('Nome e email são obrigatórios.');
}

try {
    $stmt = $pdo->prepare("
        INSERT INTO leads (nome, email, telefone, mensagem)
        VALUES (:nome, :email, :telefone, :mensagem)
    ");

    $stmt->execute([
        ':nome' => $nome,
        ':email' => $email,
        ':telefone' => $telefone,
        ':mensagem' => $mensagem,
    ]);

    header('Location: ../index.php?success=1');
    exit;

} catch (PDOException $e) {
    die('Erro ao salvar dados.');
}
