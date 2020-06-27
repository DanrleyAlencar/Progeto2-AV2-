<?php
    session_start();
    include "conexao.php";
    $conn = conexao();

      try {
        //defina o modo de erro do PDO como exceção
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
      // prepare sql and bind parameters
      $stmt = $conn->prepare("DELETE FROM atletas WHERE id=:id");
      $stmt->bindParam(':id', $id);
      $id      = $_GET['id'];


      $stmt->execute();

      $session['msg_del'] = "Dados Excluidos com suscessso.";
    } catch(PDOException $e) {
      $session['msg_del'] = "Error 700: " . $e->getMessage();
    }
    $conn = null;

   header('Location: index_jogadores.php');
?>