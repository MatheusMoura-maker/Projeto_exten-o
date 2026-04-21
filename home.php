<link rel="stylesheet" href="style.css">
<main>
<?php
require_once 'conexao.php';

echo "Login Realizado!<br><br>Bem-vindo";
echo '<a class="botao carro" href="show_user.php">Consultar usuarios</a>';
echo '<a class="botao carro" href="show_car.php">Consutar Carro</a>';

include_once 'footer.php';
?>
</main>