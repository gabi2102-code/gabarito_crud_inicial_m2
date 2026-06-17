<hr>

<h4> Usuários Cadastrados</h4>

<table border="1" cellpadding="2">

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>

    <?php
    
    $sqlUsuarios = "SELECT * FROM users";

    $resultadoUsuarios = $conn -> query($sqlUsuarios);
    
while($linha = $resultadoUsuarios->fetch_assoc()){
    echo "<tr>

        <td>" . $linha["id"] . "</td>
        <td>" . $linha["username"] . "</td>
        <td>" . str_repeat("*", strlen($linha["password"])) . "</td>
        <td><a href='editar.php?id=". $linha["id"] ."'>Editar</a></td>
        <td><a href='excluir.php?id=". $linha["id"] ."'>Excluir</a></td>

    </tr>";
}
    
    ?>

</table>