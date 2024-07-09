<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
</head>

<body class="background-img">
  <div class="container-fluid d-flex justify-content-around">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width: 1781px;">
      <div class="container">
        <a class="navbar-brand" href="#">Cadastro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=novo">Novo Usuário</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=listar">Listar Usuário</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div style="height: 30px; background-color: transparent;"></div>
  <div class="container-fluid">
    <section class="text-center">
      <div class="p-5" height:300px;>
      </div>
      <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary" style="
        margin-top: -100px;
        backdrop-filter: blur(30px);">
        <div class="card-body py-5 px-md-5"></div>
        <div class="row">
          <div class="col mt-5">
            <?php
            include("config.php");
            switch (@$_REQUEST["page"]) {
              case "novo":
                include("novo-usuario.php");
                break;
              case "listar":
                include("listar-usuario.php");
                break;
              case "salvar":
                include("salvar-usuario.php");
                break;
              case "editar":
                include("editar-usuario.php");
                break;
              default:
                print "<h1>Bem vindo!</h1>";
            }
            ?>
            <div>
              </section>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="js/bootstrap.bundle.min.js"></script>
</body>
</div>

</html>