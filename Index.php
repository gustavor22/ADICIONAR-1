<?php 

  require_once("conexao.php");

?>    

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ad.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
      
    <!-- CSS only -->
    <title>Adicionar - Memorize</title>
  </head>

  <body>
    <!--CABEÇALHO DO SITE-->
    <header>
      <div class="container-logo">
        <div class="logo-imagem"><img src="img/logo.png" style="width: 40%"></div>
        <div class="logo-text">
          <h1></h1>
        </div>
      </div> 
      <div class=" ">
        <i class=""></i>
        <span class="mx-3">
          <a class="col" href="#colecoes">Minhas Coleções</a>
          <a class="col" href="index.php">Adicionar</a>
          <a class="col" href="pesquisar">Pesquisar</a>
        </span>
      </div>

      <!-- usuario -->
      <div class="d-flex align-items-center">
        <i class="fas fa-user-alt fa-2x text-white"></i>
        <span class="mx-3"   >
          <li><a href="" class="usu"> Usuário </a></li> 
        </span>
      </div>

      <!-- conf -->
      <div class="d-flex align-items-center">
        <i class="fas fa-cog fa-2x text-white"></i>
        <span class="mx-3">
          <a href="" class="confi">  </a>
        </span>
      </div>
    </header>

    <main class="container d-flex flex-column justify-content-center myContent">
      <!-- Titulo -->
      <div class="ad">       
        <h1 class="titulo fw-bold">Adicionar</h1><br>          
      </div>

      <!-- Coleção -->
      <div class="row mb-3">
        <label for="Coleção" class="col-sm-2 col-form-label">Coleção</label>
          <div class="col-sm-10">
          <form action="adicionar.php" method="POST">
            <select class="form-select" aria-label="Default select example">
              <option selected value="1">
                <?php 
                  $sql = "SELECT * FROM colecao WHERE id_colecao = 1";
                  $dados = mysqli_query($connect, $sql);
                          
                  while($row_colecao = mysqli_fetch_assoc($dados)) {
                    echo ($row_colecao['nome']);
                  } 
                ?>
              </option>

              <option value="2">
                <?php 
                  $sql = "SELECT * FROM colecao WHERE id_colecao = 1";
                  $dados = mysqli_query($connect, $sql);
                          
                  while($row_colecao = mysqli_fetch_assoc($dados)) {
                    echo ($row_colecao['nome']);
                  } 
                ?>
              </option>
            </select>
          </div>
      </div>

      <!-- frente -->
      <div class="row mb-3">
        <label for="inputFrente" class="col-sm-2 col-form-label">Frente</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="frente" name="frente">
        </div>
      </div>
      
      <!-- verso -->
      <div class="row mb-3">
        <label for="inputVerso" class="col-sm-2 col-form-label">Verso</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="verso" name="verso">
        </div>
      </div>

      <!-- data -->
      <div class="row mb-3">
        <label for="inputData" class="col-sm-2 col-form-label">Data da criação</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="data" name="data">
        </div>
      </div>
          
      <!-- Button -->
      <button type="submit" class="bnt" name="btn-salvar" id="btn-salvar">SALVAR</button>
      
      <br>
      <br>

    </main>

      <!--RODAPE-->
      <section class="footer">
        <div class="containe";>
          <ul>
            <li class="grid-8"><h2></h2>
            <br>
              <div class="logo-imagem"><img src="img/logo.png" style="width: 10%;" ></div>
                
              <li><a href="#">Termos</a></i></li>
              <li><a href="#">Privacidade</a></i></li>
              <li><a href="#">Sobre</a></i></li>
              <li><a href="#">Ajuda</a></i></li>

              <div class="p">
                <p>TODOS OS DIREITOS RESERVADOS ©2021.MEMORIZE</p>
              </div>
            </li>
          </ul>
      </section>
  </body>
</html>