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
            <h1 class="m-0 text-dark">Atualização de Dados Cadastrados</h1>
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
                <h3 class="card-title">Editar Atletas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" name="form_add_novos_atletas" method="POST" action="editar.php?id=<?php echo $id; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="id">ID</label>
                  <input type="text" class="form-control" id="id" name="id" require disabled value="<?php echo $id; ?>">
                  </div>
                  <div class="form-group">
                    <label for="nome">Nome</label>
                  <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo" required value="<?php echo $nome; ?>">
                  </div>

                  <div class="form-group">
                    <label for="cpf">CPF</label>
                  <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF: 000.000.000-00" required value="<?php echo $cpf; ?>">
                  </div>
		              
		              <div class="form-group">
                    <label for="telefone">Celular</label>
                  <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Celular: (00)00000-0000" value="<?php echo $telefone; ?>">
                  </div>
		              <div class="form-group">
                    <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" required value="<?php echo $email; ?>">
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
              </form>
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
