<?php

require("conecctor.php"); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = trim($_POST["nome"]);
    $sobrenome = trim($_POST["sobrenome"]);
    $email = trim($_POST["email"]);
    $numero = $_POST["numero"];


    $query = "INSERT INTO usuarios (nome, sobrenome, email, numero) 
              VALUES (?, ?, ?, ?)";
    
    try {
        $stmt = $pdo->prepare($query);
 
        $stmt->execute([$nome, $sobrenome, $email, $numero]); 
        
        echo "Usuário **cadastrado** com sucesso!";

    } catch (\PDOException $e) {
        if ($e->getCode() == 23000) {
            echo "Erro: Este **e-mail já está cadastrado**.";
        } else {

            echo "Erro ao cadastrar. Detalhes: " . $e->getMessage();
        }
    }

} else {
    
}
?>
