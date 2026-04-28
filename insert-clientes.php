<?php

require_once "conexao.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
        if (!isset($_POST["nome"]) || empty(trim($_POST["nome"]))) {
            echo "Nome é obrigatório.";
        }

        $nome = $_POST["nome"];
        $nrcep = $_POST["nr_cep"] ?? '';
        $telefone = $_POST["nr_telefone"] ?? '';
        $email = $_POST["ds_email"] ?? '';

        $sql = "INSERT INTO clientes (nome, nr_cep, telefone, email)
                VALUES (:nome, :nrcep, :telefone, :email)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':nrcep', $nrcep);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':email', $email);

        $stmt->execute();
          
        echo "Dados cadastrados com sucesso!";
      
} else {
    echo  "Erro no envio do formulário.";
}
