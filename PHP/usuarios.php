<?php
echo"ok";


    require("conexão.php");

if(isset($_POST)){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];

    $query = "INSERT INTO tblusuarios (nome,sobrenome,numero,email) VALUES ('$nome','$sobrenome','$numero','$email')";

    $stmt =  $pdo->prepare($query);
    $stmt->execute();

    echo"PESSOA CADASTRADA COM SUCESSO!";
}
?>
