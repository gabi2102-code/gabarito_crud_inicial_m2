<?php

include("../infra/db/connect.php");

if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit();
}

$id = $_GET["id"];

$sql = "SELECT * FROM users WHERE id = $id";
$resultado = $conn->query($sql);

$usuario = $resultado->fetch_assoc();

?>

<h2>Confirmar Exclusão</h2>

<p>
Deseja realmente excluir o usuário
<strong><?php echo $usuario["username"]; ?></strong>?
</p>

<a href="delete.php?id=<?php echo $id; ?>">
    Sim, excluir
</a>

<br><br>

<a href="home.php">
    Cancelar
</a>