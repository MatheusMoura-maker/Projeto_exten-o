<?php
require_once 'conexao.php';

$sql1 = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    usuario VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(100) NOT NULL,
    CONSTRAINT usuarios_email_uk UNIQUE (email)
)";

$sql2 = "CREATE TABLE IF NOT EXISTS carros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    modelo VARCHAR(100) NOT NULL,
    placa VARCHAR(100) NOT NULL,
    CONSTRAINT carros_placa_uk UNIQUE (placa)
)";

$pdo->exec($sql1);
$pdo->exec($sql2);

echo "<h1>Tabelas criadas com sucesso!</h1>";
header("Location: show_user.php?msg=tabela_pronta");