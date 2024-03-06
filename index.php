<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Cadastro</title>
   
  </head>
  <body>
    <br>
   
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  
    <div class="container-fluid">
      <img src="img/logo.png" width="200" height="100">
       
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
        <li class="nav-item">
          <a class="nav-link" href="?page=inserir">Profissionais</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Pacientes</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tratamento</a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="implante.php">Implante Dentário</a></li>
            <li><a class="dropdown-item" href="cirurgia.php">Cirurgia Oral</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="protocolo.php">Protocolos</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Unidades</a>
        </li>
          </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>

    </div>
  </div>
</nav>

   
<div class="container">
    <div class="row">
        <div class="col mt-5">
    <?php
    include("config.php");
       switch(@$_REQUEST["page"]){
           case "inserir":
           include("inserir-usuario.php");
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
                  case "excluir":
                    include("excluir-usuario.php");
                    break;
                    
                default :
                  print "<h2>Odonto Neves, uma clínica odontológica comprometida em proporcionar cuidados de excelência para você e sua família. Desde a nossa fundação em janeiro de 2024, na cidade de Camaçari, nossa missão tem sido levar sorrisos saudáveis e felizes para todas as cidades do interior da Bahia.</h2>";
  }

?>
          </div>       
     </div>
</div>
   


  </body>
</html>
    
    