<?php

include "conexao.php";
$conn = conexao();

try {
    //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM atletas WHERE id=:id");
    $stmt->bindParam(':id', $id);
    $id      = $_GET['id'];

    $stmt->execute();

    foreach($stmt->fetchAll() as $k=>$v) {

      $id =$v['id'];
      $nome =$v['nome'];
      $cpf =$v['cpf'];
      $telefone =$v['telefone'];
      $email =$v['email'];
    
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
// echo "</table>";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CRUD PHP</title>

  <?php
    include "_includes/header.php"
  ?>

</head>
<body class="hold-transition sidebar-mini layout-fixed">

  <?php
    include "_includes/menuesq.php"
  ?>  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dados Do Jogador</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="index_jogadores.php">Atletas</a></li>
              <li class="breadcrumb-item active">Progeto AV2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->




    </main><!-- /.container -->


      </div><!-- /.container-fluid -->
    </div>

    <!--------------------Formulario------------->
       <!-- general form elements -->
       <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Dados cadastrados</h3>
              </div>
              <!-- /.card-header -->
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                  <img src="imagens/ima.icasa.png">
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  Icasa
                  <address>
                    <strong>Associação Desportiva Recreativa Cultural Icasa</strong><br>
                    Alcunhas -	Verdão do Cariri<br>
                    Mascote	 -  Papagaio<br>
                    Estádio  -	Arena Romeirão<br>
                    Capacidade - 15.000 Pessoas<br>
                    Localização	- Juazeiro do Norte, CE<br>
                    Competição -	Cearense - Série B
                  </address>
                </div>

                
                <div class="col-sm-4 invoice-col">
                  Jogador
                  <address>
                    <strong><?php echo $nome ?></strong><br>
                    CPF: <?php echo $cpf ?><br>
                    TELEFONE: <?php echo $telefone ?><br>
                    EMAIL: <?php echo $email ?><br>
                    
                  </address>
                </div>
                
              </div>
              <!-- /.row -->




 
              </div>
            </div>
            <!-- /.card -->
    
   
    
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include "_includes/footer.php"
?>



  
</body>
</html>
