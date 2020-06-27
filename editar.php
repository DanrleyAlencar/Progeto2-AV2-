<?php
include "conexao.php";
$conn = conexao();

      try {
        //defina o modo de erro do PDO como exceção
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      //$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
            
      // prepare sql and bind parameters
      $stmt = $conn->prepare("UPDATE atletas SET id=:id, nome=:nome, cpf=:cpf, telefone=:telefone, 
      email=:email WHERE id=:id");
      $stmt->bindParam(':id', $id);
      $stmt->bindParam(':nome', $nome);
      $stmt->bindParam(':cpf', $cpf);
      $stmt->bindParam(':telefone', $telefone);
      $stmt->bindParam(':email', $email);


      $id        = $_GET['id'];
      $nome      = $_POST['nome'];
      $cpf       = $_POST['cpf'];
      $telefone  = $_POST['telefone'];
      $email     = $_POST['email'];

      $stmt->execute();

      //echo "Atualizada com suscesso";
    } catch(PDOException $e) {
      echo "Error 700: " . $e->getMessage();
    }
    $conn = null;

    header('Location: index_jogadores.php');
?>