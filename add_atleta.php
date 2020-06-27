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
            <h1 class="m-0 text-dark"></h1>
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
                <h3 class="card-title">Registrar Novos Atletas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" name="form_add_novos_atletas" method="POST" action="cad_jogadores.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nome">Nome</label>
                  <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo" required>
                  </div>
                  <div class="form-group">
                    <label for="cpf">CPF</label>
                  <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF: 000.000.000-00" required>
                  </div>
		              
		              <div class="form-group">
                    <label for="telefone">Celular</label>
                  <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Celular: (00)00000-0000">
                  </div>
		              <div class="form-group">
                    <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Registrar</button>
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
