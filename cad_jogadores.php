<?php
include "conexao.php";
$conn = conexao();

      try {
        //defina o modo de erro do PDO como exceção
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
      // prepare sql and bind parameters
      $stmt = $conn->prepare("INSERT INTO atletas (nome, cpf, telefone, email)
      VALUES (:nome, :cpf, :telefone, :email)");
      $stmt->bindParam(':nome', $nome);
      $stmt->bindParam(':cpf', $cpf);
      $stmt->bindParam(':telefone', $telefone);
      $stmt->bindParam(':email', $email);


      $nome      = $_POST['nome'];
      $cpf       = $_POST['cpf'];
      $telefone  = $_POST['telefone'];
      $email     = $_POST['email'];

      $stmt->execute();

      echo "cadastrado com suscesso novamente";
    } catch(PDOException $e) {
      echo "Error 700: " . $e->getMessage();
    }
    $conn = null;

    header('Location: index_jogadores.php');
?>