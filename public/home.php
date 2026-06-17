<?php

include("../infra/db/connect.php");

if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $usuario = trim($_POST["usuario"]);
    $senha = $_POST["senha"];
    $confirmar_senha = $_POST["confirmar_senha"];

    if(strlen($usuario) == 0 || strlen($senha) == 0 || strlen($confirmar_senha) == 0){

        echo "<script>alert('Preencha todas as informações para continuar.');</script>";

    }else{

      
        if(strcmp($senha, $confirmar_senha) !== 0){

            echo "<script>alert('A senha e a confirmação devem ser iguais.');</script>";

        }else{

       
            $buscarUsuario = "SELECT username FROM users WHERE username = '$usuario'";
            $consulta = $conn->query($buscarUsuario);

            if($consulta->num_rows == 0){

                $cadastro = "INSERT INTO users(username,password)
                             VALUES('$usuario','$senha')";

                if($conn->query($cadastro)){

                    echo "<script>alert('Cadastro realizado com sucesso!');</script>";

                }else{

                    echo "<script>alert('Erro ao salvar os dados no banco.');</script>";

                }

            }else{

                echo "<script>alert('Nome de usuário indisponível. Escolha outro.');</script>";

            }
        }
    }
}

?>

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php
        include("../public/component/navbar.php");
    ?>
    <h2>Bem-vindo!</h2>
    <p> Usuário logado: 
        <?php echo $_SESSION["usuario"];?>
    </p>

    <h4>Cadastrar Novo Usuário</h4>
    <form method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <label for="confirmar_senha">Confirmar Senha:</label>
        <input type="password" name="confirmar_senha">
        <br>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <?php
    
    include("../public/component/table.php");
    ?>
    <a href="logout.php" onclick='return confirm(\"Deseja realmente sair do sistema?\")'>Sair</a>
    
    
</body>
</html>