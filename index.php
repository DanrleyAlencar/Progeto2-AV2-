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
              <li class="breadcrumb-item active">Progeto AV2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <main role="main" class="container">
            <div class="starter-template">
                <h1>Olá Seja Bem Vindo ao Meu Site</h1>
                <p class="lead"> Aqui Terá Um Breve Resumo da Minha Vida.</p>
            </div> <br>

            <div class="row mb-6">
                <div class="col-md-6">
                  <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-primary">Quem Sou!</strong>
                      <h3 class="mb-0">Danrley Ramalho Alencar</h3>
                      <div class="mb-1 text-muted">Nascido em 10 de Setembro de 1996</div>
                      <p class="card-text mb-auto">Sou Estudante do Curso de Analise e Desenvovimento de sistemas, no Centro Universitário Doutor Leão Sampaio - UniLeão</p>
                      <a href="https://www.instagram.com/danrleyalerncar/" class="stretched-link">Instagram</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                      <img src="imagens/IMG_20200506_22412689.png"> 
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-success">Minha Paixão</strong>
                      <h3 class="mb-0">São Paulo FC</h3>
                      <div class="mb-1 text-muted">Fundado em 25 de janeiro de 1930</div>
                      <p class="mb-auto">O São Paulo Futebol Clube possui 41 títulos oficiais principais. Título oficial é a conquista de uma competição promovida e institucionalizada no calendário das federações às quais o Tricolor está filiado (FPF, CBF, Conmebol, FIFA).</p>
                      <a href="http://www.saopaulofc.net/spfc" class="stretched-link">Site</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                   <img src="imagens/57D0D88023DFB5A82FA54233A0621584DC01_saopaulopaca.jpg">
                    </div>
                  </div>
                </div>
              </div>

    </main><!-- /.container -->


      </div><!-- /.container-fluid -->
    </div>

    <!--Formulario-->
    
   
    
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
