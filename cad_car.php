
<?php
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, usuario, email, senha) VALUES (?, ?, ?, ?)");
        $stmt->execute([$_POST['nome'], $_POST['usuario'], $_POST['email'], $_POST['senha']]);
        header("Location: show_user.php?msg=sucesso");
        exit;
    } catch (Exception $e) {
        header("Location: show_user.php.php?msg=erro");
    }
}
include_once 'header.php';
?>
<h2>Cadastrar Usuário</h2>
<form method="POST">
    <input type="text" name="nome" id="nome"  placeholder="Nome" required><br><br>
    <input type="text" name="modelo" id="modelo" placeholder="Modelo" required><br><br>
    <input type="text" name="placa" id="placa" placeholder="Placa" required><br><br>
    <button type="submit">Salvar</button>
</form>


<?php include_once 'footer.php';?>